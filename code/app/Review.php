<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];

    public function product() {
        return $this->belongsTo(\App\Product::class);
    }
    public function user() {
        return $this->belongsTo(\App\User::class);
    }
}
