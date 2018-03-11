<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 3/11/2018
 * Time: 6:16 PM
 */

namespace App;


trait CommentableTrait
{
    /**
     * @param $comment
     * @return mixed
     */
    protected function saveComment($comment)
    {
        $address = null;
        $level = 0;
        if($this instanceof Comment){
            $address = ($this->address ?? '-')  . $this->id . '-';
            $level = ($this->level ??  0) + 1;
        }
        $comment->address = $address;
        $comment->level = $level;
        $this->comments()->save($comment);
        return $comment->fresh(['commentator']);
    }

    /**
     * @param string $message
     * @param string $name
     * @param string $email
     * @return Comment
     */
    public function addAnonymousComment(string $message, string $name, string $email) : Comment
    {
        $comment = new \App\Comment(compact('email', 'message', 'name'));
        return $this->saveComment($comment);
    }

    /**
     * @param string $message
     * @param User $comentator
     * @return Comment
     */
    public function addComment(string $message, User $comentator) : Comment
    {
        $comment = new \App\Comment(compact('message'));
        $comment->commentator()->associate($comentator);
        return $this->saveComment($comment);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}