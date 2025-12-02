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
        <label>Quantity</label>
        <input type="number" name="soluong" class="form-control" value="{{ $product->soluong }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection