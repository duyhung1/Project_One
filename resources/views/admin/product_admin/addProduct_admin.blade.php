@extends('admin.layouts_admin.index')
@section('content')
<div class="create">
    @if(session('config_create'))
        <div class="alert">
            {{session('config_create')}}
        </div>
    @endif
    <h2>Thêm mới sản phẩm</h2>
    <div class="form">
        <form action="{{route('create.product')}}" method="post">
        <!-- @method('PATCH') -->
        @csrf

            <label>Tên sản phẩm</label>
            <input type="text" id="name" name="name" placeholder="Please Enter Name" value="{{ old('name') }}">
            @if($errors->has('name'))
                <p class="help">{{$errors->first('name')}}</p>
            @endif
            <label>Giá tiền</label>
            <input type="text" name="price" id="price" placeholder="Please Enter Price"value="{{ old('price') }}">
            @if($errors->has('price'))
                <p class="help">{{$errors->first('price')}}</p>
            @endif
            <label>Mô tả sản phẩm</label>
            <textarea name="description" id="des" cols="22" rows="3">{{ old('description') }}</textarea>
            @if($errors->has('description'))
                <p class="help">{{$errors->first('description')}}</p>
            @endif
            <label>Hình ảnh</label>
            <input type="text" id="photo" name="photo" placeholder="Please Enter Photo (.jpeg, .png, .bmp, .gif, .svg, .webp)" value="{{ old('photo') }}">
            @if($errors->has('photo'))
                <p class="help">{{$errors->first('photo')}}</p>
            @endif
<!--             
            <label>Image</label>
            <input type="file" name="image" id="" class="image"> -->
            <button type="submit" class="create">Tạo mới</button>
        </form>
    </div>
</div>
    <script>
         $(document).ready(function(){
            $("li.product-list >ul:first").slideDown();
            $("li.product-list >ul:first li:last").addClass("active");
        });
    </script>
@endsection