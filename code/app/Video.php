<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function tute() {
        return $this->belongsTo(Tute::class);
    }
}
