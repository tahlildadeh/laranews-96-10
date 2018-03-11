<?php

Route::get('/test', function () {
    $user = \App\User::first();
    //$article = \App\Article::first();

    //$comment = $article->addComment('Comment 1', $user);
    //dd($comment);
//     $comment = $article->addAnonymousComment('Comment 3', 'Guest', 'guest@gmail.com');


    $initialComment = \App\Comment::with(['comments', 'commentable'])->find(9);
    $comment = $initialComment->addComment('Comment 1.3.1.1.1', $user);
    dd($comment->toArray());
//    $comment = $initialComment->addAnonymousComment('Comment 3', 'Guest', 'guest@gmail.com');
});

Route::get('/article/{article}', function(\App\Article $article) {
    $article->load('comments');
    $commentIds = [];
    foreach ($article->comments as $comment)
    {
        $commentIds[] = $comment->id;
    }
    $otherComments = null;
    if(count($commentIds)) {
        $otherComments = \App\Comment::subComments($commentIds)->orderBy('level')->get();
    }

    $subComments = [];
    foreach ($otherComments as $comment){
        $parents = explode('-', trim($comment->address, '-'));
        $pointer = &$subComments;
        foreach ($parents as $parent){
            if(!isset($pointer[$parent])){
                $pointer[$parent] = [];
            }
            $pointer = &$pointer[$parent];
        }

        $pointer[] = $comment->toArray();
    }
    dd($subComments);
    return view('article.show',compact('article', 'subComments'));
});

Route::get('/mail', function() {
    $mail = new \App\Mail\Test('Ehsan');
    Mail::to('ehsan2e@gmail.com')->send($mail);
});

Route::prefix('backoffice')
    ->group(function () {
        Auth::routes();
    });

