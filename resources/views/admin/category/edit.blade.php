@extends('layouts.admin')
@section('title', 'Edit Category')
@section('main')

<form method="POST" action="{{route('category.update', $category->id)}}" id="formUpdate" role="form">
    @csrf @method('PUT')
    <input type="text" hidden name="id" value="{{$category->id}}">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$category->name}}">
        @error('name') 
        <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="mb-3">
        <label for="is_active" class="form-label">Status</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_active" value="1" checked>
        <label class="form-check-label" for="inlineRadio1">Publish</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_active"value="0">
        <label class="form-check-label" for="inlineRadio2">Private</label>
    </div>
    <div style="padding-top: 20px;">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@stop()
