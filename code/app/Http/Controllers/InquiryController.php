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

    // public function countOfNotification(){
    //     $user = \App\User::where('role',1)->get();
    //     $count = $user[0]->unreadNotifications->where('type','App\Notifications\CommentSubmited')->count();
    //     dd($count);
    //     return view('admin.index',['count'=>$count]);
    // }

    // public function readOfNotification(){
    //     $user = \App\User::where('role',1)->get();
    //     $user[0]->unreadNotifications->where('type','App\Notifications\InquirySubmited')->markAsRead();
    //     return view('admin.index');
    // }

    public function viewInquire(){
        $inquiries=\App\Inquiry::get();
        $user = \App\User::where('role',1)->get();
        $user[0]->unreadNotifications->where('type','App\Notifications\InquirySubmited')->markAsRead();
        return view('admin.inquiries.view')->with(compact('inquiries'));

    }

    public function deleteInquire($id= null){
        if(!empty($id)){
            Inquiry::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Inquiry deleted Sucessfully!');
        }

    }

    public function Inquirenofi(){
        $inqcount=\App\Inquiry::count();
        dd($inqcount);
        return view('admin.partials.sidebar')->with(compact($inqcount));
    }

}
