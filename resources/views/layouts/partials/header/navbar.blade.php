<!-- ================= Header section start ================= -->
<header>
  <div id="tx-header-sticky" class="tx-header-area tx-transparent-header">
    <div class="container tx-header px-lg-3">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-auto col-md-6 col-6">
          <div class="tx-logo">
            <a href="{{ route('any', 'index') }}"><img src="/img/logo/logo.svg" alt="" /></a>
          </div>
        </div>
        <div class="col-lg-auto d-none d-xl-block">
          <div class="tx-main-menu text-center">
            <nav class="tx-mobile-menu-active">
              <ul>
                <li class="nav_link_parent">
                  <a href="{{ route('any', 'index') }}"><span>Home</span></a>
                </li>

                {{-- <li class="has-dropdown">
                  <a href="#">Services <span><i class="fa-regular fa-angle-down"></i></span></a>
                  <ul class="sub-menu">
                    <li>
                      <a href="{{ route('second', ['services', 'sertifikasi-bnsp']) }}">Sertifikasi BNSP</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'sertifikasi-internasional']) }}">Sertifikasi
                        Internasional</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'sertifikasi-iso']) }}">Sertifikasi ISO</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'corporate-training']) }}">Corporate Training</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'corporate-certification']) }}">Corporate
                        Certification</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['services', 'all']) }}" class="d-flex btn-icon-leading">View
                        All
                        Services <i class="fa-regular fa-arrow-right ms-auto"></i></a>
                    </li>
                  </ul>
                </li> --}}

                <li class="has-dropdown megamenu nav_link_parent">
                  <a href="#"><span>Services</span> <i class="fa-regular fa-angle-down"></i></a>
                  <ul class="sub-menu first row justify-content-xl-between gx-0 gx-xl-3 gx-xxl-4">

                    <li class="col-xl-auto block-menu">
                      <a href="{{ route('second', ['services', 'sertifikasi-bnsp']) }}" class="nav-link-heading">
                        Sertifikasi BNSP
                      </a>
                      <ul class="sub-menu child-menu">
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-bnsp', 'cra-certified-risk-associate']) }}">
                            CRA<sup>&reg;</sup> Certified Risk Associate
                          </a>
                        </li>
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-bnsp', 'crp-certified-risk-professional']) }}">
                            CRP<sup>&reg;</sup> Certified Risk Proffesional
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="col-xl-auto block-menu">
                      <a href="{{ route('second', ['services', 'sertifikasi-internasional']) }}"
                        class="nav-link-heading">
                        Sertifikasi Internasional
                      </a>
                      <ul class="sub-menu child-menu">
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-internasional', 'ceip-certified-esg-investing-professional']) }}">CEIP<sup>&reg;</sup>
                            Certified ESG Investing Professional</a>
                        </li>
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-internasional', 'cgrcs-certified-governance-risk-compliance-specialist']) }}">
                            CGRCS<sup>&reg;</sup> Certified Governance Risk Compliance Specialist
                          </a>
                        </li>
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-internasional', 'cbcmp-certified-business-continuity-management-professional']) }}">
                            CBCMP<sup>&reg;</sup> Certified Business Continuity Management Professional
                          </a>
                        </li>
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-internasional', 'crme-certified-risk-modeling-expert']) }}">
                            CRME<sup>&reg;</sup> Certified Risk Modeling Expert
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="col-xl-auto block-menu">
                      <a href="{{ route('second', ['services', 'sertifikasi-iso']) }}" class="nav-link-heading">
                        Sertifikasi ISO
                      </a>
                      <ul class="sub-menu child-menu">
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-22301-2019']) }}">
                            ISO 22301:2019
                          </a>
                        </li>
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-9001-2015']) }}">
                            ISO 9001:2015
                          </a>
                        </li>
                        <li>
                          <a class="nav_link_child"
                            href="{{ route('third', ['services', 'sertifikasi-iso', 'iso-31000-2018']) }}">
                            ISO 31000:2018
                          </a>
                        </li>
                      </ul>
                    </li>

                    <li class="col-xl-auto block-menu">
                      <a href="{{ route('second', ['services', 'corporate-training']) }}"
                        class="nav-link-heading">Corporate Training</a>
                      <a href="{{ route('second', ['services', 'corporate-certification']) }}"
                        class="nav-link-heading">Corporate Certification</a>
                    </li>

                    <div class="col-xl-auto block-cta d-none d-xl-block">
                      <div class="p-relative z-n1 pe-4">
                        <div class="ratio ratio-1x1 ratio-xxl-4x3">
                          <img src="/img/icons/folder-3d.avif" class="rounded" alt="">
                        </div>
                        <h5>Explore All Service</h5>
                      </div>
                      <a href="{{ route('second', ['services', 'all']) }}" class="btn btn-dark mt-n5 me-2 "><i
                          class="fa-regular fa-arrow-right"></i></a>
                    </div>

                  </ul>
                </li>

                <li class="nav_link_parent">
                  <a href="{{ route('second', ['course', 'courses']) }}"><span>Courses</span></a>
                </li>

                <li>
                  <a href="{{ route('second', ['articles', 'our-story']) }}"><span>Article</span></a>
                </li>

                <li class="has-dropdown nav_link_parent">
                  <a href="#"><span>About us</span> <i class="fa-regular fa-angle-down"></i></a>
                  <ul class="sub-menu">
                    <li>
                      <a href="{{ route('second', ['pages', 'about']) }}">Company Overview</a>
                    </li>
                    <li>
                      <a href="{{ route('second', ['pages', 'team']) }}">Team</a>
                    <li>
                      <a href="#">Competencies</a>
                    </li>
                </li>
                <li>
                  <a href="{{ route('second', ['pages', 'faq']) }}">Faq</a>
                </li>
              </ul>
              </li>

              <li class="nav_link_parent">
                <a href="{{ route('second', ['pages', 'contact']) }}"><span>Contact</span></a>
              </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-lg-auto col-md-6 col-6">
          <a href="{{ route('second', ['pages', 'contact']) }}"
            class="btn btn-cta btn-icon-leading btn-link ps-0 d-none d-xl-inline-flex">
            <span><i class="fa-regular fa-lock"></i></span>Sign Up
          </a>
          <a href="{{ route('second', ['pages', 'contact']) }}"
            class="btn btn-dark btn-cta btn-icon-leading arrow-right d-none d-xl-inline-flex">Login</a>
          <div class="tx-header-action-item d-block d-xl-none">
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
<div class="tx-offcanvas tx-offcanvas-bg-1">
  <div class="tx-offcanvas-wrapper">
    <div class="tx-offcanvas-header d-flex justify-content-between align-items-center">
      <div class="tx-offcanvas-close ms-auto">
        <button class="tx-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
      </div>
    </div>

    <div class="tx-offcanvas-menu d-xl-none mb-40">
      <nav></nav>
    </div>

    <div class="tx-offcanvas-btnm mb-30">
      <a href="{{ route('second', ['pages', 'contact']) }}" class="btn btn-cta btn-icon-leading ps-0">
        <span><i class="fa-regular fa-lock"></i></span>Sign Up
      </a>
      <a href="{{ route('second', ['pages', 'contact']) }}"
        class="btn btn-dark btn-cta btn-icon-leading arrow-right">Login</a>
    </div>
  </div>
</div>
<div class="tx-offcanvas-overlay"></div>
<!-- offcanvas menu end -->
<!-- ================= Header section End ================= -->
