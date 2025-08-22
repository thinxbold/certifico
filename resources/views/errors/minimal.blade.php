<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>

  <link rel="shortcut icon" href="/img/icons/vl-fav-ic-1.1.svg">
  {{-- <link rel="stylesheet" href="/assets/css/theme.css"> --}}

  <!--===== CSS LINK =======-->
  @vite(['resources/scss/main.scss'])

  @yield('css')

</head>

<body @yield('body_attribute')>

  @include('layouts.partials.loader')
  @include('layouts.partials.header.navbar')

  <main>
    <section class="tx-error-sec tx-hero-section bg-gradient-light">
      <div class="tx-text-overlay">
        <span>@yield('code')</span>
      </div>
      <div class="container py-8">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <div class="tx-error-con">
              {{-- <div class="tx-error-thumb pb-48">
                <img class="col-4" src="/img/banner/vl-404.png" alt="" />
              </div> --}}
              <div class="tx-error-text mb-5">
                <h1>@yield('code')</h1>
                <h3>@yield('message')</h3>
                {{-- <p class="tx-text-para tx-fs-18 tx-lineheight-28 pb-30 m-0">
                  Sorry, the page you are looking for doesn't exist or has been moved. Here are some helpful links.
                </p> --}}
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
  </main>

  @include('layouts.partials.footer')

  @include('layouts.partials.progress-circle')

  @yield('scripts')

  @vite(['resources/js/main.js'])

  @stack('scripts')

</body>

</html>
