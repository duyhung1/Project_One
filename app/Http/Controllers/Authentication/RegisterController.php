<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('authentication.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request ->username;
        $user->password = bcrypt($request ->password);
        $user->email = $request ->email;
        $user->rule = "0";
        // dd($request, $user);
        $user->save();

        return redirect()->route('register')->with('config_create', 'Tạo mới User thành công');
    }
}
