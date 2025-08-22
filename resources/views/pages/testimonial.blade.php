@extends('layouts.landing', ['title' => 'O-Tech || Testimonial'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Our Testimonials</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Our Testimonials</a></span>
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

  <!-- ================= Testimonial section start ================= -->
  <section class="vl-tesimonial-iner pt-100 pb-70">
    <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          “Their feedback fuel our passion for continuous improvement and The innovation. We take immense pride <br /> in the relationships we’ve built and <br /> the trust we’ve earned through.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.2.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Ben Stokes</a></h4>
          <span class="degsination">Developers</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          “We believe that the true measure <br /> of success lies in the satisfaction & <br /> trust of our clients. Their stories of growth and transformation inspire <br /> us to deliver excellence every step.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.1.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Tim Ferguson</a></h4>
          <span class="degsination">CEO Funder</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          “From streamlining operations the delivering innovative solutions, we pride in the positive impact we’ve <br /> had on businesses of all sizes. Hear directly from satisfied customers.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.3.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Andres Spinka</a></h4>
          <span class="degsination">CEO Funder</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">“We believe the best measure our success the success of the clients. With every project, our goal is to exceed expectations and provide exceptional Explore testimonials.”</p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.4.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Arturo Sanford</a></h4>
          <span class="degsination">Developers</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          “From startups to large enterprises, we’ve had the privilege supporting businesses across industries. Read what our partners have say about <br /> the quality, reliability, and impact.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.5.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Danielle Joss</a></h4>
          <span class="degsination">CEO Funder</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          “Client satisfaction our top priority, <br /> & nothing speaks louder than the words of those helped. Whether <br /> it's through managed IT services, cybersecurity solutions, or cloud.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.6.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Abel Johnston</a></h4>
          <span class="degsination">CEO Funder</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          “Their trust and satisfaction inspire <br /> us to constantly raise bar. Explore <br />the stories and testimonials from businesses that have benefited <br /> from our reliable services.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.7.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Wade Balistreri</a></h4>
          <span class="degsination">Developers</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          “The true value of our services lies <br /> in the success stories of our clients. Each partnership our dedication to understanding needs & delivering tailored solution whether through.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.8.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Miguel Kutch</a></h4>
          <span class="degsination">CEO Funder</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>

      <div class="col-lg-4 col-md-6">
      <!-- single testimonial slider start -->
      <div class="vl-testimonial-box vl-testimonial-box-inner vl-gray-bg-4 p-relative br-8 mb-30">
        <div class="vl-testimonial-box-icon vl-testimonial-box-icon-2">
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        <a href="#"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="vl-testimonial-box-content pt-20 pb-30">
        <p class="vl-text-cmn-blck vl-medium vl-fs-20 vl-lineheight-32">
          "Each testimonial reflects the trust <br /> our clients place in us the success <br /> we achieve together. With a focus <br /> on innovation, proactive support, <br /> and customer satisfaction.”
        </p>
        </div>
        <div class="vl-testimonial-box-auth p-relative">
        <div class="vl-testimonial-box-auth-img">
          <img src="/img/testimonial/vl-testimonial-1.9.png" alt="" />
        </div>
        <div class="vl-testimonial-box-auth-content">
          <h4 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-32 m-0"><a href="#">Miss Kirk Corkery</a></h4>
          <span class="degsination">CEO Funder</span>
        </div>
        <div class="vl-testimonial-box-quote">
          <img src="/img/icons/qt-iner.svg" alt="" />
        </div>
        </div>
      </div>
      <!-- single testimonial slider end -->
      </div>
    </div>

    <div class="row">
      <div class="col-12 m-auto">
      <div class="theme-pagination text-center mt-18">
        <ul>
        <li>
          <a href="#"><i class="fa-solid fa-angle-left"></i></a>
        </li>
        <li>
          <a class="active" href="#">01</a>
        </li>
        <li>
          <a href="#">02</a>
        </li>
        <li>...</li>
        <li>
          <a href="#">12</a>
        </li>
        <li>
          <a href="#"><i class="fa-solid fa-angle-right"></i></a>
        </li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Testimonial section End ================= -->
@endsection