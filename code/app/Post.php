<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 
    public function course () {
        return $this->belongsTo(Course::class);
    }
    
    public function users () {
        return $this->belongsToMany(User::class, 'enroll', 'user_id', 'course_id')->withTimestamps();
    }
}
