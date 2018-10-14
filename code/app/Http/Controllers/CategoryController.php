<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function addCategory(Request $request){
        if($request->isMethod('post')){
            $data= $request->all();
        //  echo "<pre>";print_r($data); die;
        $category =new Category;
        $category->title =$data['category_name'];
        $category->save();
        return redirect('/admin/view-category')->with('flash_message_sucess','Category added Sucessfully!');
        }
        return view('admin.category.add_categories');
    }

    public function editCategory(Request $request,$id= null){
        if($request->isMethod('post')){
            $data=$request->all();
            Category::where(['id'=>$id])->update(['title'=>$data['category_name']
            ]);
            return redirect('/admin/view-category')->with('flash_message_sucess','Category edited Sucessfully!');
        }
        $categoryDetails =Category::where(['id'=>$id])->first();
        return view('admin.category.edit_categories')->with(compact('categoryDetails'));
    }

    public function viewCategories(){
        $categories=Category::get();
        $categories=json_decode(json_encode($categories));
        return view('admin.category.view_categories')->with(compact('categories'));
    }
}
