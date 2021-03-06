<?php


namespace App\Http\Controllers;

use PDF;
use Image;
use App\Course;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index()
    {
        $courses = \App\Course::get();
        return view('study.courses.index', ['courses' => $courses]);
    }

    public function show(\App\Course $course)
    {
        // dd($course);
        return view('study.courses.course', ['course' => $course]);
    }

    public function all()
    {
        return \App\Course::get();
    }




    public function addCourse(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                
                'course_title'      => 'required|min:5',
                'course_subtitle'   => 'required|min:5|unique:courses,subtitle',
                'course_description'=> 'required|min:5|unique:courses,description',
                'cover_img'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            ]);
           
            $data=$request->all();
            $course=new Course;
            $course->category_id= $data['category_id'];
            $course->title = $data['course_title'];
            $course->subtitle = $data['course_subtitle'];

            if (!empty($data['course_description'])) {
                $course->description = $data['course_description'];
            } else {
                $course->description = '';
            }
           
            $file = $request->file('cover_img');
                               
            $filename = $file->store('img/courses', 'public');
               
            $course->cover_img = $filename;
          
            $course->save();

            return redirect('/admin/view-course')->with('flash_message_success','Course added Sucessfully!');

        }
        
        $categories = Category::get();
        // echo $levels;
        return view('admin.course.add')->with(compact('categories'));
    }

    public function editCourse(Request $request, $id= null)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                
                'course_title'      => 'required|min:5',
                'course_subtitle'   => 'required|min:5',
                'course_description'=> 'required|min:5',
                'cover_img'         => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

            ]);

            $file = $request->file('cover_img');
                                
            $filename = $file->store('img/courses', 'public');

            $data = $request->all();

            Course::where(['id'=>$id])->update([
               
               'category_id'=>$data['category_id'],
               'title'=>$data['course_title'],
               'subtitle'=>$data['course_subtitle'],
               'description'=>$data['course_description'],
               'cover_img'=>$filename,
               
            ]);

           // dd($filename);
            return redirect('/admin/view-course')->with('flash_message_success','Course edited Sucessfully!');

        }
        $categories = Category::get();
        $courseDetails =Course::where(['id'=>$id])->first();
        //dd($courseDetails);
        return view('admin.course.edit')->with(compact(['courseDetails','categories']));
    }

    public function viewCourses()
    {
        $courses = \App\Course::paginate(5);
        //   dd($courses);
        return view('admin.course.view')->with(compact('courses'));
    }

    public function deleteCourse($id = null)
    {
        if (!empty($id)) {
            Course::where(['id'=> $id])->delete();

            return redirect()->back()->with('flash_message_success','Course deleted Sucessfully!');

        }
    }

    public function indexAdmin()
    {
        $courses = \App\Course::get();
        return view('admin.course.select', ['courses' => $courses]);
    }

    public function search(Request $request)
    {
        $search =$request->get("search");
        $courses=\App\Course::where('courses.title', 'like', '%'.$search.'%')
                    ->orWhere('courses.subtitle', 'like', '%'.$search.'%')
                    ->paginate(5);
        // dd($courses);
        $this->generatePDF($courses);
    
        return view('admin.course.view', ['courses'=>$courses]);
    }

    public function generatePDF()
    {
        $courses = \App\Course::all();
        $pdf= PDF::loadview('admin.course.coursePDF', ['courses'=>$courses]);
        return $pdf->download('courseslist.pdf');
        // dd($pdf);
    }

    public function enroll_details(Request $request,$id = null)
    {
        $course = \App\Course::find($id);
        return  view('admin.course.enroll', ['course' => $course]);
    }

}
