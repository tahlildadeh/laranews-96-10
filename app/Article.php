<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use CommentableTrait;

    protected $fillable = ['title', 'excerpt', 'content'];
    protected  $dates = ['published_at'];


    public function author()
    {
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function editor() {
        return $this->belongsTo(User::class, 'editor_id', 'id');
    }
}
