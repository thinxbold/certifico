@extends('layouts.base', ['title' => 'O-Tech 2' , 'logo2' => true])

@section('header')
  @include('layouts.partials.loader' , [ 'loader2' => true])
  @include('layouts.partials.header.navbar2')
@endsection

@section('content')
  <main>
    <!-- ================= Banner section start ================= -->
    <section class="vl-hero-area p-relative fix z-index-1 pt-200 pb-70" style="background-image: url(/img/banner/vl-home-bg-2.png);">
      <div class="vl--shape d-none d-md-block">
        <img src="/img/icons/vl-cta-shape.svg" alt="" />
      </div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 mb-30">
            <div class="vl-hero-content p-relative z-index-1">
              <div class="vl-section-title-wrapper">
                <h4 class="vl-section-subtitle-2 fw-500">Top #1 It Service & Technology</h4>
                <h1 class="vl-section-heading vl-white pt-16">Future-Proof Your Business With Best Expert IT Solutions</h1>
                <p class="vl-section-description section-description3 pt-16 pb-28">
                  Empower your business with cutting technology solutions <br /> tailored to meet your unique needs from cloud computing.
                </p>
              </div>

              <div class="vl-hero-btn">
                <a href="{{ route('second', ['pages', 'contact']) }}" class="them-btn2 fix mr-16">Explore Solutions <span><i class="fa-regular fa-angle-right"></i></span></a>
                <a href="{{ route('second', ['pages', 'contact']) }}" class="theme-sec-btn2">Contact Us<span><i class="fa-regular fa-angle-right"></i></span></a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 mb-30 p-relative">
            <div class="vl-hero-half-circle">
              <img src="/img/shape/vl-half-cicle-2.1.svg" alt="" />
            </div>
            <div class="vl-hero-img--2 p-relative">
              <img src="/img/banner/vl-bnr-2.1.png" alt="" />
              <div class="vl-hero-banner-content-2">
                <h4 class="vl-hero-banner-content-2-text">Help You To Grow Your Business</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Banner section End ================= -->

    <!-- ================= About section start ================= -->
    <section class="vl-about-area pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-30">
            <div class="vl-about-imgs-2 p-relative mr-60 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
              <div class="vl-about-img--2">
                <img src="/img/about/vl-about-2.1.png" alt="" />
              </div>
              <div class="vl-about-img--2-1 d-none d-md-block">
                <img src="/img/about/vl-about-2.2.png" alt="" />
              </div>
              <div class="vl-about-imgs-2-check-box">
                <div class="vl-about-imgs-2-check-box-ic">
                  <span><i class="fa-regular fa-check"></i></span>
                </div>
                <div class="vl-about-imgs-2-check-box-text">
                  <p>
                    With 12+ years of experience<br />
                    helping the community.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-30">
            <div class="vl-about-content vl-home2-about aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
              <div class="vl-section-title-wrapper">
                <h4 class="vl-section-subtitle-black-border">About Us</h4>
                <h2 class="vl-section-title vl-black-theme-2 pt-16 pb-20">Redefining IT Services<br /> with Passion and Purpose</h2>
                <p class="vl-section-description-2 pb-32">
                  With a passion for solving complex challenges, we specialize in <br /> delivering tailored IT solutions that empower businesses thrive.
                </p>
              </div>

              <!-- progress start -->
              <div class="vl-progress-container mb-30">
                <div class="vl-progress-label">
                  <h4 class="vl-fs-20 vl-lineheight-20 pb-12 m-0">IT Consulting Service</h4>
                  <span class="vl-fs-20 vl-lineheight-20">85%</span>
                </div>
                <div class="vl-progress-bar">
                  <div class="vl-progress-bar-fill" data-percentage="85"></div>
                </div>

                <div class="vl-progress-label mt-20">
                  <h4 class="vl-fs-20 vl-lineheight-20 pb-12 m-0">Amazing Communication</h4>
                  <span class="vl-fs-20 vl-lineheight-20">95%</span>
                </div>
                <div class="vl-progress-bar">
                  <div class="vl-progress-bar-fill" data-percentage="95"></div>
                </div>
              </div>
              <!-- progress end -->

              <div class="vl-about-btn">
                <a href="{{ route('second', ['pages', 'about']) }}" class="them-btn2">See my experience<span><i class="fa-regular fa-angle-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= About section End ================= -->

    <!-- ================= Service section start ================= -->
    <section class="vl-service-area vl-gray-bg pt-100 pb-70">
      <div class="container">
        <div class="vl-services aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <div class="vl-section-title-wrapper mb-60">
            <h4 class="vl-section-subtitle-black-border">Our Service</h4>
            <h2 class="vl-section-title vl-black-theme-2 pt-16">Comprehensive IT Solutions <br /> for Every Need</h2>
          </div>
        </div>
        <div class="row">
          <!-- single service box start -->
          <div class="col-lg-7 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1000">
            <div class="vl-service-content vl-service-content-2">
              <div class="vl-service-icon vl-service-icon-2">
                <span><img src="/img/icons/vl-service-ic-2.1.svg" alt="" /></span>
              </div>
              <h2 class="vl-service-title pt-32"><a href="{{ route('second', ['services', 'single']) }}">IT Infrastructure Management</a></h2>
              <p class="pt-16 pb-24">
                Keep your business running with reliable and optimized IT infrastructure <br /> We provide end-to-end infrastructure management, from network design.
              </p>
              <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-angle-right"></i></span></a>
            </div>
          </div>
          <!-- single service box end -->

          <!-- single service box start -->
          <div class="col-lg-5 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1200">
            <div class="vl-service-content vl-service-content-2">
              <div class="vl-service-icon vl-service-icon-2">
                <span><img src="/img/icons/vl-service-ic-2.2.svg" alt="" /></span>
              </div>
              <h2 class="vl-service-title pt-32"><a href="{{ route('second', ['services', 'single']) }}">Software Development</a></h2>
              <p class="pt-16 pb-24">Transform your ideas into reality with our custom software development service whether you need.</p>
              <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-angle-right"></i></span></a>
            </div>
          </div>
          <!-- single service box end -->

          <!-- single service box start -->
          <div class="col-lg-5 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1400">
            <div class="vl-service-content vl-service-content-2">
              <div class="vl-service-icon vl-service-icon-2">
                <span><img src="/img/icons/vl-service-ic-2.3.svg" alt="" /></span>
              </div>
              <h2 class="vl-service-title pt-32"><a href="{{ route('second', ['services', 'single']) }}">Cybersecurity Services</a></h2>
              <p class="pt-16 pb-24">
                Protect your business from evolving cyber threats <br /> with our comprehensive cybersecurity solutions.
              </p>
              <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-angle-right"></i></span></a>
            </div>
          </div>
          <!-- single service box end -->

          <!-- single service box start -->
          <div class="col-lg-7 mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1600">
            <div class="vl-service-content vl-service-content-2">
              <div class="vl-service-icon vl-service-icon-2">
                <span><img src="/img/icons/vl-service-ic-2.4.svg" alt="" /></span>
              </div>
              <h2 class="vl-service-title pt-32"><a href="{{ route('second', ['services', 'single']) }}">IT Consulting Services</a></h2>
              <p class="pt-16 pb-24">
                Navigate the complexities of technology with expert guidance from our IT <br /> consultants. We help businesses strategize & implement the right solution.
              </p>
              <a href="{{ route('second', ['services', 'single']) }}" class="vl-readmore">Learn More <span><i class="fa-regular fa-angle-right"></i></span></a>
            </div>
          </div>
          <!-- single service box end -->
        </div>
      </div>
    </section>
    <!-- ================= Service section End ================= -->

    <!-- ================= Case Studies section start ================= -->
    <section class="vl-gallery3 p-relative z-index-1 pt-100 pb-100">
      <div class="container">
        <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-black-border">Case Studies</h4>
          <h2 class="vl-section-title vl-black-theme-2 pt-16">Proof of Excellence in Action</h2>
        </div>

        <div id="gallery2" class="owl-carousel owl-theme">
          <!-- single testimonial box start -->
          <div class="vl-gallery-testimonial-2 br-4 fix p-relative z-index-1">
            <div class="vl-gallery-testimonial-2-image">
              <img class="w-100" src="/img/studies/vl-studies-2.1.png" alt="" />
            </div>
            <div class="vl-gallery-testimonial-2-con">
              <h3 class="vl-gallery-testimonial-2-title"><a href="{{ route('second', ['case-study', 'single']) }}">Efficiency Managed IT Services</a></h3>
            </div>
            <div class="vl-gallery-poligon poligon2">
              <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
              <a href="{{ route('second', ['case-study', 'single']) }}"><span class="arow2"><i class="fa-regular fa-arrow-right"></i></span></a>
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
            <div class="vl-gallery-poligon poligon2">
              <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
              <a href="{{ route('second', ['case-study', 'single']) }}"><span class="arow2"><i class="fa-regular fa-arrow-right"></i></span></a>
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
            <div class="vl-gallery-poligon poligon2">
              <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
              <a href="{{ route('second', ['case-study', 'single']) }}"><span class="arow2"><i class="fa-regular fa-arrow-right"></i></span></a>
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
            <div class="vl-gallery-poligon poligon2">
              <h3><a href="{{ route('second', ['case-study', 'single']) }}">Read More</a></h3>
              <a href="{{ route('second', ['case-study', 'single']) }}"><span class="arow2"><i class="fa-regular fa-arrow-right"></i></span></a>
            </div>
          </div>
          <!-- single testimonial box end -->
        </div>
      </div>
    </section>
    <!-- ================= Case Studies section End ================= -->

    <!-- ================= Testimonial section start ================= -->
    <div class="vl-testimonial-section2 vl-theme-bg-2 pt-100 pb-100">
      <div class="container">
        <div class="vl-section-title-wrapper text-center mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
          <h4 class="vl-section-subtitle-white-border vl-white">Testimonial</h4>
          <h2 class="vl-section-title vl-black-theme-2 pt-16 vl-white">What Our Clients Say?</h2>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="vl-test-2-act">
              <!-- single testimonial -->
              <div class="vl-test-flex">
                <div class="vl-test-thumb">
                  <img src="/img/testimonial/vl-testimonial-2.1.png" alt="" />
                </div>
                <div class="vl-test-content">
                  <div class="vl-test-icons">
                    <ul>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                    </ul>
                  </div>
                  <p>“Our clients words speak volumes about impact of our services. We take pride in building strong best partnerships and delivering solutions that exceed expectations from seamless cloud migrations.”</p>
                  <div class="vl-test-aut">
                    <div class="vl-test-aut-content">
                      <h3>Donna Kiehn</h3>
                      <span>Businessman</span>
                    </div>
                    <div class="vl-test-aut-logo">
                      <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>

              <!-- single testimonial -->
              <div class="vl-test-flex">
                <div class="vl-test-thumb">
                  <img src="/img/testimonial/vl-testimonial-2.22.png" alt="" />
                </div>
                <div class="vl-test-content">
                  <div class="vl-test-icons">
                    <ul>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                    </ul>
                  </div>
                  <p>“Our clients words speak volumes about impact of our services. We take pride in building strong best partnerships and delivering solutions that exceed expectations from seamless cloud migrations.”</p>
                  <div class="vl-test-aut">
                    <div class="vl-test-aut-content">
                      <h3>Donna Kiehn</h3>
                      <span>Businessman</span>
                    </div>
                    <div class="vl-test-aut-logo">
                      <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>

              <!-- single testimonial -->
              <div class="vl-test-flex">
                <div class="vl-test-thumb">
                  <img src="/img/testimonial/vl-testimonial-2.1.png" alt="" />
                </div>
                <div class="vl-test-content">
                  <div class="vl-test-icons">
                    <ul>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                    </ul>
                  </div>
                  <p>“Our clients words speak volumes about impact of our services. We take pride in building strong best partnerships and delivering solutions that exceed expectations from seamless cloud migrations.”</p>
                  <div class="vl-test-aut">
                    <div class="vl-test-aut-content">
                      <h3>Donna Kiehn</h3>
                      <span>Businessman</span>
                    </div>
                    <div class="vl-test-aut-logo">
                      <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>

              <!-- single testimonial -->
              <div class="vl-test-flex">
                <div class="vl-test-thumb">
                  <img src="/img/testimonial/vl-testimonial-2.22.png" alt="" />
                </div>
                <div class="vl-test-content">
                  <div class="vl-test-icons">
                    <ul>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa-solid fa-star"></i></a>
                      </li>
                    </ul>
                  </div>
                  <p>“Our clients words speak volumes about impact of our services. We take pride in building strong best partnerships and delivering solutions that exceed expectations from seamless cloud migrations.”</p>
                  <div class="vl-test-aut">
                    <div class="vl-test-aut-content">
                      <h3>Donna Kiehn</h3>
                      <span>Businessman</span>
                    </div>
                    <div class="vl-test-aut-logo">
                      <img src="/img/brand/vl-testimonial-brand-2.1.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================= Team section start ================= -->
    <section class="vl-teamm p-relative z-index-1 pt-100 pb-100">
      <div class="container p-relative">
        <div class="row">
          <div class="col-lg-8">
            <div class="vl-section-title-wrapper mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
              <h4 class="vl-section-subtitle-black-border">Our Team</h4>
              <h2 class="vl-section-title vl-black-theme-2 pt-16">Dedicated Professionals,<br /> Proven Results</h2>
            </div>
          </div>

          <div class="col-lg-4"></div>

          <div id="teamm2" class="owl-carousel owl-theme">
            <!-- single team start -->
            <div class="vl-team-single text-center p-relative fix">
              <div class="vl-team-single-image p-relative">
                <div class="vl-team-single-image-shape">
                  <img src="/img/shape/vl-team-shape.svg" alt="" />
                </div>
                <img class="w-100" src="/img/team/vl-team-2.1.png" alt="" />
                <div class="vl-team-single-image-social">
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
              <div class="vl-team-single-content mt-20">
                <h4 class="vl-team-single-title pb-16"><a href="{{ route('second', ['pages', 'team']) }}">Kendra Cremin</a></h4>
                <span>Network Engineer</span>
              </div>
            </div>
            <!-- single team end -->
            <!-- single team start -->
            <div class="vl-team-single text-center p-relative fix">
              <div class="vl-team-single-image p-relative">
                <div class="vl-team-single-image-shape">
                  <img src="/img/shape/vl-team-shape.svg" alt="" />
                </div>
                <img class="w-100" src="/img/team/vl-team-2.2.png" alt="" />
                <div class="vl-team-single-image-social">
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
              <div class="vl-team-single-content mt-20">
                <h4 class="vl-team-single-title pb-16"><a href="{{ route('second', ['pages', 'team']) }}">Dennis Jacobson</a></h4>
                <span>CEO & Founder</span>
              </div>
            </div>
            <!-- single team end -->
            <!-- single team start -->
            <div class="vl-team-single text-center p-relative fix">
              <div class="vl-team-single-image p-relative">
                <div class="vl-team-single-image-shape">
                  <img src="/img/shape/vl-team-shape.svg" alt="" />
                </div>
                <img class="w-100" src="/img/team/vl-team-2.3.png" alt="" />
                <div class="vl-team-single-image-social">
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
              <div class="vl-team-single-content mt-20">
                <h4 class="vl-team-single-title pb-16"><a href="{{ route('second', ['pages', 'team']) }}">Patricia Wilkinson</a></h4>
                <span>Network Engineer</span>
              </div>
            </div>
            <!-- single team end -->
            <!-- single team start -->
            <div class="vl-team-single text-center p-relative fix">
              <div class="vl-team-single-image p-relative">
                <div class="vl-team-single-image-shape">
                  <img src="/img/shape/vl-team-shape.svg" alt="" />
                </div>
                <img class="w-100" src="/img/team/vl-team-2.1.png" alt="" />
                <div class="vl-team-single-image-social">
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
              <div class="vl-team-single-content mt-20">
                <h4 class="vl-team-single-title pb-16"><a href="{{ route('second', ['pages', 'team']) }}">Kendra Cremin</a></h4>
                <span>Network Engineer</span>
              </div>
            </div>
            <!-- single team end -->
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Team section End ================= -->

    <!-- ================= Contact section start ================= -->
    <section class="vl-contact vl-gray-bg p-relative z-index-1 pt-100 pb-70">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="vl-contact-box br-4 vl-white-bg mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration="900">
              <div class="vl-contact-box-content">
                <h3 class="vl-contact-box-title">Send us a Message</h3>
                <p class="off-w pt-20 pb-32 m-0">
                  Have questions or need assistance? We're here to help! Whether <br /> you're exploring solutions, looking for a consultation, or need.
                </p>
              </div>
              <div class="vl-contact-box-form-2">
                <form action="#">
                  <div class="row">
                    <div class="col-lg-6 mb-20">
                      <input type="text" name="name" placeholder="First Name" />
                    </div>
                    <div class="col-lg-6 mb-20">
                      <input type="text" name="name" placeholder="Last Name" />
                    </div>
                    <div class="col-lg-6 mb-20">
                      <input type="email" name="email" placeholder="Email" />
                    </div>
                    <div class="col-lg-6 mb-20">
                      <input type="tel" name="phone" placeholder="Phone" />
                    </div>
                    <div class="col-lg-12 mb-20">
                      <input type="text" name="subject" placeholder="Subject" />
                    </div>
                    <div class="col-lg-12 mb-20">
                      <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-lg-12 mb-20">
                      <div class="fl-right">
                        <button class="them-btn2">Send Now <span><i class="fa-regular fa-angle-right"></i></span></button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="vl-contact-wrap vl-contact-wrap-2 ml-80 mb-10 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1100">
              <div class="vl-section-title-wrapper mb-36">
                <h4 class="vl-section-subtitle-black-border">Get in Touch with Us</h4>
                <h2 class="vl-section-title vl-black-theme-2 pt-16">Have Questions? We’ve Got Answers</h2>
              </div>
              <div class="vl-contact-wrap-icbox">
                <!-- contact icon box start -->
                <div class="vl-icon-box br-4 mb-20">
                  <div class="vl-icon-box-icon mr-16">
                    <span><img src="/img/icons/vl-call-2.1.svg" alt="" /></span>
                  </div>
                  <div class="vl-icon-box-content">
                    <h5 class="vl-icon-box-title pb-14">Gives us a Call</h5>
                    <a href="tel:1234567890">123-456-7890</a>
                  </div>
                </div>
                <!-- contact icon box end -->

                <!-- contact icon box start -->
                <div class="vl-icon-box br-4 mb-20">
                  <div class="vl-icon-box-icon mr-16">
                    <span><img src="/img/icons/vl-mail-2.2.svg" alt="" /></span>
                  </div>
                  <div class="vl-icon-box-content">
                    <h5 class="vl-icon-box-title pb-14">Send me Mail</h5>
                    <a href="mailto:OTechService.com">O-Tech It Service.com</a>
                  </div>
                </div>
                <!-- contact icon box end -->

                <!-- contact icon box start -->
                <div class="vl-icon-box br-4 mb-20">
                  <div class="vl-icon-box-icon mr-16">
                    <span><img src="/img/icons/vl-map-2.3.svg" alt="" /></span>
                  </div>
                  <div class="vl-icon-box-content">
                    <h5 class="vl-icon-box-title pb-14">Contact Us</h5>
                    <a href="#">8708 Technology, USA</a>
                  </div>
                </div>
                <!-- contact icon box end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Contact section End ================= -->

    <!-- ================= Blog section start ================= -->
    <section class="vl-blog pt-100 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="vl-blog-content-2 mb-30 aos-init aos-animate" data-aos="fade-right" data-aos-duration=" 900">
              <div class="vl-section-title-wrapper">
                <h4 class="vl-section-subtitle-black-border">Our Recent Blog Post</h4>
                <h2 class="vl-section-title vl-black-theme-2 pt-16 pb-20">Stay Informed with Our Recent Posts</h2>
                <p class="vl-section-description-2 pb-32">
                  Our expert team works closely with you to understand <br /> your unique challenges and design strategies that<br /> propel your business forward into the future.
                </p>
              </div>
              <div class="vl-blog-btn">
                <a href="{{ route('second', ['blogs', 'blog']) }}" class="them-btn2">read more blog <span><i class="fa-regular fa-angle-right"></i></span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="vl-single-blog ml-60">
              <!-- single blog item -->
              <div class="vl-single-blog-item vl-blg2 vl-gray-bg mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1100">
                <div class="row align-items-center">
                  <div class="col-lg-5">
                    <div class="vl-single-blog-img fix br-8">
                      <a href="{{ route('second', ['blogs', 'single']) }}"><img class="br-8 w-100" src="/img/blog/vl-blog-1.1.png" alt="" /></a>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="vl-single-blog-content vl-single-blog-content-2">
                      <h3 class="vl-single-blog-title vl-black-theme-2"><a href="{{ route('second', ['blogs', 'single']) }}">Your Trusted Partner in <br /> Technology Transformation</a></h3>
                      <p class="vl-single-blog-desc pt-10 pb-24">
                        As your trusted partner, we take <br /> the time understand your business objectives and challenges.
                      </p>
                      <a href="{{ route('second', ['blogs', 'single']) }}" class="vl-readmore">Read More <span class="rot-minus"><i class="fa-regular fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single blog end -->
              <!-- single blog item -->
              <div class="vl-single-blog-item vl-blg2 vl-gray-bg mb-30 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1300">
                <div class="row align-items-center">
                  <div class="col-lg-5">
                    <div class="vl-single-blog-img fix br-8">
                      <a href="{{ route('second', ['blogs', 'single']) }}"><img class="br-8 w-100" src="/img/blog/vl-blog-1.2.png" alt="" /></a>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="vl-single-blog-content vl-single-blog-content-2">
                      <h3 class="vl-single-blog-title vl-black-theme-2"><a href="{{ route('second', ['blogs', 'single']) }}">Driving Success Through <br /> Innovation and Collaboration</a></h3>
                      <p class="vl-single-blog-desc pt-10 pb-24">
                        We foster a culture of teamwork & <br /> creative problem-solving to deliver exceptional results for our clients.
                      </p>
                      <a href="{{ route('second', ['blogs', 'single']) }}" class="vl-readmore">Read More <span class="rot-minus"><i class="fa-regular fa-angle-right"></i></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- single blog end -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================= Blog section End ================= -->

    <!-- ================= Cta section start ================= -->
    <section class="vl-cta">
      <div class="container">
        <div class="vl-cta-bg-1 vl-cta-bg-2 p-relative fix br-8">
          <div class="vl-cta-shape-2">
            <img src="/img/shape/vl-cta-shape-2.1.svg" alt="" />
          </div>
          <div class="vl-cta-shape">
            <img src="/img/icons/vl-cta-shape.svg" alt="" />
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="vl-cta-wrapper mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="900">
                <h2 class="vl-cta-wrapper-title vl-white pb-32">Transform Your Business Contact Us Today</h2>
                <div class="vl-cta-btn">
                  <a href="{{ route('second', ['blogs', 'blog']) }}" class="them-btn2">Start Your Journey<span><i class="fa-regular fa-angle-right"></i></span></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="vl-cta-img aos-init aos-animate" data-aos="fade-left" data-aos-duration="900">
                <img src="/img/cta/vl-cta-1.1.png" alt="" />
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
    <section class="vl-footer vl-gray-bg pt-240">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="vl-footer-widget-1">
              <div class="vl-footer-logo">
                <a href="{{ route('any' , 'index') }}"><img src="/img/logo/vl-logo-2.2.png" alt="" /></a>
              </div>
              <div class="vl-footer-content vl-footer-content-2">
                <p class="pt-16 pb-32">
                  We foster a culture of teamwork & <br /> creative problem-solving to deliver <br /> exceptional results for our clients.
                </p>
              </div>
              <div class="vl-footer-social vl-footer-social-2">
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
              <h3 class="vl-footer-widget-title vl-fs-20 vl-black-theme-2 mb-20">Quick Links</h3>
              <div class="vl-footer-menu vl-footer-menu-2">
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
              <h3 class="vl-footer-widget-title vl-fs-20 vl-black-theme-2 mb-20">Our Service</h3>
              <div class="vl-footer-menu vl-footer-menu-2">
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
          <div class="col-lg-4 col-md-6 mb-30">
            <div class="vl-footer-widget-4">
              <h3 class="vl-footer-widget-title vl-fs-20 vl-black-theme-2 mb-20">Newsletter</h3>
              <p class="black">
                Subscribe us & receive our <br /> latest news & articles
              </p>

              <div class="vl-footer-newsletter vl-footer-newsletter-2">
                <form action="#">
                  <input type="email" name="email" id="email" placeholder="Email Address.." />
                  <div class="vl-footer-newsletter-btn-2 mt-16">
                    <button class="w-100 them-btn2 btn-dot">Subscribe<span><i class="fa-regular fa-angle-right"></i></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="vl-footer-copyright-text vl-footer-copyright-text-2 text-center">
          <p class="m-0">Copyright &copy;2024 O-Tech. All Rights Reserved</p>
        </div>
      </div>
    </section>
  </footer>
  <!-- ================= Footer section End ================= -->

  @include('layouts.partials.progress-circle' , [ 'divClass' => 'progress-wrap2'])
@endsection
