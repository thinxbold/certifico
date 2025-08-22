@extends('layouts.landing', ['title' => 'Certifico || Team'])

@section('content')
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light pb-5 py-lg-8 pt-xl-7 pt-xxl-8">
    <div class="container h-100">
      <div class="row g-3 h-100">
        <div class="col-xl-6 col-md-6 d-flex align-items-center">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Meet the Team</h4>
            <h1 class="tx-section-heading mb-3">Passionate Professionals Driving Excellence</h1>
            <p>We believe in having a talented team <br> that wants to deliver the best results for our clients.</p>
          </div>
        </div>
        <div class="col-xl-6 col-md-6 d-none d-md-block">
          <div class="tx-hero-img p-relative">
            <div class="tx-hero-shape-4">
              <div class="tx-shape-2">
                <img src="/img/banner/leadership2.avif" class="col-6 rounded shadow-lg z-index-1" alt="" />
              </div>
              <div class="tx-shape-3">
                <img src="/img/banner/leadership3.avif" class="col-5 mt-100 rounded shadow-lg z-index-11"
                  alt="" />
              </div>
            </div>
            <div class="tx-breadcrumb-fan">
              <div class="svg-object">
                @include('icons.fan-sm')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================ Section border start ================ -->
  <section class="tx-section-border">
    <div class="container">
      @include('icons.border-left')
    </div>
  </section>
  <!-- ================= Section border end ================= -->

  <!-- ================= Team section start ================= -->
  <section class="tx-team tx-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-4 animated">
          <h2 class="tx-section-title">Executive Team</h2>
        </div>
        <div class="col-xl-8">
          <div class="row g-3 g-xl-4 gy-md-5">
            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team01.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Herbert Harrison</a>
                    </h4>
                    <span>CEO & Founder</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team02.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Stella Boone</a>
                    </h4>
                    <span>Operations Manager</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team03.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Lydia Moss</a>
                    </h4>
                    <span>Head of Finance</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ================= Team section End ================= -->



  <!-- ================ Section border start ================ -->
  <section class="tx-section-border">
    <div class="container">
      @include('icons.border-left')
    </div>
  </section>
  <!-- ================= Section border end ================= -->

  <!-- ================= Team section start ================= -->
  <section class="tx-team tx-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-xl-4 animated">
          <h2 class="tx-section-title">Leadership Team</h2>
        </div>
        <div class="col-xl-8">
          <div class="row g-3 g-xl-4 gy-md-5">
            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team04.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Victor Ortiz</a>
                    </h4>
                    <span>VP of Operations</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team05.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Fannie Palmer</a>
                    </h4>
                    <span>VP of Marketing</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team06.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Marie Cross</a>
                    </h4>
                    <span>Head of Customer Success</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team07.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Michael Rowe</a>
                    </h4>
                    <span>Digital Marketing Manager</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team08.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Arthur Price</a>
                    </h4>
                    <span>Lead Digital Strategist</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

            <!-- single team start -->
            <div class="col-md-4 animated">
              <div class="tx-team-single p-relative fix">
                <div class="tx-team-single-image ratio ratio-1x1">
                  <img class="w-100" src="/img/team/team09.avif" alt="" />
                </div>
                <div class="tx-team-single-content">
                  <div class="d-block">
                    <h4 class="tx-team-single-title">
                      <a href="#">Caleb Burton</a>
                    </h4>
                    <span>Head of Search Engine Marketing</span>
                  </div>
                  <div class="tx-team-single-social">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- single team end -->

          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ================= Team section End ================= -->
@endsection
