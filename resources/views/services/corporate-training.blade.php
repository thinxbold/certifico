@extends('layouts.landing', ['title' => 'Certifico || Corporate Training'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light pb-7 pb-xl-8">
    <div class="container">
      <div class="row g-3 gx-xl-9">
        <div class="col-md-9">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Our Services</h4>
            <h1 class="tx-section-heading">Corporate Training</h1>
            <div class="tx-breadcrumb-list mt-3">
              <span><a href="{{ route('any', 'index') }}">Home</a></span>
              <span><a href="{{ route('second', ['services', 'our-services']) }}">Our Service</a></span>
              <span class="active">Corporate Training</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Service Details Start ================= -->
  <section class="tx-section bg-gradient-light">
    <div class="container">
      <div class="row justify-content-between align-items-lg-center g-3 g-xl-4 gy-5">
        <div class="col-lg-8 order-last p-relative ps-lg-7 ps-xxl-8 animated_left">
          <img src="/img/icons/3d-rating.webp" class="col-2 p-absolute end-0 top-0 mt-n5 mt-xl-n8 me-3 me-xl-7"
            alt="" />
          <div class="tx-service-content-block">
            <h2 class="tx-section-title mb-5 mb-xl-7 col-10">Tingkatkan Kompetensi Tim, <br> Dorong Performa
              Bisnis!</h2>
            <p>Program Corporate Training kami dirancang khusus untuk mendukung pengembangan kapasitas SDM secara
              strategis dan terstruktur. Melalui pelatihan yang relevan dengan kebutuhan industri, organisasi Anda akan
              mampu meningkatkan produktivitas, adaptabilitas, dan daya saing di pasar yang dinamis.</p>
            <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-secondary btn-icon-leading mt-3">
              Get a Free Consultation <i class="fa-regular fa-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 animated_right">
          <div class="tx-service-details">
            <div class="ratio ratio-21x9 ratio-lg-3x4 ratio-xxl-1x1 rounded fix">
              <img src="/img/banner/corporate-training.avif" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  @include('layouts.partials.section-border-center')

  <!-- ================= More Services start ================= -->
  <section class="tx-section pb-0">
    <div class="container">
      <div class="row mb-5">
        <!-- single service box start -->
        <div class="col-12 text-center animated">
          <h2>Keunggulan Corporate Training</h2>
        </div>
      </div>
      <div class="row g-3 g-xxl-4 tx-service-related mb-7">
        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-4 animated">
          <div class="card tx-service-card">
            <div class="card-body">
              <div class="d-xl-flex justify-content-xl-between align-items-center mb-3 mb-4">
                <div class="tx-service-icon order-xl-last">
                  <i class="fa-solid fa-compass"></i>
                </div>
                <h3 class="h5 col-xl-8">Disesuaikan dengan Kebutuhan Perusahaan</h3>
              </div>
              <p>Materi dan metode pelatihan kami dapat disesuaikan dengan industri, level jabatan, dan tujuan
                perusahaan.</p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-4 animated">
          <div class="card tx-service-card">
            <div class="card-body">
              <div class="d-xl-flex justify-content-xl-between align-items-center mb-3 mb-xl-4">
                <div class="tx-service-icon order-xl-last">
                  <i class="fa-solid fa-award"></i>
                </div>
                <h3 class="h5 col-xl-8">Instruktur Berpengalaman</h3>
              </div>
              <p>Dipandu oleh para profesional bersertifikasi dan praktisi industri yang telah terbukti keahliannya.</p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-4 animated">
          <div class="card tx-service-card">
            <div class="card-body">
              <div class="d-xl-flex justify-content-xl-between align-items-center mb-3 mb-4">
                <div class="tx-service-icon order-xl-last">
                  <i class="fa-solid fa-trophy-star"></i>
                </div>
                <h3 class="h5 col-xl-8">Pendekatan Praktis dan Aplikatif</h3>
              </div>
              <p>Fokus pada studi kasus, simulasi, dan keterampilan yang dapat langsung diterapkan di tempat kerja.</p>
            </div>
          </div>
        </div>
        <!-- single service box end -->
      </div>
    </div>
  </section>
  <!-- ================= More Services End ================= -->

  <!-- ================= Cta section start ================= -->
  @include('layouts.partials.cta3')
  <!-- ================= Cta section End ================= -->
@endsection
