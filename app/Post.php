<?php
namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Searchable;

    public function searchableAs()
    {
        return 'posts_index';
    }
    protected $fillable = ['title' ,'body', 'user_id', 'course_id', 'cover_img'];

    public function path()
    {
        return '/posts/' . $this->id;
    }

    public function getCoverImgAttribute($cover)
    {
        return '/storage/' . ($cover ?: 'img/posts/covers/default.jpg');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function auther()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->with('user');
    }

    public function snippet()
    {
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
