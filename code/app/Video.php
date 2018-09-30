<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['video_path', 'course_id', 'title', 'user_id'];

    public function course () {
        return $this->belongsTo(Course::class);
    }

    public function owner () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments () {
        return $this->hasMany(Comment::class)->with('user');
    }

}
