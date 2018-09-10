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
            'video' => 'required|max:20000|mimes:mp4,mov'
        ]);
        $a = $request->video->store('public/videos');

        // return redirect()->back();
    }
}
