@extends('layouts.landing', ['title' => 'Certifico || Sertifikasi ISO'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light">
    <div class="container">
      <div class="row g-3 justify-content-between">
        <div class="col-md-6 col-xl-5 animated_left">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Our Services</h4>
            <h1 class="tx-section-heading">Sertifikasi ISO</h1>
            <div class="tx-breadcrumb-list mt-3">
              <span><a href="{{ route('any', 'index') }}">Home</a></span>
              <span><a href="{{ route('second', ['services', 'our-services']) }}">Our Service</a></span>
              <span class="active">Sertifikasi ISO</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 pt-5 animated_right">
          <div class="tx-breadcrumb mb-4">
            <p>Program sertifikasi ISO merupakan inisiatif strategis bagi para profesional di bidang manajemen risiko.</p>
          </div>
          <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-secondary btn-icon-leading">
            Get a Free Consultation <i class="fa-regular fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->


  <!-- ================= Service Details Start ================= -->
  <section class="tx-section services-program">
    <div class="container">
      <div class="row justify-content-end g-3 g-xl-4">
        <div class="col animated">
          <div class="card">
            <div class="card-body d-flex flex-column">
              <h2 class="tx-section-title">Certification Programs</h2>
              <p>Jalur Profesional Menuju Keahlian Manajemen Risiko</p>
              <div class="brand-logo">
                <div class="brand-logo-title">Certified by:</div>
                <div class="brand-logo-wrapper">
                  <img src="/img/brand/logo-AAFM.webp" alt="">
                  <img src="/img/brand/logo-GAFM.webp" alt="">
                  <img src="/img/brand/logo-AAPM-lapel-pin.webp" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single services box start -->
        <div class="col-md-6 col-lg-4 col-xl-3 animated">
          <div class="card">
            <div class="tx-single-services-item">
              <div class="tx-single-services-img ratio ratio-4x3">
                <div class="d-block">
                  <img src="/img/service/iso-22301.avif" class="img-cover" alt="" />
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-22301-2019']) }}"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/logo-GAFM.webp" alt="">
                  </div>
                  <div class="tx-single-services-tag">
                    <span>Sertifikasi ISO</span>
                  </div>
                  <h3>ISO 22301:2019</h3>
                  <div class="icon-readmore">
                    <i class="fa-thin fa-arrow-right"></i>
                  </div>
                </a>
              </div>
              <div class="tx-single-services-content">
                <span class="tx-single-services-meta">by: Herbert Harrison</span>
                <div class="d-flex align-items-center gap-2 mb-3">
                  <span class="tx-single-services-desc">Rp 25.500.000</span>
                  <span class="small text-decoration-line-through text-danger">Rp 34.000.000</span>
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-22301-2019']) }}"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="{{ route('second', ['services', 'single']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
                  <i class="fa-regular fa-cart-shopping"></i>Buy
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- single services box end -->

        <!-- single services box start -->
        <div class="col-md-6 col-lg-4 col-xl-3 animated">
          <div class="card">
            <div class="tx-single-services-item">
              <div class="tx-single-services-img ratio ratio-4x3">
                <div class="d-block">
                  <img src="/img/service/iso-9001.avif" class="img-cover" alt="" />
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-9001-2015']) }}"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/logo-AAFM.webp" alt="">
                  </div>
                  <div class="tx-single-services-tag">
                    <span>Sertifikasi Internasional</span>
                  </div>
                  <h3>ISO 9001:2015</h3>
                  <div class="icon-readmore">
                    <i class="fa-thin fa-arrow-right"></i>
                  </div>
                </a>
              </div>
              <div class="tx-single-services-content">
                <span class="tx-single-services-meta">by: Herbert Harrison</span>
                <div class="d-flex align-items-center gap-2 mb-3">
                  <span class="tx-single-services-desc">Rp 25.500.000</span>
                  <span class="small text-decoration-line-through text-danger">Rp 34.000.000</span>
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-9001-2015']) }}"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="{{ route('second', ['services', 'single']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
                  <i class="fa-regular fa-cart-shopping"></i>Buy
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- single services box end -->

        <!-- single services box start -->
        <div class="col-md-6 col-lg-4 col-xl-3 animated">
          <div class="card">
            <div class="tx-single-services-item">
              <div class="tx-single-services-img ratio ratio-4x3">
                <div class="d-block">
                  <img src="/img/service/iso-31000.avif" class="img-cover" alt="" />
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-31000-2018']) }}"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/logo-AAFM.webp" alt="">
                  </div>
                  <div class="tx-single-services-tag">
                    <span>Sertifikasi Internasional</span>
                  </div>
                  <h3>ISO 31000:2018</h3>
                  <div class="icon-readmore">
                    <i class="fa-thin fa-arrow-right"></i>
                  </div>
                </a>
              </div>
              <div class="tx-single-services-content">
                <span class="tx-single-services-meta">by: Herbert Harrison</span>
                <div class="d-flex align-items-center gap-2 mb-3">
                  <span class="tx-single-services-desc">Rp 25.500.000</span>
                  <span class="small text-decoration-line-through text-danger">Rp 34.000.000</span>
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-31000-2018']) }}"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="{{ route('second', ['services', 'single']) }}"
                  class="btn btn-tertiary btn-icon-leading btn-sm">
                  <i class="fa-regular fa-cart-shopping"></i>Buy
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- single services box end -->
      </div>
    </div>
  </section>
  <!-- ================== Service Details End ================== -->

  <!-- ================= Service Details Start ================= -->
  <section class="tx-section services-program bg-gradient-light">
    <div class="container">
      <div class="row justify-content-between align-items-xl-center g-3 g-xl-4 gy-5">
        <div class="col-lg-8 order-last ps-lg-7 ps-xxl-8 animated_left">
          <div class="vl-service-content-block mb-5">
            <h2 class="tx-section-title mb-5 mb-xl-7">Penuhi Standar, <br> Wujudkan Keunggulan
              Operasional!</h2>
            <p>Sertifikasi ISO adalah standar internasional yang membantu organisasi meningkatkan
              mutu, keandalan, dan keberlanjutan sistem manajemennya. Program pelatihan ini dirancang untuk memberikan
              pemahaman mendalam
              tentang prinsip, penerapan, dan audit berbagai standar ISO, yang relevan di berbagai industri dan sektor.
            </p>
          </div>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one-tab-pane"
                type="button" role="tab" aria-controls="one-tab-pane" aria-selected="true">ISO
                22301:2019</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two-tab-pane"
                type="button" role="tab" aria-controls="two-tab-pane" aria-selected="false">ISO
                9001:2015</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#three-tab-pane"
                type="button" role="tab" aria-controls="three-tab-pane" aria-selected="false">ISO
                31000:2018</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <!-- 1 -->
            <div class="tab-pane fade show active" id="one-tab-pane" role="tabpanel" aria-labelledby="one-tab"
              tabindex="0">
              <p>ISO 22301 membantu organisasi dalam mengembangkan sistem manajemen keberlangsungan bisnis (BCMS) agar
                dapat merespons secara efektif terhadap gangguan dan bencana. Peserta akan belajar bagaimana merancang dan
                menerapkan rencana keberlangsungan bisnis, serta melakukan evaluasi risiko operasional untuk memastikan
                kelangsungan proses penting.</p>
            </div>
            <!-- 2 -->
            <div class="tab-pane fade" id="two-tab-pane" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
              <p>Program ISO 9001:2015</p>
            </div>
            <!-- 3 -->
            <div class="tab-pane fade" id="three-tab-pane" role="tabpanel" aria-labelledby="three-tab"
              tabindex="0">
              <p>Program ISO 31000:2018</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 animated_right">
          <div class="vl-service-details">
            <div class="ratio ratio-21x9 ratio-lg-3x4 ratio-xxl-1x1 rounded fix">
              <img src="/img/banner/services2.avif" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  @include('layouts.partials.section-border-center')

  <!-- ================= More Services start ================= -->
  <section class="tx-section">
    <div class="container">
      <div class="row mb-5">
        <!-- single service box start -->
        <div class="col-12 text-center animated">
          <h2>View More Services</h2>
        </div>
      </div>
      <div class="row g-3 g-xxl-4 tx-service-related justify-content-lg-center">
        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-badge-check"></i>
              </div>
              <div class="vl-service-icon-box-4-content4">
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
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-compass"></i>
              </div>
              <div class="vl-service-icon-box-4-content4">
                <h3 class="h5">Sertifikasi Internasional</h3>
                <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                <a href="{{ route('second', ['services', 'sertifikasi-internasional']) }}"
                  class="btn btn-more"><span>Learn
                    More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card d-none animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-globe"></i>
              </div>
              <div class="vl-service-icon-box-4-content4">
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
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-trophy-star"></i>
              </div>
              <div class="vl-service-icon-box-4-content4">
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
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-award"></i>
              </div>
              <div class="vl-service-icon-box-4-content4">
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
  </section>
  <!-- ================= More Services End ================= -->

  @include('layouts.partials.cta')
@endsection

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const elements = document.querySelectorAll('.nav_link_child');
      elements.forEach(element => {
        element.classList.remove('active');
      });
    });
  </script>
@endpush
