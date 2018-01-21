<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
}
