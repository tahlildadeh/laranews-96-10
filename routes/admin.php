<?php

Route::redirect('/', '/dashboard', '301');

Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');