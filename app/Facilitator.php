<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilitator extends Model
{
    public function user() {
        return $this->hasOne(User::class);
    }
}
