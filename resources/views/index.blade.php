@extends('layouts.landing')

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section pt-8">
    <img src="/img/banner/grainy-gradient-hero.webp" alt="" class="img-cover">
    <div class="container">
      <div class="p-relative">
        <div class="row tx-hero-caption-absolute">
          <div class="col-xl-6 pt-xxl-5 pb-5 pb-xxl-0 p-relative">
            <div class="tx-section-title-wrapper mb-4 mb-xl-0 pt-0 pt-xl-5">
              <h1 class="tx-section-heading">Empowering Agility, Resilience and Sustainability</h1>
              <p class="tx-section-description col-9 col-xl-12">
                Empower your business with our solutions tailored <br> to meet your unique needs.
              </p>
              <a href="{{ route('second', ['pages', 'contact']) }}" class="tx-hero-icon-animate">
                @include('icons.join-us')
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row tx-scroll-md-x g-2 g-md-4 justify-content-xl-end">
        {{-- <div class="col-xl-6 me-auto pt-xxl-5 pb-5 pb-xxl-0 p-relative">
          <div class="tx-section-title-wrapper mb-4">
            <h1 class="tx-section-heading">Empowering Agility, Resilience and Sustainability</h1>
            <p class="tx-section-description col-9 col-xl-12">
              Empower your business with our solutions tailored <br> to meet your unique needs.
            </p>
            <a href="{{ route('second', ['pages', 'contact']) }}" class="tx-hero-icon-animate">
              @include('icons.join-us')
            </a>
          </div>
        </div> --}}
        <div class="col-xl-6 d-none d-xl-block"></div>

        <!-- Services-item -->
        <div class="col-8 col-lg-4 col-xl-3 tx-gallery-hero-services">
          <div class="tx-gallery-item animated">
            <div class="tx-gallery-item-img ratio ratio-1x1">
              <img src="/img/service/sertifikasi-bnsp-home-thumb.avif" alt="" />
              <a href="{{ route('second', ['services', 'sertifikasi-bnsp']) }}" class="stretched-link">
                <div class="tx-gallery-item-con">
                  <h3 class="tx-gallery-item-title">Sertifikasi BNSP</h3>
                </div>
                <div class="tx-gallery-item-icon">
                  <span><img src="/img/icons/arrow-up.svg" alt="" /></span>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Services-item -->
        <div class="col-8 col-lg-4 col-xl-3 tx-gallery-hero-services">
          <div class="tx-gallery-item animated">
            <div class="tx-gallery-item-img ratio ratio-1x1">
              <img src="/img/service/sertifikasi-internasional-home-thumb.avif" alt="" />
              <a href="{{ route('second', ['services', 'sertifikasi-internasional']) }}" class="stretched-link">
                <div class="tx-gallery-item-con">
                  <h3 class="tx-gallery-item-title">Sertifikasi Internasional</h3>
                </div>
                <div class="tx-gallery-item-icon">
                  <span><img src="/img/icons/arrow-up.svg" alt="" /></span>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Services-item -->
        <div class="col-8 col-lg-4 col-xl-3 tx-gallery-hero-services">
          <div class="tx-gallery-item animated">
            <div class="tx-gallery-item-img ratio ratio-1x1">
              <img src="/img/service/sertifikasi-iso-home-thumb.avif" alt="" />

              <a href="{{ route('second', ['services', 'sertifikasi-iso']) }}" class="stretched-link">
                <div class="tx-gallery-item-con">
                  <h3 class="tx-gallery-item-title">Sertifikasi ISO</h3>
                </div>
                <div class="tx-gallery-item-icon">
                  <span><img src="/img/icons/arrow-up.svg" alt="" /></span>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Services-item -->
        <div class="col-8 col-lg-4 col-xl-3 tx-gallery-hero-services">
          <div class="tx-gallery-item animated">
            <div class="tx-gallery-item-img ratio ratio-1x1">
              <img src="/img/service/corporate-training-home-thumb.avif" alt="" />

              <a href="{{ route('second', ['services', 'corporate-training']) }}" class="stretched-link">
                <div class="tx-gallery-item-con">
                  <h3 class="tx-gallery-item-title">Corporate Training</h3>
                </div>
                <div class="tx-gallery-item-icon">
                  <span><img src="/img/icons/arrow-up.svg" alt="" /></span>
                </div>
              </a>
            </div>
          </div>
        </div>

        <!-- Services-item -->
        <div class="col-8 col-lg-4 col-xl-3 tx-gallery-hero-services">
          <div class="tx-gallery-item animated">
            <div class="tx-gallery-item-img ratio ratio-1x1">
              <img src="/img/service/corporate-certification-home-thumb.avif" alt="" />

              <a href="{{ route('second', ['services', 'corporate-certification']) }}" class="stretched-link">
                <div class="tx-gallery-item-con">
                  <h3 class="tx-gallery-item-title">Corporate Certification</h3>
                </div>
                <div class="tx-gallery-item-icon">
                  <span><img src="/img/icons/arrow-up.svg" alt="" /></span>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Brand section start ================= -->
  <section class="tx-brand-area py-5 py-xl-7">
    <div class="container">
      <div class="row align-items-center">
        {{-- <div class="col-lg-2 d-lg-flex align-items-center mb-3 mb-lg-0">
          <h4 class="tx-section-subtitle mb-0">Partners</h4>
        </div> --}}

        <div class="col-12">
          <div class="tx-brand-logo-active">
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-lsppm.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/Logo-Komite-Akreditasi-Nasional-KAN.svg" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-AAFM.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-GAFM.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-AAPM-lapel-pin.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/iso22301-logo-badge.avif" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/iso9001-logo-badge.avif" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/iso31000-logo-badge.avif" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Brand section End ================= -->

  <section class="tx-section-border">
    <div class="container">
      @include('icons.border-center')
    </div>
  </section>

  <!-- ================= Feature Programs section start ================= -->
  <section class="tx-gallery tx-section p-relative z-index-1">
    <div class="container">
      <div class="tx-section-title-wrapper animated">
        <h4 class="tx-section-subtitle">Feature Programs</h4>
        <h2 class="tx-section-title">Data-driven, customer-centric services</h2>
        <a href="{{ route('second', ['services', 'all']) }}" class="btn btn-dark btn-icon-leading arrow-right">View All
          Programs</a>
      </div>

      <div id="gallery_services" class="owl-carousel owl-theme animated">

        <!-- single services box start -->
        <div class="card border-0">
          <div class="tx-single-services-item">
            <div class="tx-single-services-img ratio ratio-4x3">
              <div class="d-block">
                <img src="/img/service/cra.avif" class="img-cover" alt="" />
              </div>
              <a href="{{ route('third', ['services', 'sertifikasi-bnsp', 'cra-certified-risk-associate']) }}"
                class="tx-single-services-title stretched-link">
                <div class="tx-single-services-meta-box">
                  <img src="/img/brand/cra-logo-badge.avif" alt="">
                </div>
                <div class="tx-single-services-tag">
                  <span>Sertifikasi BNSP</span>
                </div>
                <h3>CRA<sup>&reg;</sup> <br> <span>Certified Risk Associate</span></h3>
                <div class="icon-readmore">
                  <i class="fa-thin fa-arrow-right"></i>
                </div>
              </a>
            </div>
            <div class="tx-single-services-content">
              <span class="tx-single-services-meta">by: Sorchan Simbolon</span>
              <div class="d-flex align-items-center gap-2 mb-3">
                <span class="tx-single-services-desc">Rp 25.500.000</span>
                <span class="small text-decoration-line-through text-danger">Rp 34.000.000</span>
              </div>
              <a href="{{ route('second', ['services', 'single']) }}"
                class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
              <a href="{{ route('second', ['services', 'single']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
                <i class="fa-regular fa-cart-shopping"></i>Buy
              </a>
            </div>
          </div>
        </div>
        <!-- single services box end -->

        <!-- single services box start -->
        <div class="card border-0">
          <div class="tx-single-services-item">
            <div class="tx-single-services-img ratio ratio-4x3">
              <div class="d-block">
                <img src="/img/service/ceip.avif" class="img-cover" alt="" />
              </div>
              <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'ceip-certified-esg-investing-professional']) }}"
                class="tx-single-services-title stretched-link">
                <div class="tx-single-services-meta-box">
                  <img src="/img/brand/aafm-logo-badge.avif" alt="">
                </div>
                <div class="tx-single-services-tag">
                  <span>Sertifikasi Internasional</span>
                </div>
                <h3>CEIP<sup>&reg;</sup><br><span>Certified ESG Investing Professional</span></h3>
                <div class="icon-readmore">
                  <i class="fa-thin fa-arrow-right"></i>
                </div>
              </a>
            </div>
            <div class="tx-single-services-content">
              <span class="tx-single-services-meta">by: Sorchan Simbolon</span>
              <div class="d-flex align-items-center gap-2 mb-3">
                <span class="tx-single-services-desc">Rp 28.575.000</span>
                <span class="small text-decoration-line-through text-danger">Rp 48.000.000</span>
              </div>
              <a href="{{ route('second', ['services', 'single']) }}"
                class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
              <a href="{{ route('second', ['services', 'single']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
                <i class="fa-regular fa-cart-shopping"></i>Buy
              </a>
            </div>
          </div>
        </div>
        <!-- single services box end -->

        <!-- single services box start -->
        <div class="card border-0">
          <div class="tx-single-services-item">
            <div class="tx-single-services-img ratio ratio-4x3">
              <div class="d-block">
                <img src="/img/service/iso-22301.avif" class="img-cover" alt="" />
              </div>
              <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-22301-2019']) }}"
                class="tx-single-services-title stretched-link">
                <div class="tx-single-services-meta-box">
                  <img src="/img/brand/iso22301-logo-badge.avif" alt="">
                </div>
                <div class="tx-single-services-tag">
                  <span>Sertifikasi ISO</span>
                </div>
                <h3>ISO 22301:2019</h3>
                <span class="tx-single-services-subtitle"></span>
                <div class="icon-readmore">
                  <i class="fa-thin fa-arrow-right"></i>
                </div>
              </a>
            </div>
            <div class="tx-single-services-content">
              <span class="tx-single-services-meta">by: Sorchan Simbolon</span>
              <div class="d-flex align-items-center gap-2 mb-3">
                <span class="tx-single-services-desc">Rp 24.355.000</span>
                <span class="small text-decoration-line-through text-danger">Rp 38.000.000</span>
              </div>
              <a href="{{ route('second', ['services', 'single']) }}"
                class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
              <a href="{{ route('second', ['services', 'single']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
                <i class="fa-regular fa-cart-shopping"></i>Buy
              </a>
            </div>
          </div>
        </div>
        <!-- single services box end -->

        <!-- single services box start -->
        <div class="card border-0">
          <div class="tx-single-services-item">
            <div class="tx-single-services-img ratio ratio-4x3">
              <div class="d-block">
                <img src="/img/service/iso-31000.avif" class="img-cover" alt="" />
              </div>
              <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-31000-2018']) }}"
                class="tx-single-services-title stretched-link">
                <div class="tx-single-services-meta-box">
                  <img src="/img/brand/iso31000-logo-badge.avif" alt="">
                </div>
                <div class="tx-single-services-tag">
                  <span>Sertifikasi ISO</span>
                </div>
                <h3>ISO 31000:2018</h3>
                <span class="tx-single-services-subtitle"></span>
                <div class="icon-readmore">
                  <i class="fa-thin fa-arrow-right"></i>
                </div>
              </a>
            </div>
            <div class="tx-single-services-content">
              <span class="tx-single-services-meta">by: Sorchan Simbolon</span>
              <div class="d-flex align-items-center gap-2 mb-3">
                <span class="tx-single-services-desc">Rp 36.800.000</span>
                <span class="small text-decoration-line-through text-danger">Rp 54.000.000</span>
              </div>
              <a href="{{ route('second', ['services', 'single']) }}"
                class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
              <a href="{{ route('second', ['services', 'single']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
                <i class="fa-regular fa-cart-shopping"></i>Buy
              </a>
            </div>
          </div>
        </div>
        <!-- single services box end -->

        <!-- single services box start -->
        <div class="card border-0">
          <div class="tx-single-services-item">
            <div class="tx-single-services-img ratio ratio-4x3">
              <div class="d-block">
                <img src="/img/service/crp.avif" class="img-cover" alt="" />
              </div>
              <a href="{{ route('third', ['services', 'sertifikasi-bnsp', 'crp-certified-risk-professional']) }}"
                class="tx-single-services-title stretched-link">
                <div class="tx-single-services-meta-box">
                  <img src="/img/brand/crp-logo-badge.avif" alt="">
                </div>
                <div class="tx-single-services-tag">
                  <span>Sertifikasi BNSP</span>
                </div>
                <h3>CRP<sup>&reg;</sup><br><span>Certified Risk Professional</span></h3>
                <div class="icon-readmore">
                  <i class="fa-thin fa-arrow-right"></i>
                </div>
              </a>
            </div>
            <div class="tx-single-services-content">
              <span class="tx-single-services-meta">by: Sorchan Simbolon</span>
              <div class="d-flex align-items-center gap-2 mb-3">
                <span class="tx-single-services-desc">Rp 23.500.000</span>
                <span class="small text-decoration-line-through text-danger">Rp 30.000.000</span>
              </div>
              <a href="{{ route('second', ['services', 'single']) }}"
                class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
              <a href="{{ route('second', ['services', 'single']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
                <i class="fa-regular fa-cart-shopping"></i>Buy
              </a>
            </div>
          </div>
        </div>
        <!-- single services box end -->

      </div>
    </div>
  </section>
  <!-- ================= Feature Programs section End ================= -->

  <section class="tx-section-border">
    <div class="container">
      @include('icons.border-right')
    </div>
  </section>

  <!-- ================= About section start ================= -->
  <section class="tx-service-area tx-section pb-0">
    <div class="container">
      <div class="row g-3 justify-content-between tx-section-title-wrapper mb-60">
        <div class="col-md-6 col-xl-5 animated">
          <h4 class="tx-section-subtitle">Why Choose Us</h4>
          <h2 class="tx-section-title">Empower Your Business<br /> Every Step of the Way</h2>
        </div>
        <div class="col-md-6 col-xl-6 pt-2 pt-md-4 animated">
          <p>Together, we help our clients achieve tangible, measurable results. Focused on business outcomes — we bring a
            unique set of expertise and skills to the party.</p>
          <a href="{{ route('second', ['pages', 'about']) }}" class="btn btn-more">
            <span>More About Us</span>
          </a>
        </div>
      </div>
      <div id="mousewheel_carousel" class="owl-carousel mousewheel_scroll animated">
        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between gap-3 mb-4">
                <div class="tx-service-icon-box-icon order-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-trophy"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Experienced Facilitator</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between gap-3 mb-4">
                <div class="tx-service-icon-box-icon order-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-badge-check"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Official Certification</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between gap-3 mb-4">
                <div class="tx-service-icon-box-icon order-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-chart-network"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Professional Networking</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between gap-3 mb-4">
                <div class="tx-service-icon-box-icon order-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-clock-rotate-left"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Lifetime Access</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between gap-3 mb-4">
                <div class="tx-service-icon-box-icon order-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-people-group"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Live & Interactive Learning</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

      </div>
    </div>
  </section>
  <!-- ================= About section End ================= -->

  <!-- ================= Ads section start ================= -->
  <section class="tx-gallery tx-section p-relative pb-0 animated">
    <div class="container">
      <div class="bg-gradient-light position-absolute h-75 w-100 bottom-0 start-0"></div>
      <div id="ads_banner_gallery" class="owl-carousel owl-theme">
        <div class="card">
          <img src="/img/banner/flyer-example1.avif" alt="">
        </div>
        <div class="card">
          <img src="/img/banner/flyer-example2.avif" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Ads section end ================= -->

  <!-- ================= Testimonial section start ================= -->
  <section class="tx-testimonial tx-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-md-6 d-none d-xl-block mb-xl-0 animated_left">
          <div class="ratio ratio-4x3 ratio-xxl-16x9 rounded fix">
            <img src="/img/banner/testimonials.avif" class="img-cover" alt="">
          </div>
        </div>
        <div class="col-xl-5 pt-4 animated">
          <div class="tx-testimonial mb-5">
            <div class="tx-section-title-wrapper">
              <h4 class="tx-section-subtitle">Testimonials</h4>
              <h2 class="tx-section-title">Our Success Is Measured <br> by Your Satisfaction</h2>
              <p data-aos="fade-up">
                Their success is the greatest reflection <br /> of our commitment to excellence.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-end tx-testimonial-wrapper animated_right">
        <div class="col-xl-10 col-xxl-8">
          <div id="testimoni1" class="owl-carousel owl-theme">
            <!-- single testimonial slider start -->
            <div class="card tx-testimonial-box">
              <div class="card-body">
                <div class="text-primary fa-stack fs-5 mb-5">
                  @include('icons.quote-left')
                </div>
                <div class="tx-testimonial-box-content pt-20 pb-30">
                  <p>Their feedback fuels our passion for continuous innovation and growth. We are incredibly proud of the
                    relationships we've built and the trust we've earned.</p>
                </div>
                <div class="tx-testimonial-box-auth p-relative">
                  <div class="tx-testimonial-box-auth-img">
                    <img src="/img/testimonial/vl-testimonial-1.3.png" alt="" />
                  </div>
                  <div class="tx-testimonial-box-auth-content">
                    <h4 class="tx-testimonial-box-auth-title">
                      <a href="{{ route('second', ['pages', 'team']) }}">Jang Wonyoung</a>
                    </h4>
                    <span>Korea</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- single testimonial slider end -->

            <!-- single testimonial slider start -->
            <div class="card tx-testimonial-box">
              <div class="card-body">
                <div class="text-primary fa-stack fs-5 mb-5">
                  @include('icons.quote-left')
                </div>
                <div class="tx-testimonial-box-content pt-20 pb-30">
                  <p>We believe that the true measure of success lies in the satisfaction & trust of our
                    clients. Their stories of growth and transformation inspire us to deliver excellence
                    every step.</p>
                </div>
                <div class="tx-testimonial-box-auth p-relative">
                  <div class="tx-testimonial-box-auth-img">
                    <img src="/img/testimonial/vl-testimonial-1.5.png" alt="" />
                  </div>
                  <div class="tx-testimonial-box-auth-content">
                    <h4 class="tx-testimonial-box-auth-title">
                      <a href="{{ route('second', ['pages', 'team']) }}">Jennie Kim</a>
                    </h4>
                    <span>USA</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- single testimonial slider end -->

            <!-- single testimonial slider start -->
            <div class="card tx-testimonial-box">
              <div class="card-body">
                <div class="text-primary fa-stack fs-5 mb-5">
                  @include('icons.quote-left')
                </div>
                <div class="tx-testimonial-box-content pt-20 pb-30">
                  <p>We believe that the true measure of success lies in the satisfaction & trust of our
                    clients. Their stories of growth and transformation inspire us to deliver excellence
                    every step.</p>
                </div>
                <div class="tx-testimonial-box-auth p-relative">
                  <div class="tx-testimonial-box-auth-img">
                    <img src="/img/testimonial/vl-testimonial-1.5.png" alt="" />
                  </div>
                  <div class="tx-testimonial-box-auth-content">
                    <h4 class="tx-testimonial-box-auth-title">
                      <a href="{{ route('second', ['pages', 'team']) }}">Jennie Kim</a>
                    </h4>
                    <span>USA</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- single testimonial slider end -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Testimonial section End ================= -->

  <!-- ================= Cta section start ================= -->
  <section class="tx-cta">
    <div class="container">
      <div class="bg-primary-subtle position-relative rounded py-6 animated">
        <div class="tx-cta-shape">
          <img src="/img/icons/vl-cta-shape-4.1.svg" alt="" />
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 col-xl-4">
            <h3 class="mb-0">See how we can help your business grow</h3>
          </div>
          <div class="col-lg-4 col-xl-6 text-end">
            <h6 class="mb-3">Ready to speak with expert? Give us a ring</h6>
            <div class="fs-5 fw-bold text-dark">888-500-8888</div>
            <a href="" class="btn btn-secondary btn-icon-leading mt-4">
              Get a Free Consultation
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
          <div class="col-12 col-lg-10">
            <hr class="my-5 border-dark">
            <div class="d-flex align-items-center gap-4">
              <h6 class="mb-0 text-uppercase">Follow Us</h6>
              <div class="tx-footer-social tx-footer-social-3">
                <ul>
                  <li>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Cta section End ================= -->
@endsection
