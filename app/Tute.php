<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tute extends Model
{
    public function videos () {
        return $this->hasMany(Videos::class);
    }

    public function course () {
        return $this->belongsTo(Course::class);
    }
}
