@extends('layouts/admin')
@section('body')
<form action="{{route('admin.contact.store')}}" method="post">
  @csrf();
  <div class="form-group">
    <div class="mb-3">
      <label for="address">Address</label>
      <input type="text" class="form-label" id="address" name="address" >
    </div>

    <div class="mb-3">
      <label for="phone">Phone</label>
      <input type="text" class="form-control" id="phone" name="phone">
    </div>

    <div class="mb-3">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>

    <button type="submit" class="btn btn-primary">Thêm<map name=""></map></button>
    <a href="{{route('admin.contact.index')}}" class="btn btn-danger">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708z" />
      </svg>
      Quay lại</a>
</form>
@endsection