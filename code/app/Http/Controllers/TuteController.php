<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TuteController extends Controller
{
    public function create () {
        return view('study.tute.create');
    }
    public function show() {
    	return view('study.tute.index');
    }

    public function store (Request $request) {
        $request->validate([
            'video' => 'required | max:20000 | mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi',
            'title' => 'required',
        ]);
        $a = $request->video->store('public/videos');
        \App\Video::create([
            'title' => ''
        ]);
        return redirect()->back();
    }
}
