@extends('layouts.home')
@section('body')
<main class="main">

    <!-- Products Section -->
    <section id="products" class="products section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sản Phẩm Của Chúng Tôi</h2>
        <p>Khám phá danh mục sản phẩm chất lượng của chúng tôi</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          @forelse($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
              <div class="card h-100 shadow-sm">
                <img src="{{ asset($product->imagepro) }}" class="card-img-top" alt="{{ $product->namepro }}" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">{{ $product->namepro }}</h5>
                  <p class="card-text text-muted flex-grow-1">{{ Str::limit($product->descriptionpro, 80) }}</p>
                  <p class="h6 mb-2">Giá: <strong class="text-primary">{{ number_format($product->price, 0, ',', '.') }} đ</strong></p>
                  <a href="{{ route('single_product', ['id' => $product->idpro]) }}" class="btn btn-primary w-100">Xem Chi Tiết</a>
                </div>
              </div>
            </div>
          @empty
            <div class="col-12">
              <p class="text-center text-muted">Không có sản phẩm nào hiện tại</p>
            </div>
          @endforelse
        </div>
      </div>

    </section><!-- /Products Section -->

  </main>
@endsection

      