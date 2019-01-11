<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware(['facilitator', 'auth']);
    }

    public function create()
    {
        $courses = \App\Course::get();
        return view('study.videos.create', compact('courses'));
    }

    public function getWeek()
    {
        $currentActive = Event::where('status', 1)->first();
        if ($currentActive->type==1) {
            $query = \DB::table('ifest_participants');
        } elseif ($currentActive->type==2) {
            $query = \DB::table('ics_participants');
        } elseif ($currentActive->type==3) {
            $query = \DB::table('ihack_participants');
        } else {
            $query = \DB::table('ucscevent_participants');
        }
        
        return $query->select(DB::raw('DATE(created_at) as date, COUNT(event_id) count'))
            ->where('event_id', $currentActive->id)
            ->groupBy('date')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|mimetypes:video/*|size:102000',
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
