<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function path () {
        return '/courses/' . $this->id;
    }
    public function tutes () {
        return $this->hasMany(Tute::class);
    }

    public function posts () {
        return $this->hasMany(Post::class);
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }
    
    public function users () {
        return $this->belongsToMany(User::class, 'enroll', 'course_id', 'user_id')->withTimestamps();
    }
}
