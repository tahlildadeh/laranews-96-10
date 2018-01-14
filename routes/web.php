<?php

Route::prefix('backoffice')
    ->group(function(){
        Auth::routes();
    });

