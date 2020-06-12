<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    // public function __construct()
    // {
    //     $this->checkLogin();
    //     $this->middleware('auth');
    // }

    // public function checkLogin() {
    //     if(Auth::check()) {
    //         view()->share('user_login', Auth::user());
    //     }
    // }

    public function index()
    {
        return view("admin.layouts_admin.index");
    }

}


