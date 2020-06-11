<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditUserRequest;
// use Illuminate\Foundation\Http\FormRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::paginate(10);
        return view('admin.user_admin.user_admin', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user_admin.addUser_admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        // $user = User::create(array('name' => 'username', 'password' => 'bcrypt($request ->password)','email'=>'email', 'rule'=>'user_level');
        $user = new User;
        $user->name = $request ->username;
        $user->password = bcrypt($request ->password);
        $user->email = $request ->email;
        $user->rule = $request ->user_level;
        // dd($request, $user);
        $user->save();

        return redirect()->route('admin.addUser')->with('config_create', 'Tạo mới User thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user_admin.editUser_admin', ['user' =>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id) {
        $user = User::find($id);
        //echo json_encode($user);die();
        
        $user ->name = $request ->username;
        $user ->rule = $request ->user_level;
        if(isset($request ->password)){
            $user ->password = bcrypt($request ->password);
        }
        $user ->save();

        return redirect('admin/user/edit/'.$id)->with('config_edit', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::find($id);
        $user->delete();
        return redirect()->route('admin_user')->with('config_delete', 'Bạn đã xóa thành công');
    }
}
