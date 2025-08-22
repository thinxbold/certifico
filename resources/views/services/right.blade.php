@extends('layouts.landing', ['title' => 'O-Tech || Service Right'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Our Service</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Our Service</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Our Service Details</a></span>
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

  <!-- ================= Service Details Start ================= -->
  <section class="vl-service-deatil pt-100">
    <div class="container">
    <div class="row">
      <div class="col-lg-8">
      <div class="vl-service-details mr-80">
        <div class="vl-service-details-larg-img fix br-8 mb-30">
        <img class="w-100" src="/img/service/vl-service-left-1.1.png" alt="" />
        </div>
        <div class="vl-service-details-content">
        <div class="vl-service-content-block-1 mb-30">
          <h3 class="vl-fs-32 vl-lineheight-32 vl-text-cmn-blck pb-16 m-0">IT Infrastructure Management</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-26 pb-16 m-0">
          Keep your business running smoothly with reliable and optimized IT infrastructure. We <br /> provide end-to-end infrastructure management network design & setup to maintenance <br /> and monitoring. Our solutions ensure high availability, minimal downtime.
          </p>

          <p class="vl-text-para vl-fs-18 vl-lineheight-26 m-0">
          Our managed IT services offer businesses the convenience of outsourcing technology <br />needs while maintaining full control and visibility. From 24/7 system monitoring.
          </p>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6">
          <div class="vl-service-details-content mb-30">
            <h3 class="vl-fs-32 vl-lineheight-32 vl-text-cmn-blck pb-24 m-0">Our Service Benefits</h3>
            <div class="vl-service-details-content-check">
            <ul>
              <li>
              <span><i class="fa-regular fa-check"></i></span> Technology Consultancy
              </li>
              <li>
              <span><i class="fa-regular fa-check"></i></span> Maintenance And Support
              </li>
              <li>
              <span><i class="fa-regular fa-check"></i></span> We Provide best services
              </li>
              <li>
              <span><i class="fa-regular fa-check"></i></span> Requirements Gathering
              </li>
              <li>
              <span><i class="fa-regular fa-check"></i></span> Business Growth
              </li>
            </ul>
            </div>
          </div>
          </div>
          <div class="col-lg-6 col-md-6">
          <div class="vl-service-details-sm mb-30">
            <img class="w-100" src="/img/service/vl-service-sm-1.2.png" alt="" />
          </div>
          </div>
        </div>
        <div class="vl-service-content-block-2 mb-30">
          <h3 class="vl-fs-32 vl-lineheight-32 vl-text-cmn-blck pb-16 m-0">Comprehensive IT Solutions for Every Need</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-26 pb-16 m-0">
          Our range of IT services is designed to meet the diverse needs of businesses, whether <br /> small startups or large enterprises. From managed IT support and cloud computing to <br /> cybersecurity & software development, we offer end-to-end solutions that enhance.
          </p>

          <p class="vl-text-para vl-fs-18 vl-lineheight-26 m-0">
          We offer end-to-end solutions that enhance efficiency and drive innovation. Our experts <br /> collaborate with you to identify pain points implement tailored strategies that optimize.
          </p>
        </div>

        <div class="row">
          <!-- single icon box -->
          <div class="col-lg-6 col-md-6">
          <div class="vl-about-icon-box-4 vl-service-box vl-gray-bg-4 d-flex br-8 mb-30">
            <div class="vl-service-box-icon">
            <span><img src="/img/icons/vl-service-icon-1.1.svg" alt="" /></span>
            </div>
            <div class="vl-service-box-content">
            <h3 class="vl-fs-18 vl-lineheight-18 pb-16 m-0"><a href="#">Testing & Quality Assurance</a></h3>
            <p class="vl-text-para m-0">
              Before going live, we rigorously <br /> test every component to ensure
            </p>
            </div>
          </div>
          </div>

          <!-- single icon box -->
          <div class="col-lg-6 col-md-6">
          <div class="vl-about-icon-box-4 vl-service-box vl-gray-bg-4 d-flex br-8 mb-30">
            <div class="vl-service-box-icon">
            <span><img src="/img/icons/vl-service-icon-1.2.svg" alt="" /></span>
            </div>
            <div class="vl-service-box-content">
            <h3 class="vl-fs-18 vl-lineheight-18 pb-16 m-0"><a href="#">Launch & Support</a></h3>
            <p class="vl-text-para m-0">
              Once everything is in place, we <br /> launch solution comprehensive
            </p>
            </div>
          </div>
          </div>
        </div>

        <div class="vl-service-content-block-3">
          <h3 class="vl-fs-32 vl-lineheight-32 vl-text-cmn-blck pb-16 m-0">Innovative Solutions for a Competitive Edge</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-26 pb-16 m-0">
          We specialize in delivering customized IT solutions that drive business transformation. <br /> Whether you’re looking to streamline operations with automation, enhance customer <br /> engagement through digital platforms, or safeguard your data with advanced.
          </p>

          <p class="vl-text-para vl-fs-18 vl-lineheight-26 m-0">
          Cybersecurity measures, our services are built to provide a competitive advantage. With <br /> a commitment to excellence, we help you stay ahead in today’s fast-evolving digital.
          </p>
        </div>
        </div>
      </div>
      </div>
      <div class="col-lg-4">
      <div class="vl-sidebar-widget">
        <!-- search widget -->
        <div class="vl-sidebar-widget-search mb-30 vl-gray-bg-4 br-16">
        <h3 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-20 pb-24 m-0">Search</h3>
        <div class="vl-sidebar-widget-search-form p-relative z-index-1">
          <form action="#">
          <input type="text" placeholder="Search.." />
          </form>
          <div class="vl-sidebar-widget-search-icon">
          <span><i class="fa-regular fa-magnifying-glass"></i></span>
          </div>
        </div>
        </div>

        <!-- recent post -->
        <div class="vl-sidebar-widget-search mb-30 vl-gray-bg-4 br-16">
        <h3 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-20 pb-24 m-0">Our Services</h3>
        <div class="vl-sidebar-rec-post">
          <ul>
          <li>
            <a href="#">Technology Solution <span><i class="fa-regular fa-angle-right"></i></span></a>
          </li>
          <li>
            <a href="#">Website & Mobile App <span><i class="fa-regular fa-angle-right"></i></span></a>
          </li>
          <li>
            <a href="#">Tracking Security <span><i class="fa-regular fa-angle-right"></i></span></a>
          </li>
          <li>
            <a href="#">Mobile App Design <span><i class="fa-regular fa-angle-right"></i></span></a>
          </li>
          <li>
            <a href="#">IT Management Service <span><i class="fa-regular fa-angle-right"></i></span></a>
          </li>
          </ul>
        </div>
        </div>

        <!-- phone -->
        <div class="vl-sidebar-widget-search mb-30 vl-gray-bg-4 br-16">
        <h3 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-28 pb-24 m-0">If You Need Any Help <br /> Contact With Us</h3>
        <div class="vl-sidebar-phone">
          <a href="tel:1234567890"><span><i class="fa-light fa-phone"></i></span> +123 456 7890</a>
        </div>
        </div>

        <!-- social -->
        <div class="vl-sidebar-widget-search mb-30 vl-gray-bg-4 br-16">
        <h3 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-28 pb-24 m-0">Follow Us</h3>
        <div class="vl-sidebar-social">
          <ul>
          <li>
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          </li>
          <li>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
          </li>
          </ul>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  <!-- ================= Service section start ================= -->
  <section class="vl-service-area pt-100 pb-70">
    <div class="container">
    <h2 class="vl-text-cmn-blck text-center vl-fs-44 vl-lineheight-44 mb-60">View More Service</h2>
    <div class="row">
      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.11.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Cloud Computing Solutions</a></h3>
        <p class="pb-24">
          Leverage the power cloud to enhance <br /> scalability, flexibility, and performance <br />Our cloud computing solutions secure.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.22.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">IT Infrastructure Management</a></h3>
        <p class="pb-24">
          Optimize your business operations with <br /> reliable IT infrastructure management <br /> From network setup to hardware.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30">
      <div class="vl-service-icon-box-4 vl-service-icon-box-4-bg vl-gray-bg-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
        <span><img src="/img/icons/vl-ser-ic-4.3.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
        <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="#">Cybersecurity Services</a></h3>
        <p class="pb-24">
          In today’s digital world, protecting your <br /> data is more critical than ever. Our Best <br /> comprehensive cybersecurity services.
        </p>
        <a href="#" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      </div>
      <!-- single service box end -->
    </div>
    </div>
  </section>
  <!-- ================= Service section End ================= -->
@endsection