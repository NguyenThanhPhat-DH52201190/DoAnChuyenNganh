@extends('layouts/admin')
@section('body')
<form action="{{route('admin.product.store')}}" method="post">
    @csrf();
  <div class="form-group">
    <label for="name">Tên SP</label>
    <input type="text" class="form-label" name="name" aria-describedby="emailHelp">
    <label for="quantity">Số lượng</label>
    <input type="text" class="form-label" name="quantity" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Thêm<map name=""></map></button>
</form>
@endsection