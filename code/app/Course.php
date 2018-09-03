<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function tutes() {
        return $this->hasMany(Tute::class);
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }
}
