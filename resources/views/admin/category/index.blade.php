@extends('layouts.admin')
@section('title', 'Category List')
@section('main')

<form action="" class="form-inline">
    <div class="form-group">
        <input name="key" type="text" class="form-control" id="" placeholder="Search By Name...">
    </div>

    <button type="submit" class="btn btn-primary">
        <i class="fas fa-search"></i>
    </button>
</form>
<hr>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Total Product</th>
            <th>Status</th>
            <th>Created Date</th>
            <th class="text-right">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cate)
        <tr>
            <td>{{$cate->id}}</td>
            <td>{{$cate->name}}</td>
            <td>{{$cate->product->count()}}</td>
            <td>
                @if($cate->is_active == 0)
                <span class="badge badge-danger">Private</span>
                @else
                <span class="badge badge-success">Publish</span>
                @endif
            </td>
            <td>{{$cate->created_at}}</td>
            <td class="text-right">
                <a href="{{route('category.edit', $cate->id)}}" class="btn btn-sm btn-success">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('category.destroy', $cate->id)}}" class="btn btn-sm btn-danger btn-delete">
                    <i class="fas fa-trash"></i>
                </a>
            </td>

        </tr>
    </tbody>
    @endforeach
</table>

<form method="POST" action="" id="form-delete">
    @csrf @method('DELETE')
</form>

<hr>
<div>
    {{$data->appends(request()->all)->links()}}
</div>
@stop()

@section('js')

<script>
    $('.btn-delete').click(function(ev) {
        ev.preventDefault();
        var _href = $(this).attr('href');
        $('form#form-delete').attr('action', _href);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                $('form#form-delete').submit();
            }
        })
    })
</script>

@stop()