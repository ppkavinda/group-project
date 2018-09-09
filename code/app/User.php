<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  
 protected $fillable = [
        'name','nic','email', 'pwd','cpwd',
    ];

    public function courses () {
        return $this->belongsToMany(Course::class, 'enroll', 'user_id', 'course_id')->withTimestamps();
    }
}
