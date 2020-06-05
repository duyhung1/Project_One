@extends('admin.layouts_admin.master_admin')
@section('content')
<div class="create-product">
    @if(session('config_edit'))
        <div class="alert">
            {{session('config_edit')}}
        </div>
    @endif
    <h2>Edit Product</h2>
    <div class="form">
        <form action="{{$products['id']}}" method="post">
        <!-- @method('PATCH') -->
        @csrf

            <label>Name</label>
            <input type="text" id="name" name="name" value="{{$products['name']}}">
            @if($errors->has('name'))
                <p class="help">{{$errors->first('name')}}</p>
            @endif
            <label>Price</label>
            <input type="text" name="price" id="price" value="{{$products['price']}}">
            @if($errors->has('price'))
                <p class="help">{{$errors->first('price')}}</p>
            @endif
            <label>Description</label>
            <textarea name="description" id="des" cols="22" rows="3" >{{$products['description']}}</textarea>
            @if($errors->has('description'))
                <p class="help">{{$errors->first('description')}}</p>
            @endif
            <label>Photo</label>
            <input type="text" id="photo" name="photo" value="{{$products['photo']}}">
            @if($errors->has('photo'))
                <p class="help">{{$errors->first('photo')}}</p>
            @endif
            <button type="submit">Update</button>
        </form>
    </div>
</div>
@endsection