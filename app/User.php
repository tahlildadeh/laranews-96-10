<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $appends = ['hello'];

    const ROLE_AUTHOR = 1;
    const ROLE_EDITOR = 2;
    const ROLE_ADMIN = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function authoredArticles()
    {
        return $this->hasMany(Article::class, 'author_id', 'id');
    }

    public function editedArticles()
    {
        return $this->hasMany(Article::class, 'editor_id', 'id');
    }

    public function getHelloAttribute($value) {
        return 'salam';
    }
}
