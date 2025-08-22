<!-- ================= Header section start ================= -->
<header>
  <div id="tx-header-sticky" class="tx-header-area tx-transparent-header tx-transparent-header-4">
    <div class="container tx-header-bg-4">
      <div class="row align-items-center">
        <div class="col-lg-3 col-md-6 col-6">
          <div class="tx-logo">
            <a href="{{ route('any', 'index') }}"><img src="/img/logo/tx-logo-1.1.png" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-6 d-none d-lg-block">
          <div class="tx-main-menu tx-main-menu-2 text-center">
            <nav class="tx-mobile-menu-active">
              <ul>
                <li class="has-dropdown">
                  <a href="#">Home <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <div class="tx-mega-menu">
                    <div class="tx-home-menu">
                      <div class="row gx-4 row-cols-1 row-cols-lg-4">
                        <div class="col mb-25">
                          <div class="tx-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/tx-demo-1.1.png" alt="" />
                            <div class="tx-home-btn">
                              <div class="tx-hero-btn2">
                                <a href="{{ route('any', 'index') }}" target="_blank" class="them-btn2">Multi
                                  Page<span><i class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                              <div class="tx-hero-btn2 mt-20">
                                <a href="{{ route('second', ['single', 'index-1']) }}" target="_blank"
                                  class="them-btn2">Single Page<span><i
                                      class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-25">
                          <div class="tx-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/tx-demo-1.2.png" alt="" />
                            <div class="tx-home-btn">
                              <div class="tx-hero-btn2">
                                <a href="{{ route('second', ['demo', 'index2']) }}" target="_blank"
                                  class="them-btn2">Multi Page<span><i class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                              <div class="tx-hero-btn2 mt-20">
                                <a href="{{ route('second', ['single', 'index-2']) }}" target="_blank"
                                  class="them-btn2">Single Page<span><i
                                      class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-25">
                          <div class="tx-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/tx-demo-1.3.png" alt="" />
                            <div class="tx-home-btn">
                              <div class="tx-hero-btn2">
                                <a href="{{ route('second', ['demo', 'index3']) }}" target="_blank"
                                  class="them-btn2">Multi Page<span><i class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                              <div class="tx-hero-btn2 mt-20">
                                <a href="{{ route('second', ['single', 'index-3']) }}" target="_blank"
                                  class="them-btn2">Single Page<span><i
                                      class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-25">
                          <div class="tx-home-thumb fix p-relative z-index-1">
                            <img class="w-100" src="/img/demo/tx-demo-1.4.png" alt="" />
                            <div class="tx-home-btn">
                              <div class="tx-hero-btn2">
                                <a href="{{ route('second', ['demo', 'index4']) }}" target="_blank"
                                  class="them-btn2">Multi Page<span><i class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                              <div class="tx-hero-btn2 mt-20">
                                <a href="{{ route('second', ['single', 'index-4']) }}" target="_blank"
                                  class="them-btn2">Single Page<span><i
                                      class="fa-regular fa-angle-right"></i></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <a href="{{ route('second', ['pages', 'about']) }}">About us</a>
                </li>
                <li class="has-dropdown">
                  <a href="#">Services <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-2">
                    <li>
                      <a href="{{ route('second', ['services', 'service']) }}">Services</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'left']) }}">Service Left</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'right']) }}">Service Right</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'single']) }}">Service Single</a>
                    </li>
                  </ul>
                </li>

                <li class="has-dropdown">
                  <a href="#">Pages <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-2">
                    <li>
                      <a href="{{ route('second', ['pages', 'team']) }}">Team</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', 'pricing-plan']) }}">Pricing Plan</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', 'faq']) }}">Faq</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', 'contact']) }}">Contact</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', '404']) }}">404</a>
                    </li>
                  </ul>
                </li>

                <li class="has-dropdown">
                  <a href="#">Case Studies <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-2">
                    <li>
                      <a href="{{ route('second', ['case-study', 'case-studies']) }}">Case Studies</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['case-study', 'left']) }}">Case Studies Left</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['case-study', 'right']) }}">Case Studies Right</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['case-study', 'single']) }}">Case Studies Single</a>
                    </li>
                  </ul>
                </li>

                <li class="has-dropdown">
                  <a href="#">Blog <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu sub-menu-2">
                    <li>
                      <a href="{{ route('second', ['blogs', 'blog']) }}">Blog</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'left']) }}">Blog Left</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'right']) }}">Blog Right</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'single']) }}">Blog Single</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['blogs', 'sidebar']) }}">Blog Standred</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-6">
          <div class="tx-hero-btn2 d-none d-lg-block text-lg-end">
            <a href="{{ route('second', ['pages', 'contact']) }}" class="them-btn2">get started <span><i
                  class="fa-regular fa-angle-right"></i></span></a>
          </div>

          <div class="tx-header-action-item d-block d-lg-none">
            <button type="button" class="tx-offcanvas-toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                <rect x="10" width="20" height="2" fill="currentColor"></rect>
                <rect x="5" y="7" width="25" height="2" fill="currentColor"></rect>
                <rect x="10" y="14" width="20" height="2" fill="currentColor"></rect>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- offcanvas menu start -->
<div class="tx-offcanvas">
  <div class="tx-offcanvas-wrapper">
    <div class="tx-offcanvas-header d-flex justify-content-between align-items-center mb-50">
      <div class="tx-offcanvas-logo">
        <a href="{{ route('any', 'index') }}"><img src="/img/logo/tx-logo-2.2.png" alt="" /></a>
      </div>
      <div class="tx-offcanvas-close">
        <button class="tx-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
      </div>
    </div>

    <div class="tx-offcanvas-menu tx-offcanvas-menu-2 d-lg-none mb-40">
      <nav></nav>
    </div>

    <div class="tx-offcanvas-btnm text-center mb-30">
      <a href="#" class="them-btn2 w-100">get started <span><i
            class="fa-regular fa-angle-right"></i></span></a>
    </div>

    <div class="tx-offcanvas-info mb-30">
      <h3 class="tx-offcanvas-sm-title pb-15">Contact Us</h3>

      <div class="tx-offcanvas-info-box mb-15">
        <div class="tx-offcanvas-info-box-icon">
          <span><img src="/img/icons/offcanvas-ph-2.1.svg" alt="" /></span>
        </div>
        <div class="tx-offcanvas-info-box-text">
          <span><a href="tel:5799546476">+57 9954 6476</a></span>
        </div>
      </div>

      <div class="tx-offcanvas-info-box mb-15">
        <div class="tx-offcanvas-info-box-icon">
          <span><img src="/img/icons/offcanvas-mail-2.1.svg" alt="" /></span>
        </div>
        <div class="tx-offcanvas-info-box-text">
          <span><a href="mailto:OTechItService.com">OTech It Service.com</a></span>
        </div>
      </div>

      <div class="tx-offcanvas-info-box mb-15">
        <div class="tx-offcanvas-info-box-icon">
          <span><img src="/img/icons/offcanvas-lo-2.1.svg" alt="" /></span>
        </div>
        <div class="tx-offcanvas-info-box-text">
          <span><a href="mailto:OTechItService.com">8708 Technology, USA</a></span>
        </div>
      </div>
    </div>

    <div class="tx-offcanvas-social mb-40">
      <h3 class="tx-offcanvas-sm-title mb-15">Follow Us</h3>
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </div>
</div>
<div class="tx-offcanvas-overlay"></div>
<!-- offcanvas menu end -->
<!-- ================= Header section End ================= -->
