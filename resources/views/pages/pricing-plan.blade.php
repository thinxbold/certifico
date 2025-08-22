@extends('layouts.landing', ['title' => 'O-Tech || Pricing Plan'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Pricing Plan</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Pricing Plan</a></span>
        </div>
      </div>
      </div>
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-hero-img p-relative">
        <div class="vl-hero-shape-4">
        <div class="vl-shape-2">
          <img src="/img/icons/vl-emoji-4.2.svg" alt="" />
        </div>
        <div class="vl-shape-3">
          <img src="/img/icons/vl-emoji-4.3.svg" alt="" />
        </div>
        </div>
        <div class="vl-breadcrumb-fan">
        <img class="w-100" src="/img/icons/vl-fan-sm.svg" alt="" />
        </div>
        <div class="vl-breadcrumb-img">
        <img src="/img/banner/vl-breadcrumb-1.png" alt="" />
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Pricing section start ================= -->
  <section class="vl-pricing pt-100 pb-70">
    <div class="container">
    <div class="row">
      <!-- single pricing box start -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-pricing-box p-relative z-index-1 mb-30">
        <div class="vl-pricing-box-price vl-pricing-box-price-iner">
        <h3 class="price-title pb-16">Basics Plan</h3>
        <h2 class="price-number">$49/<span>Monthly</span></h2>
        </div>

        <div class="vl-pricing-box-content">
        <p>
          Our pricing model is designed with your <br /> business in mind offer range of packages.
        </p>
        </div>
        <div class="vl-pricing-box-list">
        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Cyber Analytics</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>24/7 Consultant Service</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Great Customer Support</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Market Growth Solution</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Digital Product Design</p>
          </div>
        </div>
        </div>

        <div class="vl-about-inner-btn mt-12">
        <a href="#" class="vl-iner-btn">choose a plan <span><i class="fa-light fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single pricing box end -->

      <!-- single pricing box start -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-pricing-box active active-2 p-relative z-index-1 mb-30">
        <div class="vl-pricing-box-price vl-pricing-box-price-iner">
        <h3 class="price-title pb-16">Classic Plan</h3>
        <h2 class="price-number">$65/<span>Monthly</span></h2>
        </div>

        <div class="vl-pricing-box-content active-border">
        <p>
          We understand that every business has <br /> unique needs and budgets that’s offer.
        </p>
        </div>
        <div class="vl-pricing-box-list">
        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Cyber Analytics</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>24/7 Consultant Service</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Great Customer Support</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Market Growth Solution</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Digital Product Design</p>
          </div>
        </div>
        </div>
        <div class="vl-about-inner-btn active-btn mt-12">
        <a href="#" class="vl-iner-btn">choose a plan <span><i class="fa-light fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single pricing box end -->

      <!-- single pricing box start -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-pricing-box p-relative z-index-1 mb-30">
        <div class="vl-pricing-box-price vl-pricing-box-price-iner">
        <h3 class="price-title pb-16">Normal Plan</h3>
        <h2 class="price-number">$89/<span>Monthly</span></h2>
        </div>

        <div class="vl-pricing-box-content">
        <p>
          Investing in IT shouldn’t be complicated or <br /> costly. Our pricing plans are structured.
        </p>
        </div>
        <div class="vl-pricing-box-list">
        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Cyber Analytics</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>24/7 Consultant Service</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Great Customer Support</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Market Growth Solution</p>
          </div>
        </div>

        <div class="vl-pricing-box-list-box mb-20">
          <div class="vl-icon vl-icon-2">
          <span><i class="fa-regular fa-check"></i></span>
          </div>
          <div class="vl-icon-content">
          <p>Digital Product Design</p>
          </div>
        </div>
        </div>
        <div class="vl-about-inner-btn mt-12">
        <a href="#" class="vl-iner-btn">choose a plan <span><i class="fa-light fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single pricing box end -->
    </div>
    </div>
  </section>
  <!-- ================= Pricing section End ================= -->

  <!-- ================= Brand section start ================= -->
  <div class="vl-brand-inner pb-70">
    <div class="container">
    <h2 class="vl-text-cmn-blck text-center vl-fs-44 vl-lineheight-44 mb-60">Our Official Sponsors</h2>

    <div class="vl-brand-inner-active">
      <!-- single brand -->
      <div class="vl-brand-single-iner">
      <img class="w-100" src="/img/brand/vl-brand-in-1.1.png" alt="" />
      </div>

      <!-- single brand -->
      <div class="vl-brand-single-iner">
      <img class="w-100" src="/img/brand/vl-brand-in-1.2.png" alt="" />
      </div>

      <!-- single brand -->
      <div class="vl-brand-single-iner">
      <img class="w-100" src="/img/brand/vl-brand-in-1.3.png" alt="" />
      </div>

      <!-- single brand -->
      <div class="vl-brand-single-iner">
      <img class="w-100" src="/img/brand/vl-brand-in-1.4.png" alt="" />
      </div>

      <!-- single brand -->
      <div class="vl-brand-single-iner">
      <img class="w-100" src="/img/brand/vl-brand-iner-1.5.png" alt="" />
      </div>

      <!-- single brand -->
      <div class="vl-brand-single-iner">
      <img class="w-100" src="/img/brand/vl-brand-in-1.3.png" alt="" />
      </div>
    </div>
    </div>
  </div>
  <!-- ================= Brand section end ================= -->
@endsection