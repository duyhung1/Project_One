<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
</head>
<body>
    <div id="admin">
        <div class="admin-left">
            @include('admin.layouts_admin.menu_admin')
        </div>
        <div class="admin-right">
            <div class="header-admin">
                @include('admin.layouts_admin.header_admin')
            </div>
            <div class="content-ad">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>