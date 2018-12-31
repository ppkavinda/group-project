<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Category;
class CategoryController extends Controller

{
    public function addCategory(Request $request){
        
        if($request->isMethod('post')){

            $request->validate([
                'category_name' => 'required|min:5',
            ]);
           
            $data = $request->all();
            //  echo "<pre>";print_r($data); die;
            $category =new Category;
            $category->title =$data['category_name'];
            $category->save();

            return redirect('/admin/view-category')->with('flash_message_success','Category added Sucessfully!');
        }
       
        return view('admin.category.add_categories');
    
    }

    public function editCategory(Request $request,$id= null){
        if($request->isMethod('post')){
            $data = $request->all();
            Category::where(['id'=>$id])->update(['category_title'=>$data['category_name']
            ]);
            return redirect('/admin/view-category')->with('flash_message_success','Category edited Sucessfully!');
        }
        $categoryDetails =Category::where(['id'=>$id])->first();
        return view('admin.category.edit_categories')->with(compact('categoryDetails'));
    }

    public function deleteCategory($id= null){
        if(!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category deleted Sucessfully!');
        }

    }

    public function viewCategories(){
        $categories=DB::table('categories')
        ->orderBy('updated_at','desc')
        ->get();
        $categories=json_decode(json_encode($categories));
        return view('admin.category.view_categories')->with(compact('categories'));
    }

   // public function searchCategory(){
     //    $name= Input::get('category_name');
      //   if($name!= ""){
         //    $categories=Category::where('category_title','LIKE','%'.$name.'%')
                                       // ->get();
         //   if(count($categories)>0)
         //   return view('admin.category.view_categories')->withDetails($categories)->withQuery($name);
       //  }
       //  return view('admin.category.view_categories')->withMessage("No user found!"); 
  // }

}// @foreach($categories as $category)
