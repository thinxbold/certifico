<!DOCTYPE html>
<html lang="en" @yield('html_attribute')>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ isset($title) ? $title : 'Certifico' }}</title>

  <link rel="shortcut icon" href="/img/icons/favicon.svg">
  {{-- <link rel="stylesheet" href="/assets/css/theme.css"> --}}

  <!--===== CSS LINK =======-->
  @vite(['resources/scss/main.scss'])

  @yield('css')

</head>

<body @yield('body_attribute')>

  @include('layouts.partials.loader')
  @include('layouts.partials.header.navbar')

  <main id="main" class="aos">
    @yield('content')
  </main>

  @include('layouts.partials.footer')

  @include('layouts.partials.progress-circle')

  @yield('scripts')

  @vite(['resources/js/function.js'])
  @vite(['resources/js/main.js'])

  @stack('scripts')

</body>

</html>
