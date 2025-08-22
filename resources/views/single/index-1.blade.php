@extends('layouts.base', ['title' => 'O-Tech || Single'])

@section('header')
  @include('layouts.partials.loader')
  @include('layouts.partials.header-single.navbar')
@endsection

@section('content')
  <main>
    <!-- ================= Banner section start ================= -->
    <section class="vl-hero-area vl-hero-area-4 vl-hero-bg p-relative z-index-1 fix pt-190 pb-70" style="background-image: url(/img/banner/vl-hero-bg-4.1.png);">
    <div class="container">
      <div class="row">
      <div class="col-xl-6 mb-30">
        <div class="vl-hero-content p-relative z-index-1">
        <div class="vl-section-title-wrapper">
          <h4 class="vl-section-subtitle-5 vl-white vl-upper">IT Solutions for a Smarter Future</h4>
          <h1 class="vl-section-heading vl-section-heading-2 vl-white pt-16">IT Solutions For A Digital-First World</h1>
          <p class="vl-section-description pt-16 pb-28">
          Empower your business with cutting technology solutions <br /> tailored to meet your unique needs from cloud computing.
          </p>
        </div>

        <div class="vl-btns mb-60">
          <div class="vl-herobtn vl-upper">
          <a href="#" class="theme-btn">Book a Free Consultation<span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>

        <div class="vl-hero-counter">
          <div class="vl-hero-counter-box mb-30">
          <span class="counter vl-white">90</span><span>k</span>
          <h4 class="vl-hero-counter-box-title vl-white pt-12">Happy Client</h4>
          </div>
          <div class="vl-hero-counter-box mb-30">
          <span class="counter vl-white">650</span><span>+</span>
          <h4 class="vl-hero-counter-box-title vl-white pt-12">Total Projects</h4>
          </div>

          <div class="vl-hero-counter-box mb-30">
          <span class="counter vl-white">85</span><span>+</span>
          <h4 class="vl-hero-counter-box-title vl-white pt-12">Work Together</h4>
          </div>
        </div>
        </div>
      </div>
      <div class="col-xl-6 mb-30">
        <div class="vl-hero-img p-relative">
        <div class="vl-hero-shape-4">
          <div class="vl-shape-1">
          <img src="/img/icons/vl-emoji-4.1.svg" alt="" />
          </div>
          <div class="vl-shape-2">
          <img src="/img/icons/vl-emoji-4.2.svg" alt="" />
          </div>
          <div class="vl-shape-3">
          <img src="/img/icons/vl-emoji-4.3.svg" alt="" />
          </div>
        </div>
        <div class="vl-hero-fan">
          <img class="w-100" src="/img/icons/vl-fan.svg" alt="" />
        </div>
        <div class="vl-hero-img-4">
          <img class="w-100" src="/img/banner/vl-hero-4.1.png" alt="" />
        </div>
        <div class="vl-hero-img-4-content">
          <h3 class="vl-hero-img-4-title pb-20">Worked With More Than <br /> 100+ Technology</h3>
          <div class="vl-hero-img-4-grup">
          <div class="vl-hero-img-4-grup-img">
            <img src="/img/banner/vl-hero-group.png" alt="" />
          </div>
          <div class="vl-hero-img-4-grup-content">
            <h4>100+ <br /> Clients</h4>
          </div>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>
    <!-- ================= Banner section End ================= -->

    <!-- ================= About section start ================= -->
    <section id="about" class="vl-about-area pt-100 pb-70">
    <div class="container">
      <div class="row flex-lg-row flex-column-reverse align-items-center">
      <div class="col-lg-6 mb-30">
        <div class="vl-about-imgs vl-about-imgs-3 p-relative z-index-1 aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
        <div class="vl-about-large4">
          <img class="w-100" src="/img/about/vl-about-4.1.png" alt="" />
        </div>
        <div class="vl-about-sm-2 d-none d-md-block">
          <img src="/img/about/vl-about-top-sm-4.2.png" alt="" />
        </div>

        <div class="vl-about-poligon-shap p-relative z-index-1 fl-right">
          <img src="/img/icons/vl-about-poliogon.svg" alt="" />
          <div class="vl-about-poligon-title">
          <span class="counter vl-semi vl-white">12</span><span>+</span>
          <p class="vl-fs-20 vl-lineheight-20 pt-10 m-0">Year experience</p>
          </div>
        </div>
        </div>
      </div>
      <div class="col-lg-6 mb-30">
        <div class="vl-about-content-4 aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
        <div class="vl-section-title-wrapper">
          <div class="vl-section-subheading">
          <h4 class="vl-section-subtitle-6 vl-upper">whey choose US</h4>
          </div>
          <h2 class="vl-section-title vl-section-title-2 pt-16 pb-20">Empower Your Business<br /> Every Step of the Way</h2>
          <p class="vl-section-description-2 pb-32">
          Whether it optimizing IT infrastructure, enhancing cybersecurity, <br />or driving digital transformation, we are committed to helping.
          </p>

          <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="vl-about-icon-box-4 br-8 mb-30">
            <div class="vl-about-icon-box-4-icon4">
              <span><img src="/img/icons/vl-ser-ic-4.1.svg" alt="" /></span>
            </div>
            <div class="vl-about-icon-box-4-content4">
              <h3 class="vl-about-icon-box-4-title pt-20 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Excellence in Solution</a></h3>
              <p>We are committed delivering innovative, reliable & scalable.</p>
            </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="vl-about-icon-box-4 br-8 mb-30">
            <div class="vl-about-icon-box-4-icon4">
              <span><img src="/img/icons/vl-ser-ic-4.2.svg" alt="" /></span>
            </div>
            <div class="vl-about-icon-box-4-content4">
              <h3 class="vl-about-icon-box-4-title pt-20 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Difference We Deliver</a></h3>
              <p>
              Our team of experts brings <br /> years of experience across.
              </p>
            </div>
            </div>
          </div>
          </div>
        </div>
        <div class="vl-aboutbtn">
          <div class="vl-herobtn vl-aboutbtn vl-upper">
          <a href="{{ route('second', ['pages', 'about']) }}" class="theme-btn theme-btn2">About us<span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>
    <!-- ================= About section End ================= -->

    <!-- ================= Service section start ================= -->
    <section id="service" class="vl-service-area vl-gray-bg-4 pt-100 pb-70">
    <div class="container">
      <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
      <div class="vl-section-subheading">
        <h4 class="vl-section-subtitle-6 vl-upper">Our Service</h4>
      </div>
      <h2 class="vl-section-title vl-section-title-2 pt-16">Empowering Growth with <br />Smart IT Services</h2>
      </div>
      <div class="row">
      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
        <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
          <span><img src="/img/icons/vl-ser-ic-4.11.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
          <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Excellence in Solution</a></h3>
          <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Leverage the power cloud to enhance <br /> scalability, flexibility, and performance <br />Our cloud computing solutions secure.
          </p>
          <a href="{{ route('second', ['services', 'single']) }}" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
        <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
          <span><img src="/img/icons/vl-ser-ic-4.22.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
          <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">IT Infrastcture Management</a></h3>
          <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Optimize your business operations with <br /> reliable IT infrastructure management <br /> From network setup to hardware.
          </p>
          <a href="{{ route('second', ['services', 'single']) }}" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200">
        <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
          <span><img src="/img/icons/vl-ser-ic-4.3.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
          <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Cybersecurity Services</a></h3>
          <p class="vl-fs-18 vl-lineheight-28 pb-24">
          In today’s digital world, protecting your <br /> data is more critical than ever. Our Best <br /> comprehensive cybersecurity services.
          </p>
          <a href="{{ route('second', ['services', 'single']) }}" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
        <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
          <span><img src="/img/icons/vl-ser-ic-4.4.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
          <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">IT Consulting & Strategy</a></h3>
          <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Achieve your business goal with expert <br /> IT consulting and strategy services Our <br />consultants work with you to identify.
          </p>
          <a href="{{ route('second', ['services', 'single']) }}" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400">
        <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
          <span><img src="/img/icons/vl-ser-ic-4.5.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
          <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Managed IT Services</a></h3>
          <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Focus on your core business while we <br /> manage your IT operation our managed <br /> services include 24/7 monitoring.
          </p>
          <a href="{{ route('second', ['services', 'single']) }}" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <!-- single service box end -->

      <!-- single service box start -->
      <div class="col-lg-4 col-md-6 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
        <div class="vl-service-icon-box-4 p-relative z-index-1 fix br-8">
        <div class="vl-service-icon-box-4-icon4">
          <span><img src="/img/icons/vl-ser-ic-4.6.svg" alt="" /></span>
        </div>
        <div class="vl-service-icon-box-4-content4">
          <h3 class="vl-service-icon-box-4-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Network Design & Security</a></h3>
          <p class="vl-fs-18 vl-lineheight-28 pb-24">
          Create a robust and secure network <br /> infrastructure with our design security <br /> services we develop networks that.
          </p>
          <a href="{{ route('second', ['services', 'single']) }}" class="readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
        </div>
      </div>
      <!-- single service box end -->
      </div>
    </div>
    </section>
    <!-- ================= Service section End ================= -->

    <!-- ================= Case Studies section start ================= -->
    <section id="cases" class="vl-gallery p-relative z-index-1 pt-100 pb-100">
    <div class="container">
      <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
      <div class="vl-section-subheading">
        <h4 class="vl-section-subtitle-6 vl-upper">CASE STUDIES</h4>
      </div>
      <h2 class="vl-section-title vl-section-title-2 pt-16">Proof of Excellence in Action</h2>
      </div>

      <div id="gallery1" class="owl-carousel owl-theme">
      <!-- single testimonial box start -->
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.1.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Efficiency Managed IT Services</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <a href="{{ route('second', ['case-study', 'single']) }}"><span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      <!-- single testimonial box end -->

      <!-- single testimonial box start -->
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.2.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Building Resilient Networks</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <a href="{{ route('second', ['case-study', 'single']) }}"><span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      <!-- single testimonial box end -->

      <!-- single testimonial box start -->
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.3.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Seamless Cloud Migration</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <a href="{{ route('second', ['case-study', 'single']) }}"><span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      <!-- single testimonial box end -->

      <!-- single testimonial box start -->
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.1.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Seamless Cloud Migration</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <a href="{{ route('second', ['case-study', 'single']) }}"><span><i class="fa-regular fa-arrow-right"></i></span></a>
        </div>
      </div>
      <!-- single testimonial box end -->
      </div>
    </div>
    </section>
    <!-- ================= Case Studies section End ================= -->

    <!-- ================= Testimonial section start ================= -->
    <section id="testimonial" class="vl-testimonial vl-testimonial-bg-2 pt-100 pb-100">
    <div class="container">
      <div class="row align-items-center">
      <div class="col-lg-4">
        <div class="vl-testimonial-2 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
        <div class="vl-section-title-wrapper">
          <h4 class="vl-section-subtitle-5 vl-white vl-upper">Testimonial</h4>
          <h2 class="vl-section-title vl-white pt-16 pb-16">Our Success is a Measured by Are Satisfaction</h2>
          <p class="desc-4 pb-32">
          Their success is the greatest reflection <br /> of our commitment to excellence.
          </p>
        </div>
        <div class="vl-testimonialbtn-2">
          <div class="vl-herobtn">
          <a href="{{ route('second', ['pages', 'testimonial']) }}" class="theme-btn vl-upper">Read more reviews<span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div id="testimoni1" class="owl-carousel owl-theme">
        <!-- single testimonial slider start -->
        <div class="vl-testimonial-box vl-testimonial-box-4 p-relative br-8">
          <div class="vl-testimonial-box-icon">
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          </div>
          <div class="vl-testimonial-box-content pt-20 pb-30">
          <p>“Their feedback fuel our passion for continuous improvement and The innovation. We take immense pride in the relationships we’ve built and the trust we’ve earned through.”</p>
          </div>
          <div class="vl-testimonial-box-auth p-relative">
          <div class="vl-testimonial-box-auth-img">
            <img src="/img/testimonial/vl-testimonial-1.2.png" alt="" />
          </div>
          <div class="vl-testimonial-box-auth-content">
            <h4 class="vl-testimonial-box-auth-title pb-10"><a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a></h4>
            <span>Developers</span>
          </div>
          <div class="vl-testimonial-box-quote">
            <img src="/img/icons/vl-testimonial-q2.svg" alt="" />
          </div>
          </div>
        </div>
        <!-- single testimonial slider end -->

        <!-- single testimonial slider start -->
        <div class="vl-testimonial-box vl-testimonial-box-4 p-relative br-8">
          <div class="vl-testimonial-box-icon">
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          </div>
          <div class="vl-testimonial-box-content pt-20 pb-30">
          <p>“We believe that the true measure of success lies in the satisfaction & trust of our clients. Their stories of growth and transformation inspire us to deliver excellence every step.”</p>
          </div>
          <div class="vl-testimonial-box-auth p-relative">
          <div class="vl-testimonial-box-auth-img">
            <img src="/img/testimonial/vl-testimonial-1.1.png" alt="" />
          </div>
          <div class="vl-testimonial-box-auth-content">
            <h4 class="vl-testimonial-box-auth-title pb-10"><a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a></h4>
            <span>Developers</span>
          </div>
          <div class="vl-testimonial-box-quote">
            <img src="/img/icons/vl-testimonial-q2.svg" alt="" />
          </div>
          </div>
        </div>
        <!-- single testimonial slider end -->

        <!-- single testimonial slider start -->
        <div class="vl-testimonial-box vl-testimonial-box-4 p-relative br-8">
          <div class="vl-testimonial-box-icon">
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          <a href="#"><i class="fa-solid fa-star"></i></a>
          </div>
          <div class="vl-testimonial-box-content pt-20 pb-30">
          <p>“Their feedback fuel our passion for continuous improvement and The innovation. We take immense pride in the relationships we’ve built and the trust we’ve earned through.”</p>
          </div>
          <div class="vl-testimonial-box-auth p-relative">
          <div class="vl-testimonial-box-auth-img">
            <img src="/img/testimonial/vl-testimonial-1.1.png" alt="" />
          </div>
          <div class="vl-testimonial-box-auth-content">
            <h4 class="vl-testimonial-box-auth-title pb-10"><a href="{{ route('second', ['pages', 'team']) }}">Ben Stokes</a></h4>
            <span>Developers</span>
          </div>
          <div class="vl-testimonial-box-quote">
            <img src="/img/icons/vl-testimonial-q2.svg" alt="" />
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

    <!-- ================= pricing section start ================= -->
    <section id="pricing" class="vl-pricing pt-100 pb-70">
    <div class="container">
      <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
      <div class="vl-section-subheading">
        <h4 class="vl-section-subtitle-6 vl-upper">Our Pricing Plan</h4>
      </div>
      <h2 class="vl-section-title vl-section-title-2 pt-16">Technology Solutions <br /> Within Your Budget</h2>
      </div>
      <div class="row">
      <!-- single pricing box start -->
      <div class="col-lg-4 col-md-6">
        <div class="vl-pricing-box p-relative z-index-1 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
        <div class="vl-pricing-box-price">
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
        <div class="vl-pricing-box-btn mt-12">
          <div class="vl-herobtn vl-aboutbtn vl-upper">
          <a href="{{ route('second', ['pages', 'pricing-plan']) }}" class="theme-btn theme-btn2">choose a plan<span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>
        </div>
      </div>
      <!-- single pricing box end -->

      <!-- single pricing box start -->
      <div class="col-lg-4 col-md-6">
        <div class="vl-pricing-box active p-relative z-index-1 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
        <div class="vl-pricing-box-price">
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
        <div class="vl-pricing-box-btn mt-12">
          <div class="vl-herobtn vl-upper">
          <a href="#" class="theme-btn">choose a plan<span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>
        </div>
      </div>
      <!-- single pricing box end -->

      <!-- single pricing box start -->
      <div class="col-lg-4 col-md-6">
        <div class="vl-pricing-box p-relative z-index-1 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1300">
        <div class="vl-pricing-box-price">
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
        <div class="vl-pricing-box-btn mt-12">
          <div class="vl-herobtn vl-aboutbtn vl-upper">
          <a href="{{ route('second', ['pages', 'pricing-plan']) }}" class="theme-btn theme-btn2">choose a plan<span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>
        </div>
      </div>
      <!-- single pricing box end -->
      </div>
    </div>
    </section>
    <!-- ================= pricing section End ================= -->

    <!-- ================= Team section start ================= -->
    <section id="team" class="vl-team vl-team-bg p-relative pt-100 pb-100">
    <div class="container p-relative">
      <div class="row">
      <div class="col-lg-8">
        <div class="vl-section-title-wrapper mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
        <div class="vl-section-subheading">
          <h4 class="vl-section-subtitle-6 vl-upper">Our Team</h4>
        </div>
        <h2 class="vl-section-title vl-section-title-2 pt-16">Dedicated Professionals,<br /> Proven Results</h2>
        </div>
      </div>
      <div class="col-lg-4"></div>
      </div>

      <div class="contain">
      <div id="test" class="owl-carousel owl-theme">
        <div class="vl-team-sin">
        <div class="vl-team-thumb">
          <div class="vl-team-shape">
          <img src="/img/icons/vl-tean-shap1.svg" alt="" />
          </div>
          <img class="w-100" src="/img/team/vl-team-4.1.png" alt="" />
          <div class="vl-tem-social">
          <ul>
            <li>
            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
            </li>
          </ul>
          </div>
        </div>
        <div class="vl-team-content">
          <h4 class="title"><a href="{{ route('second', ['pages', 'team']) }}">Kendra Cremin</a></h4>
          <span>Network Engineer</span>
        </div>
        </div>
        <div class="vl-team-sin">
        <div class="vl-team-thumb">
          <div class="vl-team-shape">
          <img src="/img/icons/vl-tean-shap1.svg" alt="" />
          </div>
          <img class="w-100" src="/img/team/vl-team-4.2.png" alt="" />
          <div class="vl-tem-social">
          <ul>
            <li>
            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
            </li>
          </ul>
          </div>
        </div>
        <div class="vl-team-content">
          <h4 class="title"><a href="{{ route('second', ['pages', 'team']) }}">Dennis Jacobson</a></h4>
          <span>CEO & Founder</span>
        </div>
        </div>

        <div class="vl-team-sin">
        <div class="vl-team-thumb">
          <div class="vl-team-shape">
          <img src="/img/icons/vl-tean-shap1.svg" alt="" />
          </div>
          <img class="w-100" src="/img/team/vl-team-4.3.png" alt="" />
          <div class="vl-tem-social">
          <ul>
            <li>
            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
            </li>
          </ul>
          </div>
        </div>
        <div class="vl-team-content">
          <h4 class="title"><a href="{{ route('second', ['pages', 'team']) }}">Patricia Wilkinson</a></h4>
          <span>Digital Marketer</span>
        </div>
        </div>

        <div class="vl-team-sin">
        <div class="vl-team-thumb">
          <div class="vl-team-shape">
          <img src="/img/icons/vl-tean-shap1.svg" alt="" />
          </div>
          <img class="w-100" src="/img/team/vl-team-4.4.png" alt="" />
          <div class="vl-tem-social">
          <ul>
            <li>
            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
            </li>
          </ul>
          </div>
        </div>
        <div class="vl-team-content">
          <h4 class="title"><a href="{{ route('second', ['pages', 'team']) }}">Jack Williamson</a></h4>
          <span>Digital Marketer</span>
        </div>
        </div>

        <div class="vl-team-sin">
        <div class="vl-team-thumb">
          <div class="vl-team-shape">
          <img src="/img/icons/vl-tean-shap1.svg" alt="" />
          </div>
          <img class="w-100" src="/img/team/vl-team-4.1.png" alt="" />
          <div class="vl-tem-social">
          <ul>
            <li>
            <a href="#"><span><i class="fa-brands fa-facebook-f"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-linkedin-in"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
            </li>
            <li>
            <a href="#"><span><i class="fa-brands fa-youtube"></i></span></a>
            </li>
          </ul>
          </div>
        </div>
        <div class="vl-team-content">
          <h4 class="title"><a href="{{ route('second', ['pages', 'team']) }}">Kendra Cremin</a></h4>
          <span>Network Engineer</span>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>
    <!-- ================= Team section End ================= -->

    <!-- ================= Blog section start ================= -->
    <section id="blog" class="vl-blog pt-100 pb-70">
    <div class="container">
      <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
      <div class="vl-section-subheading">
        <h4 class="vl-section-subtitle-6 vl-upper">Our BLog</h4>
      </div>
      <h2 class="vl-section-title vl-section-title-2 pt-16">Latest Insights & Updates</h2>
      </div>
      <div class="row">
      <div class="col-lg-6">
        <!-- single blog item -->
        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
        <div class="vl-single-blog-img vl-single-blog-img-4 br-8 fix p-relative">
          <a href="{{ route('second', ['blogs', 'single']) }}"><img class="w-100" src="/img/blog/vl-blog-4.1.png" alt="" /></a>
        </div>
        <div class="vl-single-blog-4 p-relative z-index-1">
          <div class="vl-single-blog-right-arow">
          <a href="{{ route('second', ['blogs', 'single']) }}"><i class="fa-light fa-arrow-right"></i></a>
          </div>
          <div class="vl-single-blog-meta">
          <!-- single metabox -->
          <div class="vl-single-blog-meta-box mr-16">
            <div class="vl-single-blog-meta-box-icon mr-4">
            <span><img src="/img/icons/vl-calender-3.1.svg" alt="" /></span>
            </div>
            <div class="vl-single-blog-meta-box-content">
            <a href="#">10 October 2024</a>
            </div>
          </div>
          <!-- single metabox -->
          <div class="vl-single-blog-meta-box mr-16">
            <div class="vl-single-blog-meta-box-icon mr-4">
            <span><img src="/img/icons/vl-user-3.2.svg" alt="" /></span>
            </div>
            <div class="vl-single-blog-meta-box-content">
            <a href="#">Shakib Mahmud</a>
            </div>
          </div>
          </div>
          <div class="vl-single-blog-content vl-single-blog-content-4 p-relative z-index-1">
          <h3 class="vl-single-blog-title vl-single-blog-title-4 pt-18 pb-12"><a href="{{ route('second', ['blogs', 'single']) }}">Your Trusted Partner in Technology Transformation</a></h3>
          <p class="pb-24">
            Looking to stay ahead in the fast-paced world technology?<br /> Our blog offers in-depth articles, case studies, & thought.
          </p>
          <a href="{{ route('second', ['blogs', 'single']) }}" class="vl-readmore redmore">Read More <span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>
        </div>
      </div>

      <div class="col-lg-6">
        <!-- single blog item -->
        <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
        <div class="vl-single-blog-img vl-single-blog-img-4 br-8 fix p-relative">
          <a href="{{ route('second', ['blogs', 'single']) }}"><img class="w-100" src="/img/blog/vl-blog-4.2.png" alt="" /></a>
        </div>
        <div class="vl-single-blog-4 p-relative z-index-1">
          <div class="vl-single-blog-right-arow">
          <a href="#"><i class="fa-light fa-arrow-right"></i></a>
          </div>
          <div class="vl-single-blog-meta">
          <!-- single metabox -->
          <div class="vl-single-blog-meta-box mr-16">
            <div class="vl-single-blog-meta-box-icon mr-4">
            <span><img src="/img/icons/vl-calender-3.1.svg" alt="" /></span>
            </div>
            <div class="vl-single-blog-meta-box-content">
            <a href="#">10 October 2024</a>
            </div>
          </div>
          <!-- single metabox -->
          <div class="vl-single-blog-meta-box mr-16">
            <div class="vl-single-blog-meta-box-icon mr-4">
            <span><img src="/img/icons/vl-user-3.2.svg" alt="" /></span>
            </div>
            <div class="vl-single-blog-meta-box-content">
            <a href="#">Shakib Mahmud</a>
            </div>
          </div>
          </div>
          <div class="vl-single-blog-content vl-single-blog-content-4 p-relative z-index-1">
          <h3 class="vl-single-blog-title vl-single-blog-title-4 pt-18 pb-12"><a href="{{ route('second', ['blogs', 'single']) }}">The Latest in Tech: News, Tips, and Insights</a></h3>
          <p class="pb-24">
            Our blog is your go-to source for expert opinions practical <br /> tips the latest industry updates from digital transformation.
          </p>
          <a href="{{ route('second', ['blogs', 'single']) }}" class="vl-readmore redmore">Read More <span><i class="fa-regular fa-arrow-right"></i></span></a>
          </div>
        </div>
        </div>
      </div>
      </div>
    </div>
    </section>
    <!-- ================= Blog section End ================= -->

    @include('layouts.partials.cta')
  </main>

  @include('layouts.partials.footer')

  @include('layouts.partials.progress-circle')
@endsection