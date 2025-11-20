@extends('layouts/admin')
@section('body')
<div class="card-footer small text-muted">

    <table class="table">
        <h3>Category </h3>
        <a href="" class="btn btn-primary">Add</a>  
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $object)
    <tr>
      <th scope="row">{{ $object->id }}</th>
      <td>{{ $object->name }}</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><i class="fa-solid fa-eye"></i></td>
      <td><i class="fa-solid fa-pen-to-square"></i></td>
      <td><i class="fa-solid fa-trash"></i></td>
    </tr>
    @empty
    @endforelse
    
  </tbody>
</table>
</div>  
@endsection