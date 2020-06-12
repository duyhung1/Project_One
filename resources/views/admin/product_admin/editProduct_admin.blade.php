@extends('admin.layouts_admin.index')
@section('content')
<div class="create-product">
    @if(session('config_edit'))
        <div class="alert">
            {{session('config_edit')}}
        </div>
    @endif
    <h2>Sửa sản phẩm: {{$products['name']}}</h2>
    <div class="form">
        <form action="{{$products['id']}}" method="post" enctype="multipart/form-data">
        <!-- @method('PATCH') -->
        @csrf

            <label>Tên sản phẩm</label>
            <input type="text" id="name" name="name" value="{{$products['name']}}">
            @if($errors->has('name'))
                <p class="help">{{$errors->first('name')}}</p>
            @endif
            <label>Giá tiền</label>
            <input type="text" name="price" id="price" value="{{$products['price']}}">
            @if($errors->has('price'))
                <p class="help">{{$errors->first('price')}}</p>
            @endif
            <label>Mô tả sản phẩm</label>
            <textarea name="description" id="des" cols="22" rows="3" >{{$products['description']}}</textarea>
            @if($errors->has('description'))
                <p class="help">{{$errors->first('description')}}</p>
            @endif
            <label>Hình ảnh</label>
            <input type="file" id="photo" name="photo">
            @if($errors->has('photo'))
                <p class="help">{{$errors->first('photo')}}</p>
            @endif
            <button type="submit">Cập nhập</button>
        </form>
    </div>
</div>
@endsection