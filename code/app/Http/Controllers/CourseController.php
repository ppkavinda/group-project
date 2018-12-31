<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Course;
use Image;

class CourseController extends Controller
{
    public function index() {
        $courses = \App\Course::get();
	    return view('study.courses.index', ['courses' => $courses]);
    }

    public function show(\App\Course $course) {
        // dd($course);
	    return view('study.courses.course', ['course' => $course]);
    }

    public function all () {
        return \App\Course::get();
    }




    public function addCourse(Request $request){
        
        if($request->isMethod('post') ){
           
            $data=$request->all();
            $course=new Course;
            $course->category_id=$data['category_id'];
            $course->title =$data['course_title'];
            $course->subtitle=$data['course_subtitle'];
            if(!empty($data['course_description'])){
                $course->description=$data['course_description'];
            }
            else{
                $course->description='';
            }
           
            $file = $request->file('cover_img');
                $destinationPath = 'dist/img/courses';
                $filename=$file->getClientOriginalName();
                $file->move($destinationPath,$file->getClientOriginalName());
               
                $course->cover_img=$filename;
            
          
            $course->save();
            return redirect('/admin/view-course')->with('flash_message_success','Courses added Sucessfully!');
        
           
                

        }
        
        $levels = Category::get();
       // echo $levels;
        return view('admin.course.add_courses')->with(compact('levels'));
    }
    public function editCourse(Request $request,$id= null){
        if($request->isMethod('post')){
            $data = $request->all();
           Course::where(['id'=>$id])->update([
               
               'category_title'=>$data['category_name']
            ]);
            return redirect('/admin/view-category')->with('flash_message_success','Category edited Sucessfully!');
        }
        $categoryDetails =Category::where(['id'=>$id])->first();
        return view('admin.category.edit_categories')->with(compact('courseDetails'));
    }

    public function viewCourses(){
        $courses=DB::table('courses')
        ->join('categories', 'category_id'	, '=', 'categories.id')
        ->select('courses.*','categories.category_title')
        ->get();
        return view('admin.course.view_courses')->with(compact('courses'));
    }
    public function deleteCourse($id= null){
        if(!empty($id)){
            Course::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category deleted Sucessfully!');
        }

    }

    



}
