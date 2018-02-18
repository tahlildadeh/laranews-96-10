<?php

Route::get('/test', function() {
   //$category = \App\Category::with(['children', 'parentCategory'])->findOrFail(5);
    $category = App\Category::find(5);
    return $category;
});

Route::prefix('backoffice')
    ->group(function(){
        Auth::routes();
    });

