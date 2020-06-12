<!doctype html>
<html lang="en">
  <head>
    <title>Login Admin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- custom CSS -->
    <link rel="stylesheet" href="{{asset('css/dist/admin/login_admin.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-3">
            
            <form action="{{ route('admin.login') }}" method="post">
            @csrf
                <legend>Đăng nhập</legend>
                <div class="form-group">
                    <!-- <label for="">Email</label> -->
                    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="E-mail" value="{{ old('email') }}">
                    @if($errors->has('email'))
                    <small id="emailHelpId" class="form-text text-muted">{{$errors->first('email')}}</small>
                    @endif
                    <!-- <label for="">Mật khẩu</label> -->
                    <input type="password" class="form-control" name="password" id="" aria-describedby="emailHelpId" placeholder="Mật khẩu" value="{{ old('password') }}">
                    @if($errors->has('password'))
                    <small id="emailHelpId" class="form-text text-muted">{{$errors->first('password')}}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                @if (session('notification'))
                <ul>
                    <li class="text-danger"> {{ session('notification') }}</li>
                </ul>
                @endif
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