<?php

Route::get('/test', function() {
   $user = \App\User::first();
   // die($user->hello);
   return $user;
});

Route::prefix('backoffice')
    ->group(function(){
        Auth::routes();
    });

