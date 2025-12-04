@extends('layouts/admin')
@section('body')
<h3>Edit Category</h3>
<form action="{{ route('admin.category.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="{{ $category->name }}">
    </div>
    <div class="mb-3">
        <label for="image">Image</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ $category->image }}">
    </div>
    <div class="mb-3">
        <label for="status">Status</label>
        <select name="status" class="form-control" id="">
            @if ($category->status==1)
            <option value="1" selected>ON</option>
            @else
            <option value="1">ON</option>
            @endif
            <option value="0">OFF</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection