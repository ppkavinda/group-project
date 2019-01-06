<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inquiry;
use App\Notifications\InquirySubmited;
use Illuminate\Support\Facades\Notification;

class InquiryController extends Controller
{
    public function store(Request $request){
        $inquiry = \App\Inquiry::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ]);
        $user = \App\User::where('role',1)->get();
        Notification::send($user, new InquirySubmited($inquiry->id));
        return redirect()->back();
    }

    public function countOfNotification(){
        $user = \App\User::where('role',1)->get();
        $count = $user[0]->notifications->where('type','App\Notifications\InquirySubmited')->count();
        return view('admin.index',['count'=>$count]);
    }

    public function viewInquire(){
        $inquiries=\App\Inquiry::get();
        return view('admin.inquiries.view')->with(compact('inquiries'));

    }

    public function deleteInquire($id= null){
        if(!empty($id)){
            Inquiry::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Inquiry deleted Sucessfully!');
        }

    }
}
