 @extends('layouts/home')
 @section('body')

 <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact Us</h2>
      </div><!-- End Section Title -->


      <div class="container py-5" data-aos="fade-up" data-aos-delay="100">
  <div class="row gy-4 justify-content-center">

    <div class="col-lg-8">
      <div class="row g-4">

        <!-- Address -->
        <div class="col-12">
          <div class="card border-0 shadow-sm rounded-4 text-center h-100"
               data-aos="fade-up" data-aos-delay="200">
            <div class="card-body py-4">

              <div class="mb-3 text-primary fs-2">
                <i class="bi bi-geo-alt"></i>
              </div>

              <h5 class="fw-semibold mb-2">Address</h5>
              <p class="text-muted mb-0">
                {{ $contacts->address ?? '' }}
              </p>

            </div>
          </div>
        </div>

        <!-- Phone -->
        <div class="col-md-6">
          <div class="card border-0 shadow-sm rounded-4 text-center h-100"
               data-aos="fade-up" data-aos-delay="300">
            <div class="card-body py-4">

              <div class="mb-3 text-primary fs-2">
                <i class="bi bi-telephone"></i>
              </div>

              <h5 class="fw-semibold mb-2">Call Us</h5>
              <p class="text-muted mb-0">
                {{ $contacts->phone ?? '' }}
              </p>

            </div>
          </div>
        </div>

        <!-- Email -->
        <div class="col-md-6">
          <div class="card border-0 shadow-sm rounded-4 text-center h-100"
               data-aos="fade-up" data-aos-delay="400">
            <div class="card-body py-4">

              <div class="mb-3 text-primary fs-2">
                <i class="bi bi-envelope"></i>
              </div>

              <h5 class="fw-semibold mb-2">Email Us</h5>
              <p class="text-muted mb-0">
                {{ $contacts->email ?? '' }}
              </p>

            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>


    </section><!-- /Contact Section -->
    @endsection