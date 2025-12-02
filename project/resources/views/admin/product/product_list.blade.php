@extends('layouts/admin')
@section('body')
<div class="card-footer small text-muted">

    <table class="table">
        <h3>Product </h3>
        <a href="{{route('admin.product.create')}}" class="btn btn-primary">Add</a>  
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
    @forelse($products as $object)
    <tr>
      <th scope="row">{{ $object->idpro }}</th>
      <td>{{ $object->namepro }}</td>
      <td>{{ $object->soluong }}</td>
      <td>@mdo</td>
      <td><i class="fa-solid fa-eye"></i></td>
      <td><a href="{{ route('admin.product.edit', $object->idpro) }}">
          <i class="fa-solid fa-pen-to-square"></i>
        </a></td>
      <td>
        <a href="{{route('admin.product.destroy',['product'=>$object->idpro])}}" title="Delete {{$object->namepro}}" onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->namepro}}' +' chưa?') ?document.getElementById('product-delete-{{ $object->idpro }}').submit() :0;" class="btn btn-danger"><i class="far fa-trash-alt"></i>
            <form action="{{ route('admin.product.destroy', ['product' => $object->idpro]) }}" method="post" id="product-delete-{{ $object->idpro }}">
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