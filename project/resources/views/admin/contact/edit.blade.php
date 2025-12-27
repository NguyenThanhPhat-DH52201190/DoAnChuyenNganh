@extends('layouts/admin')
@section('body')
<h3>Edit Contact</h3>
<form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label>Address</label>
        <input type="text" name="address" class="form-control" value="{{ $contact->address }}">
    </div>
    <div class="mb-3">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="{{ $contact->email }}">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
@endsection