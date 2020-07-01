@extends('admin.layouts_admin.index')
@section('content')
<div class="create-product">
    @if(session('config_edit'))
        <div class="alert">
            {{session('config_edit')}}
        </div>
    @endif
    <h2>Chỉnh sửa người dùng: {{$user['name']}}</h2>
    <div class="form">
        <form action="{{$user['id']}}" method="POST">
        <!-- @method('PATCH') -->
        @csrf

            <label>Tên người dùng</label>
            <input type="text" id="name" name="username" placeholder="Please Enter Username" value="{{$user['name']}}">
            @if($errors->has('username'))
                <p class="help">{{$errors->first('username')}}</p>
            @endif
            <label>Email</label>
            <input class="no_drop" type="email" name="email" id="" placeholder="Please Enter Email" value="{{$user['email']}}" readonly>
            <!-- @if($errors->has('email'))
                <p class="help">{{$errors->first('email')}}</p>
            @endif -->
            <!-- <input type="checkbox" name="changepassword" id="changepassword"> -->
            <label>Mật khẩu</label>
            <input type="password" name="password" id="" placeholder="Please Enter Password" value="" class="password">
            @if($errors->has('password'))
                <p class="help">{{$errors->first('password')}}</p>
            @endif
            <label>Nhập lại mật khẩu</label>
            <input type="password" name="repassword" id="" placeholder="Please Enter RePassword" class="password">
            @if($errors->has('repassword'))
                <p class="help">{{$errors->first('repassword')}}</p>
            @endif
            <label>Phân quyền người dùng</label>
            <select name="user_level" id="">
                <option value="1" 
                    @if($user['rule'] == 1)
                    {{"selected"}}
                    @endif
                >Quản trị viên</option>
                <option value="0"
                    @if($user['rule'] == 0)
                    {{"selected"}}
                    @endif
                >Thành viên</option>
            </select>
            <button type="submit">Cập nhập</button>
        </form>
    </div>
</div>
@endsection

<!-- @section('script')
    <script>
        $(document).ready(function() {
            $('#changepassword').change(function() {
                if($(this).is(":checked")) {
                    $('.password').removeAttr('disabled');
                }else {
                    $('.password').attr('disabled','');
                }
            });
        });
    </script>
@endsection -->