<?php

namespace App\Http\Controllers\Admin;

use App\Rules\CurrentPassword;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function changePassword(Request $request){
        if(!$request->ajax()){
            return redirect()->route('admin.dashboard');
        }

        $this->validate(
            $request,
            [
                'current_password' => [
                    'required',
                    new CurrentPassword(),
                ],
                'new_password' => ['required', 'string', 'min:6', 'confirmed']
            ]
            );

        $user = \Auth::user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        return [
            'successful' => true
        ];
    }
}
