@extends('layouts/admin')
@section('body')
<div class="card-footer small text-muted">

    <table class="table">
        <h3>Product </h3>
        <a href="{{route('admin.product.create')}}" class="btn btn-primary">Add</a>  
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Danh Mục</th>
      <th scope="col">Tên Sản Phẩm</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($products as $object)
    <tr>
      <th scope="row">{{ $object->idpro }}</th>
      <td>{{ $object->category->name ?? 'No Id'}}</td>
      <td>{{ $object->namepro }}</td>
      <td><img src="{{ asset($object->imagepro) }}" alt="" width="100" height="100"></td>
      <td>{{ $object->descriptionpro }}</td>
      <td>{{ $object->price }}</td>
      
      <td>
        @if ($object->statuspro == 1)
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle text-success"
                  viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                  <path
                    d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                </svg>
              @else
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle text-secondary"
                  viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                  <path
                    d="m10.97 4.97-.02.022-3.473 4.425-2.093-2.094a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05" />
                </svg>
              @endif
      </td>
      <td><a href="{{ route('admin.product.edit', $object->idpro) }}" class="btn btn-warning">
            <i class="fa-solid fa-pen-to-square " ></i>
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