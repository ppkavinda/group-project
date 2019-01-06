<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // use Searchable;

    protected $guarded = [];

    public function searchableAs()
    {
        return 'course_index';
    }

    public function path()
    {
        return '/courses/' . $this->id;
    }
    public function tutes()
    {
        return $this->hasMany(Tute::class);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'enroll', 'course_id', 'user_id')->withTimestamps();
    }
}
