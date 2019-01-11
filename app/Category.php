<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function products () {
        return $this->hasMany(Product::class);
    }
}
