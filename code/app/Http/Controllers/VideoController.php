<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct () {
        $this->middleware(['facilitator', 'auth']);
    }

    public function create () {
        $courses = \App\Course::get();
        return view ('study.videos.create', compact('courses'));
    }

    public function store (Request $request) {
        $request->validate([
            'video' => 'required|mimetypes:video/*|max:102000',
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|max:50',
        ]);
        $video = \App\Video::create([
            'video_path' => $request->file('video')->store('videos/courses/', 'public'),
            'course_id' => $request->course_id,
            'title' => $request->title,
            'user_id' => auth()->id(),
        ]);

        return $video;
    }
}
