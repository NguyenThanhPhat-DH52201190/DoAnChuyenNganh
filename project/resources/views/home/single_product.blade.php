@extends('layouts.home')
@section('body')
<div class="container py-4">
    <div class="row align-items-start">
        <div class="col-lg-6 mb-4">
            <img src="{{ asset($product->imagepro) }}" class="img-fluid rounded" alt="{{ $product->namepro }}">
        </div>
        <div class="col-lg-6">
            <h2 class="mb-2">{{ $product->namepro }}</h2>
            <p class="text-muted mb-3">Mã sản phẩm: {{ $product->idpro }}</p>
            <p class="mb-3">{{ $product->descriptionpro }}</p>
            <p class="h5 mb-4">Giá: {{ $product->price }}</p>
            <div class="d-flex gap-2">
                <a href="{{ route('category_product', ['category' => $product->category_id]) }}" class="btn btn-outline-secondary">Về danh mục</a>
            </div>
        </div>
    </div>
</div>
@endsection