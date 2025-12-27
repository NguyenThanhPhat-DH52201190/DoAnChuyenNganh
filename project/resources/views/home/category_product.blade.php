@extends('layouts.home')
@section('body')
<div class="container py-5">
  <div class="row g-4">
    @forelse($products as $product)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        
        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

          <!-- IMAGE -->
          <div class="ratio ratio-1x1">
            <img src="{{ $product->imagepro }}"
                 class="img-fluid object-fit-cover"
                 alt="{{ $product->namepro ?? 'Product' }}">
          </div>

          <!-- BODY -->
          <div class="card-body d-flex flex-column p-3">

            <h6 class="fw-semibold mb-2">
              {{ $product->namepro }}
            </h6>

            <p class="text-muted small mb-3">
              {{ Str::limit($product->descriptionpro, 80) }}
            </p>

            <!-- FOOTER -->
            <div class="mt-auto">
              <div class="fw-bold text-primary fs-5 mb-3">
                {{ number_format($product->price, 0, ',', '.') }} ₫
              </div>

              <div class="d-flex gap-2">
                <a href="#" class="btn btn-primary btn-sm w-50 rounded-pill">
                  Buy
                </a>
                <a href="{{ route('single_product', ['id' => $product->idpro]) }}"
                   class="btn btn-outline-secondary btn-sm w-50 rounded-pill">
                  Details
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    @empty
      <div class="col-12 text-center">
        <p class="text-muted">Không có sản phẩm nào trong danh mục này</p>
      </div>
    @endforelse
  </div>
</div>


@endsection