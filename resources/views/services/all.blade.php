@extends('layouts.landing', ['title' => 'Certifico || Our Service'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light">
    <div class="container h-100">
      <div class="row g-3 h-100">
        <div class="col-xl-6 d-flex align-items-center pt-xl-5">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle animated_left">Certification</h4>
            <h1 class="tx-section-heading animated_left">Solutions for Business Growth</h1>
            <p class="animated_left">Driving growth through personalized experiences <br> for truly end-to-end business
              building.
            </p>
            <a href="{{ route('second', ['pages', 'contact']) }}"
              class="btn btn-secondary btn-icon-leading arrow-right mt-4 mt-xl-5 animated_left">Get a Free
              Consultation</a>
          </div>
        </div>
        <div class="tx-hero-bg-shape">
          <img src="/img/banner/3d-irisdencet-shape1.webp" alt="">
        </div>
      </div>

      <!-- ================= Service section start ================= -->
      <div class="table-responsive-xl pt-5 pt-md-7 pt-xxl-8 pb-3 mx-n3 mx-md-n5 mx-lg-0">
        <div class="row g-3 g-xxl-4 px-3 px-md-5 px-lg-0 tx-service-area flex-nowrap flex-lg-wrap">
          <!-- single service box start -->
          <div class="col-9 col-md-4 tx-service-item-card animated">
            <div class="card">
              <div class="card-body">
                <div class="tx-service-icon mb-4">
                  <i class="fa-solid fa-badge-check"></i>
                </div>
                <div class="tx-service-icon-box-4-content4">
                  <h3 class="h5">Sertifikasi BNSP</h3>
                  <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                  <a href="{{ route('second', ['services', 'sertifikasi-bnsp']) }}" class="btn btn-more"><span>Learn
                      More</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->

          <!-- single service box start -->
          <div class="col-9 col-md-4 tx-service-item-card animated">
            <div class="card">
              <div class="card-body">
                <div class="tx-service-icon mb-4">
                  <i class="fa-solid fa-compass"></i>
                </div>
                <div class="tx-service-icon-box-4-content4">
                  <h3 class="h5">Sertifikasi Internasional</h3>
                  <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                  <a href="{{ route('second', ['services', 'sertifikasi-internasional']) }}"
                    class="btn btn-more"><span>Learn More</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->

          <!-- single service box start -->
          <div class="col-9 col-md-4 tx-service-item-card animated">
            <div class="card">
              <div class="card-body">
                <div class="tx-service-icon mb-4">
                  <i class="fa-solid fa-globe"></i>
                </div>
                <div class="tx-service-icon-box-4-content4">
                  <h3 class="h5">Sertifikasi ISO</h3>
                  <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                  <a href="{{ route('second', ['services', 'sertifikasi-iso']) }}" class="btn btn-more"><span>Learn
                      More</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->

          <!-- single service box start -->
          <div class="col-9 col-md-4 tx-service-item-card animated">
            <div class="card">
              <div class="card-body">
                <div class="tx-service-icon mb-4">
                  <i class="fa-solid fa-trophy-star"></i>
                </div>
                <div class="tx-service-icon-box-4-content4">
                  <h3 class="h5">Corporate Training</h3>
                  <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                  <a href="{{ route('second', ['services', 'corporate-training']) }}" class="btn btn-more"><span>Learn
                      More</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->

          <!-- single service box start -->
          <div class="col-9 col-md-4 tx-service-item-card animated">
            <div class="card">
              <div class="card-body">
                <div class="tx-service-icon mb-4">
                  <i class="fa-solid fa-award"></i>
                </div>
                <div class="tx-service-icon-box-4-content4">
                  <h3 class="h5">Corporate Certification</h3>
                  <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                  <a href="{{ route('second', ['services', 'corporate-certification']) }}"
                    class="btn btn-more"><span>Learn
                      More</span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->
        </div>
      </div>
      <!-- ================= Service section End ================= -->
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <section class="tx-section-border py-5 py-lg-7">
    <div class="container">
      @include('icons.border-center')
    </div>
  </section>

  @include('layouts.partials.cta')
@endsection
