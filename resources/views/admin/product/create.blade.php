@extends('layouts.admin')
@section('title', 'Add Product')
@section('main')

<form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-md-9">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Input your name">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea type="text" class="form-control" rows="4" cols="50" name="description" placeholder="Input description"></textarea>
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" class="form-control" rows="4" cols="50" name="contents" placeholder="Input content"></textarea>
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="description">Image</label>
                <input type="file" class="form-control" name="file_upload" placeholder="Upload image"></input>
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="id_category">Category</label>

                <select name="id_category" class="form-select">
                    <option value="">--SELECT ONE--</option>
                    @foreach($cate as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>

                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Input price">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Quantity</label>
                <input type="number" class="form-control" name="quantity" placeholder="Input quantity">
                @error('name')
                <small class="help-block">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Status</label>
                <div class="radio">
                    <label for="status">
                        <input type="radio" name="status" value="1" checked>
                        Publish
                    </label>
                    <label for="status">
                        <input type="radio" name="status" value="0">
                        Private
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div style="padding-top: 20px;">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@stop()