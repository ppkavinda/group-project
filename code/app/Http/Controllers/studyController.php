<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studyController extends Controller
{
    public function index(){
        $users=\App\User::count();
        $facilitatorCount=\App\Facilitator::count();
        $courseCount=\App\Course::count();
        return view('study.index', ['users'=>$users, 'facilitatorCount'=>$facilitatorCount, 'courseCount'=>$courseCount]);
    }
    public function index1(){
        $users=\App\User::count();
        $facilitatorCount=\App\Facilitator::count();
        $courseCount=\App\Course::count();
        return view('study.index1', ['users'=>$users, 'facilitatorCount'=>$facilitatorCount, 'courseCount'=>$courseCount]);
    }
}
