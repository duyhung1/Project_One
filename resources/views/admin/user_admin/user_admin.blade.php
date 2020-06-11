@extends('admin.layouts_admin.index')
@section('content')
<div class="main-sub">
    
    <div class="add-main">
        @if(session('config_delete'))
            <div class="alert">
                {{session('config_delete')}}
            </div>
        @endif
        
    </div>
    <div class="list">
        <h2>Danh sách người dùng</h2>
        <!-- <div class="d-flex justify-content-between search-product">
            <div class="show">
                <p>Show</p>
            </div>
            <div class="search">
                <form class="form-inline" action="/action_page.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form>
            </div>
        </div> -->
        <table border="1" cellpadding ="0" cellspacing ="0">
            <tr class="row-1">
                <td>STT</td>
                <td>Tên người dùng</td>
                <td>ID</td>
                <td>Email</td>
                <td>Phân quyền</td>
                <td>Hành động</td>
            </tr>
            @foreach($user as $users)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$users['name']}}</td>
                <td>{{$users['id']}}</td>
                <td>{{$users['email']}}</td>
                <td>
                    @if($users['rule'] == 1)
                    {{"Admin"}}
                    @else
                    {{"Menber"}}
                    @endif
                </td>
                <td>
                    <a href="user/edit/{{$users['id']}}"><i class="fas fa-edit"></i> Chỉnh sửa</a> | 
                    <a href="" data-toggle="modal" data-target="#myModal"><i class="fas fa-trash-alt"></i> Xóa</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{$user->links()}}
         <!-- The Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title">Bạn có muốn xóa không?</p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <a href="user/delete/{{$users['id']}}" class="danger">Có</a>
                    <a href="" data-dismiss="modal" class="danger">Không</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <script>
        $(document).ready(function(){
            $("li.user-list >ul:last").slideDown();
            $("li.user-list >ul:last li:first").addClass("active");
        });
    </script>
    
@endsection

