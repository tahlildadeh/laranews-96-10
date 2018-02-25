<?php

Route::redirect('/', '/backoffice/dashboard', '301');

Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');

Route::post('/change-password', 'UserController@changePassword')->name('admin.change_password');

Route::resource('categories', 'CategoryController');

Route::get('flash', function() {
    flash('Hurray!')->success();
    return redirect()->route('admin.dashboard');
});