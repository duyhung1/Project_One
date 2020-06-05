@extends('admin.layouts_admin.master_admin')
@section('content')
<div class="product">
    
    <div class="add-product">
        <a href="{{route('admin.addProduct')}}" class="add-color">Create Product</a>
        @if(session('config_delete'))
            <div class="alert">
                {{session('config_delete')}}
            </div>
        @endif
        
    </div>
    <div class="list-product">
        <h2>Products List</h2>
        <table border="1" cellpadding ="0" cellspacing ="0">
            <tr class="row-1">
                <td>STT</td>
                <td>Name</td>
                <td>ID</td>
                <td>Price</td>
                <td>Description</td>
                <td>Photo</td>
                <td>Action</td>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['id']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['description']}}</td>
                <td>{{$product['photo']}}</td>
                <td><a href="product/edit/{{$product['id']}}"><i class="fas fa-edit"></i> Edit</a> | <a href="product/delete/{{$product['id']}}"><i class="fas fa-trash-alt"></i> Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    
</div>
@endsection