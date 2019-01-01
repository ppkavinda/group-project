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
    protected $fillable = [

        'name', 'email', 'password', 'nic'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function courses () {
        return $this->belongsToMany(Course::class, 'enroll', 'user_id', 'course_id')->withTimestamps();
    }

    public function posts () {
        return $this->hasMany(Post::class);
    }

    public function comments () {
        return $this->hasMany(Comment::class);
    }

    public function cart () {
        return $this->belongsToMany(Product::class, 'carts', 'user_id', 'product_id')->withPivot('quantity')->withTimestamps();
    }

    public function orders() {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
    
    public function products(){
        return $this->hasMany(Product::class);
    }

    // helpers
    public function isAdmin () {
        return $this->role <= 1;
    }
    public function isFacilitator () {
        return $this->role <= 2;
    }
    public function isEntrepreneur () {
        return $this->role <= 3;
    }
    
}
