@extends('layouts/admin')
@section('body')
<h3>Edit Product</h3>
<form action="{{ route('admin.product.update', $product->idpro) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="namepro" class="form-control" value="{{ $product->namepro }}">
    </div>
    <div class="mb-3">
        <label for="imagepro">Image</label>
        <input type="text" class="form-control" id="imagepro" name="imagepro" value="{{ $product->imagepro }}">
    </div>

    <div class="mb-3">
        <label for="descriptionpro">Description</label>
        <input type="text" class="form-control" id="descriptionpro" name="descriptionpro" value="{{ $product->descriptionpro }}">
    </div>
    <div class="mb-3">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <label for="category_id">Danh Mục</label>
        <select name="category_id" class="form-control">
            @foreach($categories as $category)
            <option value="{{ $category->id }}" @if($category->id == $product->category_id) selected @endif>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="statuspro">Status</label>
        <select name="statuspro" class="form-control" id="">
            @if ($product->statuspro==1)
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