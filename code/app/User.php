<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   /* protected $fillable = [
 HEAD
        'name','nic','email', 'password',

        'name', 'email', 'password', 'nic'
>>>>>>> 1d46ca424f5ebb810eb2f459bc766005eeaed731
    ];

    *
     * The attributes that should be hidden for arrays.
     *
     * @var array
     
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses () {
        return $this->belongsToMany(Course::class, 'enroll', 'user_id', 'course_id')->withTimestamps();
    }*/
}
