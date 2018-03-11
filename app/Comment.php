<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use CommentableTrait;

    protected $fillable = ['message', 'name', 'email'];

    public function commentator()
    {
        return $this->belongsTo(User::class, 'commentator_id', 'id');
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    public function scopeSubComments($query, $commentIds)
    {
        return $query->where('commentable_type', self::class)->where(function ($query) use ($commentIds) {

            foreach ($commentIds as $key => $id) {
                if ($key) {
                    $query = $query->orWhere('address', 'LIKE', "-$id-%");
                } else {
                    $query = $query->where('address', 'LIKE', "-$id-%");
                }
            }
            return $query;
        });
    }
}
