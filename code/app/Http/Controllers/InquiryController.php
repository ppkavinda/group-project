<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
class InquiryController extends Controller
{
    public function store(Request $request){
        \App\Inquiry::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ]);
        return redirect()->back();
    }


    public function viewInquire(){
        $inquiries=\App\Inquiry::get();
        return view('admin.inquiries.view_inquiries')->with(compact('inquiries'));

    }

    public function deleteInquire($id= null){
        if(!empty($id)){
            Inquiry::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Inquiry deleted Sucessfully!');
        }

    }
}
