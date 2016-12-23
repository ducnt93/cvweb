<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function getLogin(){
        if(!Auth::check()){
            return view('admin.login');
        }else{
            return redirect('dvh_admin');
        }
    }
    public function postLogin(LoginRequest $request){
        if (Auth::attempt(['email'                 => $request->email,
                            'password'             => $request->password,
                            'level'                => 210894
                             ])) {
            // Authentication passed...
            return redirect('dvh_admin');
        }else{
            return redirect()->back();
        }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
