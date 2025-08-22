@extends('layouts.landing', ['title' => 'Certifico || Courses'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-single pb-0">
    <div class="container">
      <div class="bg-primary-subtle rounded p-5 p-lg-6">
        <div class="row gy-4 gy-md-0 align-items-center justify-content-between">
          <div class="col-md-6 col-lg-6">
            <div class="tx-breadcrumb">
              <h4 class="tx-section-subtitle">Courses</h4>
              <h1 class="tx-section-heading tx-section-heading-lg">Building Resilient Networks</h1>
            </div>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="rounded fix p-relative">
              <div class="ratio ratio-4x3">
                <img src="/img/banner/a-businessman-and-businesswoman-outside-an-office.avif" alt="">
              </div>
              <div class="tx-hero-single-cta end-0">
                <a href="#course_section" class="btn btn-primary btn-icon-leading">
                  Get Started <i class="fa-regular fa-arrow-right fs-6 rotate-45"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="tx-hero-single-img">
        <div class="bg-overlay z-0"></div>
        <img src="/img/banner/a-businessman-and-businesswoman-outside-an-office.avif" alt=""
          class="img-cover z-n1">
      </div>
      <div class="tx-hero-single-cta">
        <a href="#course_section" class="btn btn-primary btn-icon-leading">
          Get Started <i class="fa-regular fa-arrow-right fs-6 rotate-45"></i>
        </a>
      </div>
      <div class="row justify-content-center tx-hero-single-caption">
        <div class="col-11 mt-auto" data-bs-theme="dark">
          <div class="tx-breadcrumb">
            <h1>Courses</h1>
            <p>Building Resilient Networks</p>
          </div>
        </div>
      </div> --}}
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Case Studies section start ================= -->
  <section id="course_section" class="tx-section pb-0">
    <div class="container">
      <h2 class="tx-section-title mb-5 animated">My Course</h2>
      <div class="row tx-scroll-md-x g-2 g-md-4 mb-6">

        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course01.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>



        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course02.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course03.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course04.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course05.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course06.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course07.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>

        <!-- single case studies -->
        <div class="col-8 col-lg-4 col-xl-3 animated">
          <a href="{{ route('second', ['course', 'introduction']) }}" class="tx-gallery-course">
            <div class="tx-gallery-course-item">
              <div class="tx-gallery-course-image ratio ratio-4x3">
                <img src="/img/course/course08.avif" alt="" />
              </div>
              <div class="tx-gallery-course-con">
                <h3 class="tx-gallery-course-title">
                  Certified Risk Proffesional - CRP<sup>&reg;</sup>
                </h3>
              </div>
              <div class="tx-gallery-course-icon">
                <span>Read More</span>
                <i class="fa-regular fa-arrow-right rotate-n45"></i>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- ================= Case Studies section End ================= -->
@endsection
