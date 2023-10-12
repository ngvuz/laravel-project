@extends('layouts.admin')
@section('title', 'Add Category')
@section('main')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<form method="POST" action="{{route('category.store')}}" id="formAdd">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
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
        <input class="form-check-input" type="radio" name="is_active" value="0">
        <label class="form-check-label" for="inlineRadio2">Private</label>
    </div>
    <div style="padding-top: 20px;">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>

@stop()
