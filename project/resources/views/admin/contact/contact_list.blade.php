@extends('layouts/admin')
@section('body')
<div class="card-footer small text-muted">

  <table class="table">
    <h3>Contact </h3>
    <a href="{{route('admin.contact.create')}}" class="btn btn-primary">Add</a>
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">View</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @forelse($contacts as $object)
      <tr>
        <th scope="row">{{ $object->id }}</th>
        <td>{{ $object->address }}</td>
        <td>{{ $object->phone }}</td>
        <td>{{ $object->email }}</td>
        <td>
          <i class="fa-solid fa-eye"></i>
        </td>
        <td>
          <a href="{{ route('admin.contact.edit', ['contact' => $object->id]) }}" class="btn btn-warning">
            <i class="fa-solid fa-pen-to-square " ></i>
          </a>

        </td>
        <td>
          <a href="{{route('admin.contact.destroy',['contact'=>$object->id])}}" title="Delete" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa không?') ? document.getElementById('contact-delete-{{ $object->id }}').submit() : 0;" class="btn btn-danger"><i class="far fa-trash-alt"></i>
            <form action="{{ route('admin.contact.destroy', ['contact' => $object->id]) }}" method="post" id="contact-delete-{{ $object->id }}">
              {{ csrf_field() }}
              {{ method_field('delete') }}
            </form>
          </a>
        </td>
      </tr>
      @empty
      @endforelse

    </tbody>
  </table>
</div>
@endsection