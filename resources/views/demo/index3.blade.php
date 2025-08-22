@extends('layouts.base', ['title' => 'O-Tech 3' , 'logo3' => true])

@section('header')
  @include('layouts.partials.loader')
  @include('layouts.partials.header.navbar3')
@endsection

@section('content')
  <main>
    <!-- ================= Banner section start ================= -->
    <section class="vl-hero-area vl-hero-bg p-relative fix z-index-1 pt-234 pb-100" style="background-image: url(/img/banner/vl-hero-bg-3.png);">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 mb-30">
            <div class="vl-hero-content p-relative z-index-1">
              <div class="vl-section-title-wrapper">
                <h4 class="vl-section-subtitle-3 vl-theme-color-3 vl-upper vl-fs-16 m-0 br-50 vl-white">IT Solutions for a Smarter Future</h4>
                <h1 class="vl-section-heading vl-white pt-16">Your Growth Powered By So Advanced IT Service Solutions</h1>
                <p class="vl-section-description pt-16 pb-28">
                  Empower your business with cutting technology solutions <br /> tailored to meet your unique needs from cloud computing.
                </p>
              </div>

              <div class="vl-hero-btn-3">
                <a href="" class="vl-btn-3">Book a Free Consultation<span><i class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 mb-30">
            <div class="vl-hero-img-3 p-relative">
              <img class="w-100" src="/img/banner/vl-hero-img-3.png" alt="" />
            </div>
          </div>
          <div class="col-xl-1"></div>
        </div>

        <!-- counter area -->
        <div class="vl-hero-counter vl-hero-counter-3">
          <div class="vl-hero-counter-box mb-30">
            <span class="counter vl-44 vl-white">1.3</span><span>k+</span>
            <h4 class="vl-hero-counter-box-title vl-white pt-12">Happy Client</h4>
          </div>
          <div class="vl-hero-counter-box mb-30">
            <span class="counter vl-white">199</span><span>+</span>
            <h4 class="vl-hero-counter-box-title vl-white pt-12">Total Projects</h4>
          </div>

          <div class="vl-hero-counter-box mb-30">
            <span class="counter vl-white">99</span><span>+</span>
            <h4 class="vl-hero-counter-box-title vl-white pt-12">Team Member</h4>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Banner section End ================= -->

    <!-- ================= About section start ================= -->
    <section class="vl-about-area pt-100 pb-70">
      <div class="container">
        <div class="row flex-lg-row flex-column-reverse align-items-center">
          <div class="col-lg-6 mb-30">
            <div class="vl-about-imgs vl-about-imgs-3 p-relative z-index-1 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
              <div class="vl-about-large">
                <img src="/img/about/vl-about-3.1.png" alt="" />
              </div>
              <div class="vl-about-sm d-none d-md-block">
                <img src="/img/about/vl-about-sm-3.2.png" alt="" />
              </div>
              <div class="vl-about-content br-8">
                <div class="vl-about-counter-box pb-16">
                  <span class="counter vl-white">12</span><span>+</span>
                </div>
                <p>
                  With 12+ years of experience <br />
                  helping the community.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-30">
            <div class="vl-about-content vl-about-content-3 aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
              <div class="vl-section-title-wrapper">
                <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">About Us</h4>
                <h2 class="vl-section-title vl-blc-text-4 pt-16 pb-20">Empowering Businesses <br /> One Solution at a Time</h2>
                <p class="vl-section-description vl-section-description-3 pb-32">
                  With a passion for solving complex challenges, we specialize in <br /> delivering tailored IT solutions that empower businesses thrive.
                </p>
              </div>

              <div class="vl-about-grid pb-16">
                <!-- single check box -->
                <div class="vl-about-ch-box mb-16">
                  <div class="vl-about-ch-icon">
                    <span><i class="fa-regular fa-check"></i></span>
                  </div>
                  <div class="vl-about-content">
                    <h4 class="vl-about-ch-title">Financial Freedom Consulting</h4>
                  </div>
                </div>
                <!-- single check box -->
                <div class="vl-about-ch-box mb-16">
                  <div class="vl-about-ch-icon">
                    <span><i class="fa-regular fa-check"></i></span>
                  </div>
                  <div class="vl-about-content">
                    <h4 class="vl-about-ch-title">Next Genaration Accounting</h4>
                  </div>
                </div>
                <!-- single check box -->
                <div class="vl-about-ch-box mb-16">
                  <div class="vl-about-ch-icon">
                    <span><i class="fa-regular fa-check"></i></span>
                  </div>
                  <div class="vl-about-content">
                    <h4 class="vl-about-ch-title">Money Management Consulting</h4>
                  </div>
                </div>
                <!-- single check box -->
                <div class="vl-about-ch-box mb-16">
                  <div class="vl-about-ch-icon">
                    <span><i class="fa-regular fa-check"></i></span>
                  </div>
                  <div class="vl-about-content">
                    <h4 class="vl-about-ch-title">Short-Range Finance Planningss</h4>
                  </div>
                </div>
              </div>

              <div class="vl-about-auth">
                <div class="vl-about-authbtn">
                  <a href="#" class="thme-btn3 mr-32">Get Started <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>

                <div class="vl-about-auth-box mr-32">
                  <div class="box-icon mr-10">
                    <span><i class="fa-light fa-phone"></i></span>
                  </div>
                  <div class="box-content">
                    <span class="pb-10">Free Consultation</span>
                    <a class="num" href="tel:1234567890">123-456-7890</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= About section End ================= -->

    <!-- ================= Service section start ================= -->
    <section class="vl-service-area vl-gray-bg-2 pt-100 pb-70">
      <div class="container">
        <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Our Service</h4>
          <h2 class="vl-section-title vl-blc-text-4 pt-16 pb-20">Transforming Businesses with <br /> Expert IT Services</h2>
        </div>
        <div class="row">
          <!-- single service box start -->
          <div class="col-lg-6 mb-30">
            <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
              <div class="vl-service-icon icon3">
                <span><img src="/img/icons/vl-service-ic-3.1.svg" alt="" /></span>
              </div>
              <h2 class="vl-service-title pt-32"><a href="{{ route('second', ['services', 'single']) }}">IT Consulting Services</a></h2>
              <p class="pt-16 pb-24">
                Navigate the complexities technology with expert guidance <br /> from our IT consultants. We help businesses strategize.
              </p>
              <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
            </div>
          </div>
          <!-- single service box end -->
          <!-- single service box start -->
          <div class="col-lg-6 mb-30">
            <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
              <div class="vl-service-icon icon3">
                <span><img src="/img/icons/vl-service-ic-3.2.svg" alt="" /></span>
              </div>
              <h2 class="vl-service-title pt-32"><a href="{{ route('second', ['services', 'single']) }}">IT Infrastructure Management</a></h2>
              <p class="pt-16 pb-24">
                Keep your business running smoothly with reliable optimized <br /> IT infrastructure we provide end infrastructure management.
              </p>
              <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
            </div>
          </div>
          <!-- single service box end -->
          <!-- single service box start -->
          <div class="col-lg-12 mb-30">
            <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
              <div class="vl-df">
                <div class="vl-service-icon icon3">
                  <span><img src="/img/icons/vl-service-ic-3.3.svg" alt="" /></span>
                </div>
                <div class="vl-content">
                  <h2 class="vl-service-title"><a href="{{ route('second', ['services', 'single']) }}">Cybersecurity Services</a></h2>
                  <p class="pt-16 pb-24">
                    Protect your business from evolving cyber threats with our comprehensive cybersecurity solutions. From threat detection <br /> and response to data encryption and compliance management, we safeguard your digital 24/7.
                  </p>
                  <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->
          <!-- single service box start -->
          <div class="col-lg-6 mb-30">
            <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1400">
              <div class="vl-df">
                <div class="vl-service-icon icon3">
                  <span><img src="/img/icons/vl-service-ic-3.4.svg" alt="" /></span>
                </div>
                <div class="vl-content">
                  <h2 class="vl-service-title"><a href="{{ route('second', ['services', 'single']) }}">Cloud Solutions</a></h2>
                  <p class="pt-16 pb-24">
                    Leverage the power the cloud to streamline your <br /> operations boost scalability. Our cloud solutions <br />offer secure and flexible environments tailored.
                  </p>
                  <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->
          <!-- single service box start -->
          <div class="col-lg-6 mb-30">
            <div class="vl-service-content vl-service-content-3 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
              <div class="vl-df">
                <div class="vl-service-icon icon3">
                  <span><img src="/img/icons/vl-service-ic-3.5.svg" alt="" /></span>
                </div>
                <div class="vl-content">
                  <h2 class="vl-service-title"><a href="{{ route('second', ['services', 'single']) }}">Software Development</a></h2>
                  <p class="pt-16 pb-24">
                    Transform your ideas into reality with our custom <br /> software development services. Whether you <br /> need mobile apps, web platforms, or enterprise.
                  </p>
                  <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
          <!-- single service box end -->
        </div>
      </div>
    </section>
    <!-- ================= Service section End ================= -->

    <!-- ================= Case Studies section start ================= -->
    <section class="vl-gallery2 p-relative z-index-1 pt-100 pb-100">
      <div class="container p-relative">
        <div class="vl-section-title-wrapper mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Case Studies</h4>
          <h2 class="vl-section-title vl-blc-text-4 pt-16">Our Journey with Clients <br /> Success Unlocked</h2>
        </div>
        <div class="row">
          <div id="gallery3" class="owl-carousel owl-theme">
            <!-- single gallery item start -->
            <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
              <div class="gallery-number">
                <span>01</span>
              </div>
              <div class="gallery-img">
                <img class="w-100" src="/img/studies/vl-studies-2.1.png" alt="" />
              </div>
              <div class="gallery-content fix">
                <div class="gallery-content-trans">
                  <h3 class="gallery-title pb-16"><a href="{{ route('second', ['case-study', 'single']) }}">Efficiency Managed IT Services</a></h3>
                  <p>
                    Our solutions ensure availability,<br /> minimal downtime, & improved.
                  </p>
                  <a href="{{ route('second', ['case-study', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <!-- single gallery item end -->

            <!-- single gallery item start -->
            <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
              <div class="gallery-number">
                <span>02</span>
              </div>
              <div class="gallery-img">
                <img class="w-100" src="/img/studies/vl-studies-2.2.png" alt="" />
              </div>
              <div class="gallery-content fix">
                <div class="gallery-content-trans">
                  <h3 class="gallery-title pb-16"><a href="{{ route('second', ['case-study', 'single']) }}">Fortifying Cybersecurity</a></h3>
                  <p>
                    We focus delivering user-friendly, <br /> scalable & secure solutions to help secure
                  </p>
                  <a href="{{ route('second', ['case-study', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <!-- single gallery item end -->

            <!-- single gallery item start -->
            <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
              <div class="gallery-number">
                <span>03</span>
              </div>
              <div class="gallery-img">
                <img class="w-100" src="/img/studies/vl-studies-2.3.png" alt="" />
              </div>
              <div class="gallery-content fix">
                <div class="gallery-content-trans">
                  <h3 class="gallery-title pb-16"><a href="{{ route('second', ['case-study', 'single']) }}">Building Resilient Networks</a></h3>
                  <p>
                    From digital transformation system <br /> upgrades, our system consulting services
                  </p>
                  <a href="{{ route('second', ['case-study', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <!-- single gallery item end -->

            <!-- single gallery item start -->
            <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
              <div class="gallery-number">
                <span>04</span>
              </div>
              <div class="gallery-img">
                <img class="w-100" src="/img/studies/vl-case-studies-3.4.png" alt="" />
              </div>
              <div class="gallery-content fix">
                <div class="gallery-content-trans">
                  <h3 class="gallery-title pb-16"><a href="{{ route('second', ['case-study', 'single']) }}">Efficiency Managed IT Services</a></h3>
                  <p>
                    Our solutions ensure availability,<br /> minimal downtime, & improved.
                  </p>
                  <a href="{{ route('second', ['case-study', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <!-- single gallery item end -->

            <!-- single gallery item start -->
            <div class="vl-gallery-2 br-8 fix p-relative z-index-1">
              <div class="gallery-number">
                <span>01</span>
              </div>
              <div class="gallery-img">
                <img class="w-100" src="/img/studies/vl-studies-2.2.png" alt="" />
              </div>
              <div class="gallery-content fix">
                <div class="gallery-content-trans">
                  <h3 class="gallery-title pb-16"><a href="{{ route('second', ['case-study', 'single']) }}">Efficiency Managed IT Services</a></h3>
                  <p>
                    Our solutions ensure availability,<br /> minimal downtime, & improved.
                  </p>
                  <a href="{{ route('second', ['case-study', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
            <!-- single gallery item end -->
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Case Studies section End ================= -->

    <!-- ================= Testimonial section start ================= -->
    <section class="vl-testimonial vl-testimonial-bg pt-100 pb-100" style="background-image: url(/img/testimonial/vl-testimonial-bg-3.1.jpg);">
      <div class="container">
        <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-4 review-bg vl-white vl-fs-16 m-0 vl-theme-color3 vl-upper">Customer Review</h4>
          <h2 class="vl-section-title vl-white pt-16">Why Our Clients Trust Us</h2>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6 p-relative mx-auto">
            <div class="row">
              <div class="vl-testimonial-active-4">
                <!-- single testimonial slider start -->
                <div class="vl-testimonial-box vl-testimonial-box-3 p-relative br-8">
                  <div class="vl-testimonial-box-icon text-center">
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                  </div>
                  <div class="vl-testimonial-box-content text-center pt-20 pb-30">
                    <p>
                      “From seamless cloud migrations to enhanced cybersecurity, <br /> our work has helped businesses grow, adapt, and succeed in an ever-evolving digital landscape. But don't just take our word for hear directly those who have experienced the difference.”
                    </p>
                  </div>
                  <div class="vl-testimonial-box-auth vl-testimonial-box-auth-3 p-relative">
                    <div class="vl-testimonial-box-auth-img">
                      <img src="/img/testimonial/vl-testimonial-1.2.png" alt="" />
                    </div>
                    <div class="vl-testimonial-box-auth-content">
                      <h4 class="vl-testimonial-box-auth-title pb-10"><a href="#">Ben Stokes</a></h4>
                      <span>Developers</span>
                    </div>
                  </div>
                </div>
                <!-- single testimonial slider end -->
                <!-- single testimonial slider start -->
                <div class="vl-testimonial-box vl-testimonial-box-3 p-relative br-8">
                  <div class="vl-testimonial-box-icon text-center">
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                    <a href="#"><i class="fa-solid fa-star"></i></a>
                  </div>
                  <div class="vl-testimonial-box-content text-center pt-20 pb-30">
                    <p>
                      “From seamless cloud migrations to enhanced cybersecurity, <br /> our work has helped businesses grow, adapt, and succeed in an ever-evolving digital landscape. But don't just take our word for hear directly those who have experienced the difference.”
                    </p>
                  </div>
                  <div class="vl-testimonial-box-auth vl-testimonial-box-auth-3 p-relative">
                    <div class="vl-testimonial-box-auth-img">
                      <img src="/img/testimonial/vl-testimonial-1.2.png" alt="" />
                    </div>
                    <div class="vl-testimonial-box-auth-content">
                      <h4 class="vl-testimonial-box-auth-title pb-10"><a href="#">Ben Stokes</a></h4>
                      <span>Developers</span>
                    </div>
                  </div>
                </div>
                <!-- single testimonial slider end -->
              </div>

              <!-- arrow -->
              <div class="btn-wrap-4">
                <button class="prev-btn"><i class="fa-regular fa-arrow-left"></i></button>
                <button class="next-btn"><i class="fa-regular fa-arrow-right"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Testimonial section End ================= -->

    <!-- ================= Success section start ================= -->
    <section class="vl-success p-relative z-index-1 pt-100 pb-70">
      <div class="container">
        <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Work process</h4>
          <h2 class="vl-section-title vl-blc-text-4 pt-16">How We Get Things Done</h2>
        </div>
        <div class="row">
          <!-- single success icbox start -->
          <div class="col-lg-3 col-md-6">
            <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
              <div class="vl-success-box-icon vl-success-box-icon-3">
                <span><img src="/img/icons/vl-work-3.1.svg" alt="" /></span>
                <div class="vl-success-box-icon-3-number">
                  <cite>01</cite>
                </div>
                <div class="vl-success-box-3-arow d-none d-md-block">
                  <img src="/img/icons/vl-arow-4.1.svg" alt="" />
                  <img class="arow-active" src="/img/icons/vl-work-pro-arow.svg" alt="" />
                </div>
              </div>
              <div class="vl-success-box-desc">
                <h3 class="vl-success-box-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Discovery & Planning</a></h3>
                <p>
                  We begin by understanding your <br /> business needs, challenges, & <br />goals through in-depth.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->

          <!-- single success icbox start -->
          <div class="col-lg-3 col-md-6">
            <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
              <div class="vl-success-box-icon vl-success-box-icon-3">
                <span><img src="/img/icons/vl-work-3.2.svg" alt="" /></span>
                <div class="vl-success-box-icon-3-number">
                  <cite>02</cite>
                </div>
                <div class="vl-success-box-3-arow d-none d-md-block">
                  <img src="/img/icons/vl-arow-4.1.svg" alt="" />
                  <img class="arow-active" src="/img/icons/vl-work-pro-arow.svg" alt="" />
                </div>
              </div>
              <div class="vl-success-box-desc">
                <h3 class="vl-success-box-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Design & Development</a></h3>
                <p>
                  With a clear plan in place, our <br /> experts move into the design and <br /> development phase.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->

          <!-- single success icbox start -->
          <div class="col-lg-3 col-md-6">
            <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
              <div class="vl-success-box-icon vl-success-box-icon-3">
                <span><img src="/img/icons/vl-work-3.3.svg" alt="" /></span>
                <div class="vl-success-box-icon-3-number">
                  <cite>03</cite>
                </div>
                <div class="vl-success-box-3-arow d-none d-md-block">
                  <img src="/img/icons/vl-arow-4.1.svg" alt="" />
                  <img class="arow-active" src="/img/icons/vl-work-pro-arow.svg" alt="" />
                </div>
              </div>
              <div class="vl-success-box-desc">
                <h3 class="vl-success-box-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Continuous Improvement</a></h3>
                <p>
                  In a fast-changing digital world,<br /> staying ahead is essential. That’s <br />why we continuously monitor.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->

          <!-- single success icbox start -->
          <div class="col-lg-3 col-md-6">
            <div class="vl-success-box vl-success-box-3 text-center mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
              <div class="vl-success-box-icon vl-success-box-icon-3">
                <span><img src="/img/icons/vl-work-3.4.svg" alt="" /></span>
                <div class="vl-success-box-icon-3-number">
                  <cite>04</cite>
                </div>
              </div>
              <div class="vl-success-box-desc">
                <h3 class="vl-success-box-title pt-32 pb-16"><a href="{{ route('second', ['services', 'single']) }}">Launch & Support</a></h3>
                <p>
                  Once everything is in place, we <br /> the solution with comprehensive <br />support but our work doesn’t.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->
        </div>
      </div>
    </section>
    <!-- ================= Success section End ================= -->

    <!-- ================= Faq section start ================= -->
    <section class="vl-faq vl-gray-bg-2 pt-100 pb-70">
      <div class="container">
        <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3 vl-upper">Frequently Asked Questions</h4>
          <h2 class="vl-section-title vl-blc-text-4 pt-16">Your Questions Answered</h2>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
            <div class="accordion" id="accordionExample">
              <!-- single item -->
              <div class="vl-accordion-item mb-20">
                <h2 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How long does it take to implement a solution?</button></h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      The implementation timeline varies depending on the complexity and scope of the <br /> project. We prioritize efficiency compromising quality & keep you informed.
                    </p>
                  </div>
                </div>
              </div>

              <!-- single item -->
              <div class="vl-accordion-item mb-20">
                <h2 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can you customize solutions for my business?</button></h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      The implementation timeline varies depending on the complexity and scope of the <br /> project. We prioritize efficiency compromising quality & keep you informed.
                    </p>
                  </div>
                </div>
              </div>

              <!-- single item -->
              <div class="vl-accordion-item mb-20">
                <h2 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do you offer ongoing support and maintenance?</button></h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      The implementation timeline varies depending on the complexity and scope of the <br /> project. We prioritize efficiency compromising quality & keep you informed.
                    </p>
                  </div>
                </div>
              </div>

              <!-- single item -->
              <div class="vl-accordion-item mb-20">
                <h2 class="accordion-header" id="heading4"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">What if we already have an in-house IT team?</button></h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      The implementation timeline varies depending on the complexity and scope of the <br /> project. We prioritize efficiency compromising quality & keep you informed.
                    </p>
                  </div>
                </div>
              </div>

              <!-- single item -->
              <div class="vl-accordion-item mb-20">
                <h2 class="accordion-header" id="heading5"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">What industries do you serve?</button></h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      The implementation timeline varies depending on the complexity and scope of the <br /> project. We prioritize efficiency compromising quality & keep you informed.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Faq section End ================= -->

    <!-- ================= Blog section start ================= -->
    <section class="vl-blog pt-100 pb-70">
      <div class="container">
        <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-4 vl-fs-16 m-0 vl-theme-color3">OUR BLOG</h4>
          <h2 class="vl-section-title vl-blc-text-4 pt-16">Latest Insights & Updates</h2>
        </div>
        <div class="row">
          <!-- single blog item -->
          <div class="col-lg-4 col-md-6">
            <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
              <div class="vl-single-blog-img p-relative fix br-8">
                <a href="{{ route('second', ['blogs', 'single']) }}"><img class="br-8 w-100" src="/img/blog/vl-blog-3.1.png" alt="" /></a>
                <div class="vl-single-blog-tag">
                  <a href="#">Cyber Service</a>
                </div>
              </div>
              <div class="vl-single-blog-meta">
                <!-- single metabox -->
                <div class="vl-single-blog-meta-box pt-16 mr-16">
                  <div class="vl-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-calender-3.1.svg" alt="" /></span>
                  </div>
                  <div class="vl-single-blog-meta-box-content meta-content-4">
                    <a href="#">10 October 2024</a>
                  </div>
                </div>
                <!-- single metabox -->
                <div class="vl-single-blog-meta-box pt-16 mr-16">
                  <div class="vl-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-user-3.2.svg" alt="" /></span>
                  </div>
                  <div class="vl-single-blog-meta-box-content meta-content-4">
                    <a href="#">Shakib Mahmud</a>
                  </div>
                </div>
              </div>
              <div class="vl-single-blog-content vl-single-blog-content-3">
                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="{{ route('second', ['blogs', 'single']) }}">Revolutionize Your Operations <br /> with Our Expertise</a></h3>
                <a href="{{ route('second', ['blogs', 'single']) }}" class="vl-readmore more3">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>

          <!-- single blog item -->
          <div class="col-lg-4 col-md-6">
            <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">
              <div class="vl-single-blog-img p-relative fix br-8">
                <a href="{{ route('second', ['blogs', 'single']) }}"><img class="br-8 w-100" src="/img/blog/vl-blog-3.2.png" alt="" /></a>
                <div class="vl-single-blog-tag">
                  <a href="#">It Management</a>
                </div>
              </div>
              <div class="vl-single-blog-meta">
                <!-- single metabox -->
                <div class="vl-single-blog-meta-box pt-16 mr-16">
                  <div class="vl-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-calender-3.1.svg" alt="" /></span>
                  </div>
                  <div class="vl-single-blog-meta-box-content meta-content-4">
                    <a href="#">10 October 2024</a>
                  </div>
                </div>
                <!-- single metabox -->
                <div class="vl-single-blog-meta-box pt-16 mr-16">
                  <div class="vl-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-user-3.2.svg" alt="" /></span>
                  </div>
                  <div class="vl-single-blog-meta-box-content meta-content-4">
                    <a href="#">Shakib Mahmud</a>
                  </div>
                </div>
              </div>
              <div class="vl-single-blog-content vl-single-blog-content-3">
                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="{{ route('second', ['blogs', 'single']) }}">Empowering Your Business with <br /> Cutting-Edge Insights</a></h3>
                <a href="{{ route('second', ['blogs', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>

          <!-- single blog item -->
          <div class="col-lg-4 col-md-6">
            <div class="vl-single-blog-item vl-single-blog-item-3 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1300">
              <div class="vl-single-blog-img p-relative fix br-8">
                <a href="{{ route('second', ['blogs', 'single']) }}"><img class="br-8 w-100" src="/img/blog/vl-blog-3.3.png" alt="" /></a>
                <div class="vl-single-blog-tag">
                  <a href="#">It Service</a>
                </div>
              </div>
              <div class="vl-single-blog-meta">
                <!-- single metabox -->
                <div class="vl-single-blog-meta-box pt-16 mr-16">
                  <div class="vl-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-calender-3.1.svg" alt="" /></span>
                  </div>
                  <div class="vl-single-blog-meta-box-content meta-content-4">
                    <a href="#">10 October 2024</a>
                  </div>
                </div>
                <!-- single metabox -->
                <div class="vl-single-blog-meta-box pt-16 mr-16">
                  <div class="vl-single-blog-meta-box-icon mr-4">
                    <span><img src="/img/icons/vl-user-3.2.svg" alt="" /></span>
                  </div>
                  <div class="vl-single-blog-meta-box-content meta-content-4">
                    <a href="#">Shakib Mahmud</a>
                  </div>
                </div>
              </div>
              <div class="vl-single-blog-content vl-single-blog-content-3">
                <h3 class="vl-single-blog-title vl-blc-text-4 pt-16 pb-24"><a href="{{ route('second', ['blogs', 'single']) }}">Transform Your Business with <br /> Innovative Solutions</a></h3>
                <a href="{{ route('second', ['blogs', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Blog section End ================= -->

    <!-- ================= Cta section start ================= -->
    <section class="vl-cta">
      <div class="container">
        <div class="vl-cta-bg-1 vl-cta-bg-3 p-relative br-8" style="background-image: url(/img/cta/cta-bg-3.1.jpg);">
          <div class="row">
            <div class="col-lg-9">
              <div class="vl-cta-grid">
                <!-- cta icon box start -->
                <div class="vl-cta-icbox mb-30">
                  <div class="vl-cta-icbox-icon mr-16">
                    <span><img src="/img/icons/vl-cta-ph-3.1.svg" alt="" /></span>
                  </div>
                  <div class="vl-cta-icbox-content">
                    <h4 class="vl-cta-icbox-title pb-16">Gives us a Call</h4>
                    <a href="tel:1234567890">123-456-7890</a>
                  </div>
                </div>
                <!-- cta icon box end -->
                <!-- cta icon box start -->
                <div class="vl-cta-icbox mb-30">
                  <div class="vl-cta-icbox-icon mr-16">
                    <span><img src="/img/icons/vl-cta-mail-3.2.svg" alt="" /></span>
                  </div>
                  <div class="vl-cta-icbox-content">
                    <h4 class="vl-cta-icbox-title pb-16">Send me Mail</h4>
                    <a href="mailto:OTechItService.com">OTechItService.com</a>
                  </div>
                </div>
                <!-- cta icon box end -->
                <!-- cta icon box start -->
                <div class="vl-cta-icbox mb-30">
                  <div class="vl-cta-icbox-icon mr-16">
                    <span><img src="/img/icons/vl-cta-mail-3.3.svg" alt="" /></span>
                  </div>
                  <div class="vl-cta-icbox-content">
                    <h4 class="vl-cta-icbox-title pb-16">Contact Us</h4>
                    <a href="#">8708 Technology, USA</a>
                  </div>
                </div>
                <!-- cta icon box end -->
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-30">
              <div class="vl-hero-btn-3 fl-right">
                <a href="{{ route('second', ['pages', 'contact']) }}" class="vl-btn-3">CONTACT US<span><i class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Cta section End ================= -->
  </main>

  <!-- ================= Footer section start ================= -->
  <footer>
    <section class="vl-footer vl-gray-bg-2 pt-160">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="vl-footer-widget-1">
              <div class="vl-footer-logo">
                <a href="{{ route('any' , 'index') }}"><img src="/img/logo/vl-logo-3.2.png" alt="" /></a>
              </div>
              <div class="vl-footer-content vl-footer-content-3">
                <p class="pt-16 pb-32">
                  We foster a culture of teamwork & <br /> creative problem-solving to deliver <br /> exceptional results for our clients.
                </p>
              </div>
              <div class="vl-footer-social vl-footer-social-3">
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
          <div class="col-lg-2 col-md-6 mb-30">
            <div class="vl-footer-widget-2">
              <h3 class="vl-footer-widget-title vl-fs-20 mb-20">Quick Links</h3>
              <div class="vl-footer-menu vl-footer-menu-3">
                <ul>
                  <li>
                    <a href="{{ route('second', ['pages', 'about']) }}">About Us</a>
                  </li>
                  <li>
                    <a href="{{ route('second', ['services', 'service']) }}">Our Service</a>
                  </li>
                  <li>
                    <a href="{{ route('second', ['case-study', 'case-studies']) }}">Case Study</a>
                  </li>
                  <li>
                    <a href="{{ route('second', ['pages', 'testimonial']) }}">Testimonial</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 mb-30">
            <div class="vl-footer-widget-3 ml-40">
              <h3 class="vl-footer-widget-title vl-fs-20 mb-20">Our Service</h3>
              <div class="vl-footer-menu vl-footer-menu-3">
                <ul>
                  <li>
                    <a href="#">Cyber Security</a>
                  </li>
                  <li>
                    <a href="#">Network Analysis</a>
                  </li>
                  <li>
                    <a href="#">Data Recovery</a>
                  </li>
                  <li>
                    <a href="#">It Service</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-22">
            <div class="vl-footer-widget-4">
              <h3 class="vl-footer-widget-title vl-fs-20 mb-20">Instagram Post</h3>
              <div class="row gx-2">
                <div class="col-lg-4 col-md-4 col-4">
                  <div class="vl-footer-instapost p-relative z-index-1 fix mb-8">
                    <img class="w-100" src="/img/footer/vl-ft-post-3.1.png" alt="" />
                    <div class="vl-footer-instapost-icon">
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                  <div class="vl-footer-instapost p-relative z-index-1 fix mb-8">
                    <img class="w-100" src="/img/footer/vl-ft-post-3.2.png" alt="" />
                    <div class="vl-footer-instapost-icon">
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                  <div class="vl-footer-instapost p-relative z-index-1 fix mb-8">
                    <img class="w-100" src="/img/footer/vl-ft-post-3.3.png" alt="" />
                    <div class="vl-footer-instapost-icon">
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                  <div class="vl-footer-instapost p-relative z-index-1 fix mb-8">
                    <img class="w-100" src="/img/footer/vl-ft-post-3.4.png" alt="" />
                    <div class="vl-footer-instapost-icon">
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                  <div class="vl-footer-instapost p-relative z-index-1 fix mb-8">
                    <img class="w-100" src="/img/footer/vl-ft-post-3.5.png" alt="" />
                    <div class="vl-footer-instapost-icon">
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 col-md-4 col-4">
                  <div class="vl-footer-instapost p-relative z-index-1 fix mb-8">
                    <img class="w-100" src="/img/footer/vl-ft-post-3.6.png" alt="" />
                    <div class="vl-footer-instapost-icon">
                      <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="vl-footer-copyright-text vl-footer-copyright-text-3 text-center pb-32">
          <p class="m-0">Copyright &copy;2024 O-Tech. All Rights Reserved</p>
        </div>
      </div>
    </section>
  </footer>
  <!-- ================= Footer section End ================= -->

  @include('layouts.partials.progress-circle' , [ 'divClass' => 'progress-wrap3'])
@endsection
