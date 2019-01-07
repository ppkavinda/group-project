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
                'category_name' => 'required|min:5|unique:categories,title',
            ]);
           
            $data = $request->all();
            //  echo "<pre>";print_r($data); die;
            $category =new Category;
            $category->title =$data['category_name'];
            $category->save();

            return redirect('/admin/view-category')->with('flash_message_success','Category added Sucessfully!');
        }
       
        return view('admin.category.add');
    
    }

    public function editCategory(Request $request,$id= null)
    {
        if($request->isMethod('post')){

            $request->validate([
                'category_name' => 'required|min:5|unique:categories,title',
            ]);
            
            $data = $request->all();
            Category::where(['id'=>$id])->update(['title'=>$data['category_name']
            ]);
            return redirect('/admin/view-category')->with('flash_message_success','Category edited Sucessfully!');
        }
        $categoryDetails =Category::where(['id'=>$id])->first();
        return view('admin.category.edit')->with(compact('categoryDetails'));
    }

    public function deleteCategory($id= null){
        if(!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category deleted Sucessfully!');
        }

    }

    public function viewCategories()
    {
        $categories=DB::table('categories')->paginate(5);
        
        /// dd($categories);
        
        return view('admin.category.view',['categories'=> $categories]);
    }

    public function search(Request $request)
    {
        $search =$request->get("search");
        $categories=\App\Category::where('title','like','%'.$search.'%') ->paginate(5);  
        return view('admin.category.view',['categories'=>$categories]);
    }



}// @foreach($categories as $category)
