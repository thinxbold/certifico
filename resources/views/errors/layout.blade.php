@extends('layouts.landing', ['title' => '@yield('title')'])

@section('content')
  <!-- ================= Error section start ================= -->
  <section class="tx-error-sec tx-hero-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <div class="tx-error-con">
            <div class="tx-error-thumb pb-48">
              <img class="col-4" src="/img/banner/vl-404.png" alt="" />
            </div>
            <div class="tx-error-text">
              <h3 class="tx-fs-40 tx-lineheight-40 tx-text-cmn-blck pb-20 m-0">@yield('message')</h3>
              <p class="tx-text-para tx-fs-18 tx-lineheight-28 pb-30 m-0">
                Sorry, the page you are looking for doesn't exist or has been moved. Here are some helpful links.
              </p>
            </div>

            <div class="tx-error-btn">
              <div class="tx-herobtn tx-aboutbtn tx-upper">
                <a href="{{ route('any', 'index') }}" class="theme-btn theme-btn2">Back To Home <span><i
                      class="fa-regular fa-arrow-right"></i></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Error section End ================= -->
@endsection
