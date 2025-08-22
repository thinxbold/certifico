@extends('layouts.landing', ['title' => 'Certifico || Sertifikasi Internasional'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light pb-7">
    <div class="container">
      <div class="row justify-content-between g-3">
        <div class="col-md-6 col-xl-5 animated_left">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Our Services</h4>
            <h1 class="tx-section-heading">Sertifikasi Internasional</h1>
            <div class="tx-breadcrumb-list mt-3">
              <span><a href="{{ route('any', 'index') }}">Home</a></span>
              <span><a href="{{ route('second', ['services', 'our-services']) }}">Our Service</a></span>
              <span class="active">Sertifikasi Internasional</span>
            </div>
          </div>
        </div>
        <div class="col-md-6 pt-5 animated_right">
          <div class="tx-breadcrumb mb-4">
            <p>Program sertifikasi Certified Risk Associate (CRA) dan Certified Risk Professional (CRP)
              merupakan inisiatif strategis bagi para profesional di bidang manajemen risiko.</p>
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
      <div class="row justify-content-end g-3 g-xl-4 g-xxl-5">
        <div class="col-12 animated">
          <div class="card card-body">
            <div class="row align-items-center">
              <div class="col-md-6 col-lg-7 col-xl-8">
                <h2 class="h4 mb-4 mb-md-0">Jalur Profesional Menuju Keahlian Manajemen Risiko</h2>
              </div>
              <div class="col-md-auto ms-md-auto">
                <div class="brand-logo d-md-flex align-items-center gap-4">
                  <div class="brand-logo-title mb-md-0">Certified by:</div>
                  <div class="brand-logo-wrapper gap-4">
                    <img src="/img/brand/logo-AAFM.webp" alt="">
                    <img src="/img/brand/logo-GAFM.webp" alt="">
                    <img src="/img/brand/logo-AAPM-lapel-pin.webp" alt="">
                  </div>
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
                  <img src="/img/service/ceip.avif" class="img-cover" alt="" />
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'ceip-certified-esg-investing-professional']) }}"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/logo-GAFM.webp" alt="">
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
                <span class="tx-single-services-meta">by: Herbert Harrison</span>
                <div class="d-flex align-items-center gap-2 mb-3">
                  <span class="tx-single-services-desc">Rp 25.500.000</span>
                  <span class="small text-decoration-line-through text-danger">Rp 34.000.000</span>
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'ceip-certified-esg-investing-professional']) }}"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
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
                  <img src="/img/service/cgrcs.avif" class="img-cover" alt="" />
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'cgrcs-certified-governance-risk-compliance-specialist']) }}"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/logo-AAFM.webp" alt="">
                  </div>
                  <div class="tx-single-services-tag">
                    <span>Sertifikasi Internasional</span>
                  </div>
                  <h3>CGRCS<sup>&reg;</sup><span>Certified Governance Risk Compliance Specialist</span></h3>
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
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'cgrcs-certified-governance-risk-compliance-specialist']) }}"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
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
                  <img src="/img/service/cbcmp.avif" class="img-cover" alt="" />
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'cbcmp-certified-business-continuity-management-professional']) }}"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/logo-AAFM.webp" alt="">
                  </div>
                  <div class="tx-single-services-tag">
                    <span>Sertifikasi Internasional</span>
                  </div>
                  <h3>CBCMP<sup>&reg;</sup><span>Certified Business Continuity Management Professional</span></h3>
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
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'cbcmp-certified-business-continuity-management-professional']) }}"
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

        <!-- single services box start -->
        <div class="col-md-6 col-lg-4 col-xl-3 animated">
          <div class="card">
            <div class="tx-single-services-item">
              <div class="tx-single-services-img ratio ratio-4x3">
                <div class="d-block">
                  <img src="/img/service/crme.avif" class="img-cover" alt="" />
                </div>
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'crme-certified-risk-modeling-expert']) }}"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/logo-AAFM.webp" alt="">
                  </div>
                  <div class="tx-single-services-tag">
                    <span>Sertifikasi Internasional</span>
                  </div>
                  <h3>CRME<sup>&reg;</sup><span>Certified Risk Modeling Expert</span></h3>
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
                <a href="{{ route('third', ['services', 'sertifikasi-internasional', 'crme-certified-risk-modeling-expert']) }}"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-tertiary btn-icon-leading btn-sm">
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
          <div class="tx-service-content-block mb-5">
            <h2 class="tx-section-title mb-5 mb-xl-7">Pengakuan Internasional <br> untuk Karier Tanpa Batas!</h2>
            <p>Program sertifikasi internasional kami dirancang untuk para profesional yang ingin memperluas pengetahuan
              dan keterampilan mereka sesuai dengan standar global dalam pengelolaan risiko, tata kelola, dan
              keberlanjutan. Dengan kolaborasi lembaga sertifikasi internasional bereputasi, program ini memberikan
              pengakuan global dan kredibilitas profesional.</p>
          </div>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="ceip-tab" data-bs-toggle="tab" data-bs-target="#ceip-tab-pane"
                type="button" role="tab" aria-controls="ceip-tab-pane"
                aria-selected="true">CEIP<sup>&reg;</sup></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="cgrcs-tab" data-bs-toggle="tab" data-bs-target="#cgrcs-tab-pane"
                type="button" role="tab" aria-controls="cgrcs-tab-pane"
                aria-selected="false">CGRCS<sup>&reg;</sup></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="cbcmp-tab" data-bs-toggle="tab" data-bs-target="#cbcmp-tab-pane"
                type="button" role="tab" aria-controls="cbcmp-tab-pane"
                aria-selected="false">CBCMP<sup>&reg;</sup></button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="crme-tab" data-bs-toggle="tab" data-bs-target="#crme-tab-pane"
                type="button" role="tab" aria-controls="crme-tab-pane"
                aria-selected="false">CRME<sup>&reg;</sup></button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <!-- 1 -->
            <div class="tab-pane fade show active" id="ceip-tab-pane" role="tabpanel" aria-labelledby="ceip-tab"
              tabindex="0">
              <p>Sertifikasi ini membekali peserta dengan pemahaman mendalam tentang prinsip-prinsip ESG (Environmental,
                Social, Governance) dalam investasi. Cocok untuk profesional di bidang keuangan, investasi, dan
                keberlanjutan yang ingin mengintegrasikan faktor ESG dalam pengambilan keputusan strategis.</p>
            </div>
            <!-- 2 -->
            <div class="tab-pane fade" id="cgrcs-tab-pane" role="tabpanel" aria-labelledby="cgrcs-tab"
              tabindex="0">
              <p>Program CGRCS<sup>&reg;</sup></p>
            </div>
            <!-- 3 -->
            <div class="tab-pane fade" id="cbcmp-tab-pane" role="tabpanel" aria-labelledby="cbcmp-tab"
              tabindex="0">
              <p>Program CBCMP<sup>&reg;</sup></p>
            </div>
            <!-- 4 -->
            <div class="tab-pane fade" id="crme-tab-pane" role="tabpanel" aria-labelledby="crme-tab" tabindex="0">
              <p>Program CRME<sup>&reg;</sup></p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 animated_right">
          <div class="tx-service-details">
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
      <div class="row g-3 g-xxl-4 tx-service-related justify-content-lg-center animated">
        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-badge-check"></i>
              </div>
              <div class="tx-service-icon-box-4-content4">
                <h3 class="h5">Sertifikasi BNSP</h3>
                <p>Inisiatif strategis bagi para profesional di bidang manajemen risiko.</p>
                <a href="{{ route('second', ['services', 'sertifikasi-bnsp']) }}" class="btn btn-more"><span>Learn
                    More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card d-none">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-compass"></i>
              </div>
              <div class="tx-service-icon-box-4-content4">
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
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card">
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
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card">
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
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card">
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
