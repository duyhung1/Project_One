<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/dist/user/register.css')}}">
  </head>
  <body>
    <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3">
                  @if (session('config_create'))
                    <small id="emailHelpId" class="form-text text-muted text-last">{{ session('config_create') }}</small>
                    @endif
                <form action="{{ route('register') }}" method="post">
                @csrf
                    <legend>Đăng ký tài khoản</legend>
                    <div class="form-group">
                      <label for="">Tên tài khoản</label>
                      <input type="text" class="form-control" name="username" id="" aria-describedby="emailHelpId" placeholder="Username" value="{{ old('username') }}">
                      @if($errors->has('username'))
                      <small id="emailHelpId" class="form-text text-muted">{{$errors->first('username')}}</small>
                      @endif
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="E-mail" value="{{ old('email') }}">
                      @if($errors->has('email'))
                      <small id="emailHelpId" class="form-text text-muted">{{$errors->first('email')}}</small>
                      @endif
                      <label for="">Mật khẩu</label>
                      <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="Mật khẩu" value="{{ old('password') }}">
                      @if($errors->has('password'))
                      <small id="emailHelpId" class="form-text text-muted">{{$errors->first('password')}}</small>
                      @endif
                      <label for="">Nhập lại Mật khẩu</label>
                      <input type="password" class="form-control" name="repassword" id="" aria-describedby="emailHelpId" placeholder="Nhập lại Mật khẩu" value="{{ old('repassword') }}">
                      @if($errors->has('repassword'))
                      <small id="emailHelpId" class="form-text text-muted">{{$errors->first('repassword')}}</small>
                      @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                   
                </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>