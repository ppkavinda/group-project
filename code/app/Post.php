<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{ 
    public function videos () {
        return $this->hasMany(Videos::class);
    }

    public function course () {
        return $this->belongsTo(Course::class);
    }

    public function auther () {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function snippet () {
        $postBody = new \domdocument();
        $postBody->loadHtml($this->body, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $firstP = $postBody->getElementsByTagName('p')[0]->nodeValue;
        if (strlen($firstP) > 200) {
            return substr($firstP, 200);
        } else {
            return $firstP;
        }
    }
}
