<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- CSS  -->
    <link rel="stylesheet" href="{{asset('css/dist/admin/general_admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/dist/admin/header_admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/dist/admin/menu_admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/dist/admin/main_list_admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/dist/admin/main_create_edit_admin.css')}}">
    

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- Font Awesome's -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
</head>
<body>
    <div>
        <div class="header-main">
            @include('admin.layouts_admin.header_admin')
        </div>
        <div class="main">
            <div class="main-left">
                @include('admin.layouts_admin.menu_admin') 
            </div>
            <div class="main-right">
                @yield('content')
            </div>
        </div>
        
    </div>

    <script>
        $(document).ready(function(){
            $("li.list-menu-bottom").click(function(){
            //  $(this).find('span:fist').toggleClass('fas fa-chevron-down');
                var currentUl = $(this).find('ul');
                
                $("li.list-menu-bottom > ul").each(function() {
                    if($(this).is(currentUl)) {
                        $(this).slideToggle();
                    }else {
                        $(this).slideUp();
                    }
                });
            });
        });
    </script>


</body>
</html>