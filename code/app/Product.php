<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category () {
        return $this->belongsTo(Category::class);
    }

    public function cart () {
        return $this->belongsToMany(User::class, 'carts', 'product_id', 'user_id')->withPivot('quantity')->withTimestamps();
    }
}
