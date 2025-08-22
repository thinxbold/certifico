@extends('layouts.landing', ['title' => 'O-Tech || Case Studies Right'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="vl-breadcrumb-bg p-relative z-index-1 fix pt-200 pb--70" style="background-image: url(/img/banner/vl-breadcrumb-bg.png);">
    <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 mb-30">
      <div class="vl-breadcrumb">
        <h1 class="vl-fs-60 vl-white">Case Studies Details</h1>
        <div class="vl-breadcrumb-list">
        <span><a href="{{ route('any', 'index') }}">Home</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Our Case Studies</a></span>
        <span class="dvir"><i class="fa-solid fa-angle-right"></i></span>
        <span class="active"><a href="#">Case Studies Details</a></span>
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
        <div class="vl-block-content mb-30">
        <h3 class="vl-fs-32 vl-lineheight-32 vl-text-cmn-blck pb-16 m-0">Building Resilient Networks</h3>
        <p class="vl-text-para vl-fs-18 vl-lineheight-26 m-0">
          In today’s connected world, network resilience is for uninterrupted business operations. <br /> Our approach focuses on designing, implementing, and maintaining robust networks <br /> that can withstand disruptions whether from cyberattacks, hardware failures.
        </p>
        </div>

        <div class="vl-service-details-cat pt-24 pb-24 mb-30">
        <div class="vl-service-details-cat-single">
          <h3 class="vl-fs-20 vl-lineheight-20 vl-text-cmn-blck pb-16 m-0">Category</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-18 m-0">IT Service & Technology</p>
        </div>
        <div class="vl-service-details-cat-single">
          <h3 class="vl-fs-20 vl-lineheight-20 vl-text-cmn-blck pb-16 m-0">Client</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-18 m-0">David Millar</p>
        </div>
        <div class="vl-service-details-cat-single">
          <h3 class="vl-fs-20 vl-lineheight-20 vl-text-cmn-blck pb-16 m-0">Location</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-18 m-0">73 Bridge St Brooklyn, USA.</p>
        </div>
        <div class="vl-service-details-cat-single">
          <h3 class="vl-fs-20 vl-lineheight-20 vl-text-cmn-blck pb-16 m-0">Date</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-18 m-0">20/10/2024</p>
        </div>
        </div>

        <div class="vl-service-details-larg-img fix br-8 mb-30">
        <img class="w-100" src="/img/studies/vl-case-larg-1.1.png" alt="" />
        </div>

        <div class="vl-block-content mb-30">
        <h3 class="vl-fs-32 vl-lineheight-32 vl-text-cmn-blck pb-16 m-0">Ready Networks for Seamless Connectivity</h3>
        <p class="vl-text-para vl-fs-18 vl-lineheight-26 pb-16 m-0">
          Our resilient network solutions are designed to provide businesses with the reliability & <br /> flexibility needed to thrive in a digital-first environment. We integrate redundancy, load <br /> balancing, real-time monitoring tools to minimize downtime and maximize performance.
        </p>
        <p class="vl-text-para vl-fs-18 vl-lineheight-26 m-0">
          Whether you're managing multiple locations or cloud environments, our solutions keep <br /> your data flowing smoothly and securely across your entire infrastructure minimizing.
        </p>
        </div>

        <div class="vl-block-quote vl-gray-bg-4 br-8 mb-30 p-relative z-index-1 fix">
        <p class="vl-text-para vl-fs-18 vl-lineheight-26 m-0">
          We build networks anticipate challenges & respond instantly. Through intelligent <br /> monitoring, automated recovery processes, & secure backup systems, our resilient <br /> networks are prepared for the unexpected. From network redundancy to disaster.
        </p>
        </div>

        <div class="vl-block-grid pt-30 mb-14">
        <div class="vl-block-check">
          <h3><span><i class="fa-regular fa-check"></i></span> Technology Consultancy</h3>
          <h3><span><i class="fa-regular fa-check"></i></span> Managed Services</h3>
          <h3><span><i class="fa-regular fa-check"></i></span> Ayanda Machine Learning</h3>
          <h3><span><i class="fa-regular fa-check"></i></span> Cloud Computing</h3>
          <h3><span><i class="fa-regular fa-check"></i></span> Automation Solutions</h3>
          <h3><span><i class="fa-regular fa-check"></i></span> Business Innovation</h3>
        </div>
        </div>

        <div class="vl-service-details-content">
        <div class="vl-block-content mb-30">
          <h3 class="vl-fs-32 vl-lineheight-32 vl-text-cmn-blck pb-16 m-0">Reliable Networks for Critical Operations</h3>
          <p class="vl-text-para vl-fs-18 vl-lineheight-26 pb-16 m-0">
          For industries where every second counts, network resilience is non-negotiable. Our Best <br /> solutions are tailored to meet the demands of mission-critical operations by combining.
          </p>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6">
          <div class="vl-service-details-sm fix br-8 mb-30">
            <img class="w-100" src="/img/studies/vl-case-studies-sm-1.2.png" alt="" />
          </div>
          </div>
          <div class="col-lg-6 col-md-6">
          <div class="vl-service-details-content mb-30">
            <p class="vl-text-para vl-fs-18 vl-lineheight-26 pb-24 m-0">
            As your business scales, do the demands <br /> on your network. Our resilient network <br /> solutions grow you, ensuring consistent <br /> performance, uptime. By implementing <br /> advanced protocols SD-WAN.
            </p>

            <div class="vl-service-details-content-check vl-service-details-content-check-bold">
            <ul>
              <li>
              <span><i class="fa-regular fa-check"></i></span> Software Development
              </li>
              <li>
              <span><i class="fa-regular fa-check"></i></span> AIand Machine Learning
              </li>
              <li>
              <span><i class="fa-regular fa-check"></i></span> Digital Transformation
              </li>
            </ul>
            </div>
          </div>
          </div>
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
        <h3 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-20 pb-24 m-0">Popular Tags</h3>
        <div class="vl-sidebar-tags">
          <a href="#">#IT Consulting</a>
          <a href="#">#IT Infrastructure</a>
          <a href="#">#Cloud Computing</a>
          <a href="#">#Tech Support</a>
          <a href="#">#Cybersecurity</a>
          <a href="#">#Future Of Work</a>
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

        <!-- contact form -->
        <div class="vl-sidebar-widget-search mb-30 vl-gray-bg-4 br-16">
        <h3 class="vl-text-cmn-blck vl-fs-20 vl-lineheight-28 pb-24 m-0">Get A Free Quote</h3>

        <div class="vl-sidebar-form">
          <form action="#">
          <input class="mb-16" type="text" placeholder="Your Name" />
          <input class="mb-16" type="email" placeholder="Email Address" />
          <input class="mb-16" type="number" placeholder="Phone Number" />
          <textarea class="mb-24" name="message" id="message" placeholder="Your Message"></textarea>

          <div class="vl-about-inner-btn">
            <button class="vl-iner-btn">Send Now <span><i class="fa-light fa-arrow-right"></i></span></button>
          </div>
          </form>
        </div>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  <!-- ================= Service section start ================= -->
  <section class="vl-service-area pt-70 pb-70">
    <div class="container">
    <h2 class="vl-text-cmn-blck text-center vl-fs-44 vl-lineheight-44 mb-60">View More Case Studies</h2>
    <div class="row">
      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.1.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Efficiency Managed IT Services</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.2.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Building Resilient Networks</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>

      <!-- single case studies -->
      <div class="col-lg-4 col-md-6">
      <div class="vl-gallery-testimonial-2 br-4 fix p-relative mb-30 z-index-1">
        <div class="vl-gallery-testimonial-2-image">
        <img class="w-100" src="/img/studies/vl-studies-2.3.png" alt="" />
        </div>
        <div class="vl-gallery-testimonial-2-con">
        <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Seamless Cloud Migration</a></h3>
        </div>
        <div class="vl-gallery-poligon">
        <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
        <span class="blu-bg"><i class="fa-regular fa-arrow-right"></i></span>
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================= Service section End ================= -->
@endsection