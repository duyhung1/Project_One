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
        <h2>Danh sách sản phẩm</h2>
        <table border="1" cellpadding ="0" cellspacing ="0">
            <tr class="row-1">
                <td>STT</td>
                <td>Tên sản phẩm</td>
                <td>ID</td>
                <td>Giá tiền</td>
                <td>Mô tả sản phẩm</td>
                <td>Hình ảnh</td>
                <td>Hành động</td>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['id']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['photo']}}</td>
                <td>
                    <a href="product/edit/{{$product['id']}}"><i class="fas fa-edit"></i> Chỉnh sửa</a> | 
                    <a href="#" data-toggle="modal" data-target="#myModal"><i class="fas fa-trash-alt"></i> Xóa</a>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $products->links()}}
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
                    <a href="product/delete/{{$product['id']}}" class="danger">Có</a>
                    <a href="" data-dismiss="modal" class="danger">Không</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
    <script>
        $(document).ready(function(){
            $("li.product-list >ul:last").slideDown();
            $("li.product-list >ul:last li:first").addClass("active");
        });
    </script>
@endsection