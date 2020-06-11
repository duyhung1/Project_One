@extends('admin.layouts_admin.index')
@section('content')
<div class="create">
    @if(session('config_create'))
        <div class="alert">
            {{session('config_create')}}
        </div>
    @endif
    <h2>Tạo mới người dùng</h2>
    <div class="form">
        <form action="{{ route('create.user')}}" method="post">
        <!-- @method('PATCH') -->
        @csrf

            <label>Tên người dùng</label>
            <input type="text" id="name" name="username" placeholder="Please Enter Username" value="{{ old('username') }}">
            @if($errors->has('username'))
                <p class="help">{{$errors->first('username')}}</p>
            @endif
            <label>Email</label>
            <input type="email" name="email" id="" placeholder="Please Enter Email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <p class="help">{{$errors->first('email')}}</p>
            @endif
            <label>Mật khẩu</label>
            <input type="password" name="password" id="" placeholder="Please Enter Password">
            @if($errors->has('password'))
                <p class="help">{{$errors->first('password')}}</p>
            @endif
            <label>Nhập lại mật khẩu</label>
            <input type="password" name="repassword" id="" placeholder="Please Enter RePassword">
            @if($errors->has('repassword'))
                <p class="help">{{$errors->first('repassword')}}</p>
            @endif
            <label>Phân quyền người dùng</label>
            <select name="user_level" id="">
                <option value="1">Quản trị viên</option>
                <option value="0">Thành viên</option>
            </select>
            <button type="submit">Tạo mới</button>
        </form>
    </div>
</div>
    <script>
        $(document).ready(function(){
            $("li.user-list >ul:last").slideDown();
            $("li.user-list >ul:last li:last").addClass("active");
        });
    </script>
@endsection