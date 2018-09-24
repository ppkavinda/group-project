<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = \App\Course::get();
	    return view('study.courses.index', ['courses' => $courses]);
    }

    public function show(\App\Course $course) {
	    return view('study.courses.course', ['course' => $course]);
    }

    public function all () {
        return \App\Course::get();
    }
}
