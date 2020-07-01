<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function getLogin() {
        return view('authentication.login');
    }

    public function postLogin(LoginRequest $request) {
        $loginAdmin = [
            'email'=>$request->email,
            'password'=>$request->password,
            'rule'=>"1"
        ];
        $login = [
            'email'=>$request->email,
            'password'=>$request->password,
            'rule'=>"0"
        ];
        if(Auth::attempt($loginAdmin)) {
            return redirect()->route('admin.index');
        }elseif(Auth::attempt($login)) {
            return redirect()->route('index');
        }else {
            return redirect()->route('login')->with('notification','Tài khoản hoặc mật khẩu của bạn không đúng');
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
