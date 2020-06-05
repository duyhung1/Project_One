@extends('admin.layouts_admin.master_admin')
@section('content')
<div class="create-product">
    @if(session('config_create'))
        <div class="alert">
            {{session('config_create')}}
        </div>
    @endif
    <h2>Add Product</h2>
    <div class="form">
        <form action="{{route('create.product')}}" method="post">
        <!-- @method('PATCH') -->
        @csrf

            <label>Name</label>
            <input type="text" id="name" name="name" placeholder="Please Enter Name">
            @if($errors->has('name'))
                <p class="help">{{$errors->first('name')}}</p>
            @endif
            <label>Price</label>
            <input type="text" name="price" id="price" placeholder="Please Enter Price">
            @if($errors->has('price'))
                <p class="help">{{$errors->first('price')}}</p>
            @endif
            <label>Description</label>
            <textarea name="description" id="des" cols="22" rows="3"></textarea>
            @if($errors->has('description'))
                <p class="help">{{$errors->first('description')}}</p>
            @endif
            <label>Photo</label>
            <input type="text" id="photo" name="photo" placeholder="Please Enter Photo (.jpeg, .png, .bmp, .gif, .svg, .webp)">
            @if($errors->has('photo'))
                <p class="help">{{$errors->first('photo')}}</p>
            @endif
            <button type="submit">Create</button>
        </form>
    </div>
</div>
    
@endsection