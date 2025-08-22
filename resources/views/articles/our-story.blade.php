@extends('layouts.landing', ['title' => 'Certifico || Our Story'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-md-6 mb-30">
          <div class="tx-breadcrumb">
            <h1 class="tx-section-heading">Our Story</h1>
            <div class="tx-breadcrumb-list">
              <span><a href="{{ route('any', 'index') }}">Home</a></span>
              <span class="active"><a href="#">Article</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  @include('layouts.partials.section-border-center')

  <!-- ================= Blog section start ================= -->
  <section class="tx-section">
    <div class="container">
      <div class="row g-4">
        <!-- single blog item -->
        <div class="col-md-6 col-lg-4 animated">
          <div class="tx-single-blog-item">
            <div class="card rounded-0">
              <a href="{{ route('second', ['articles', 'single']) }}" class="stretched-link">
                <div class="tx-single-blog-img ratio ratio-16x9 fix">
                  <img src="/img/article/busy-traffic-trail-in-city.avif" alt="" />
                </div>
              </a>
              <div class="card-body">
                <div class="tx-single-blog-meta">
                  <!-- single metabox -->
                  <div class="tx-single-blog-meta-box">
                    <div class="tx-single-blog-meta-box-content">
                      10 May 2025
                    </div>
                  </div>
                </div>
                <div class="tx-single-blog-content">
                  <h3 class="tx-single-blog-title">Your Trusted Partner in Technology Transformation</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- single blog item -->
        <div class="col-md-6 col-lg-4 animated">
          <div class="tx-single-blog-item">
            <div class="card rounded-0">
              <a href="{{ route('second', ['articles', 'single']) }}" class="stretched-link">
                <div class="tx-single-blog-img ratio ratio-16x9 fix">
                  <img src="/img/blog/vl-blog-4.2.png" alt="" />
                </div>
              </a>
              <div class="card-body">
                <div class="tx-single-blog-meta">
                  <!-- single metabox -->
                  <div class="tx-single-blog-meta-box">
                    <div class="tx-single-blog-meta-box-content">
                      15 May 2025
                    </div>
                  </div>
                </div>
                <div class="tx-single-blog-content">
                  <h3 class="tx-single-blog-title">The Latest in Tech: News, Tips, and Insights</h3>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- single blog item -->
        <div class="col-md-6 col-lg-4 animated">
          <div class="tx-single-blog-item">
            <div class="card rounded-0">
              <a href="{{ route('second', ['articles', 'single']) }}" class="stretched-link">
                <div class="tx-single-blog-img ratio ratio-16x9 fix">
                  <img src="/img/blog/vl-blog-4.3.png" alt="" />
                </div>
              </a>
              <div class="card-body">
                <div class="tx-single-blog-meta">
                  <!-- single metabox -->
                  <div class="tx-single-blog-meta-box">
                    <div class="tx-single-blog-meta-box-content">
                      20 May 2025
                    </div>
                  </div>
                </div>
                <div class="tx-single-blog-content">
                  <h3 class="tx-single-blog-title">Your Go-To Resource for IT Insights and
                    Solutions</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row pt-5">
        <div class="col-auto mx-auto">
          <button class="btn btn-dark">Load More</button>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Blog section End ================= -->
@endsection
