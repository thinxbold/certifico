<?php $__env->startSection('content'); ?>
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section pb-md-4 pb-lg-0 pt-lg-8"
    style="background-image: url(/img/banner/grainy-gradient-hero.webp); background-position: center bottom">
    <div class="container h-100">
      <div class="row g-3 h-100">
        <div class="col-xl-6 col-md-6 d-flex align-items-center">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Who We Are</h4>
            <h1 class="tx-section-heading">Contributing to Agile, Resilient Businesses</h1>
          </div>
        </div>
        <div class="col-xl-6 col-md-6">
          <div class="tx-hero-img p-relative">
            <div class="tx-hero-shape-4">
              <div class="tx-shape-2">
                <img src="/img/icons/bulb-puzzle-3d.webp" class="col-4 col-md-5 z-index-1" alt="" />
              </div>
              <div class="tx-shape-3">
                <img src="/img/icons/chart-folder-3d.webp" class="col-4 col-md-5 z-index-11" alt="" />
              </div>
            </div>
            <div class="tx-breadcrumb-fan">
              <div class="svg-object">
                <?php echo $__env->make('icons.fan-sm', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <?php echo $__env->make('layouts.partials.section-border-center', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- ================= About section start ================= -->
  <section id="about" class="tx-section pb-0">
    <div class="container">
      <div class="row justify-content-between align-items-xl-center g-3 g-xl-4 gy-5">
        <div class="col-lg-4 animated_left">
          <div class="ratio ratio-21x9 ratio-lg-3x4 ratio-xxl-1x1 rounded fix">
            <img src="/img/banner/about.avif" alt="" />
          </div>
        </div>
        <div class="col-lg-8 p-relative ps-lg-7 ps-xxl-8 animated_right">
          <div class="tx-about-content iner-about">
            <div class="tx-section-title-wrapper mb-5">
              <h2 class="tx-section-title tx-section-title-2">Transforming Idea into Success</h2>
            </div>
            <div>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
              </p>
              <p>
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                versions of Lorem Ipsum.
              </p>
              <ul>
                <li>Strategic Planning</li>
                <li>Investment Decision</li>
                <li>Competitive Analysis</li>
                <li>Reporting & Analysis</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= About section End ================= -->

  <section class="tx-section">
    <div class="container">
      <div class="card">
        <div class="card-body p-4 pb-0 p-md-5 pb-md-3">
          <div class="row g-5">
            <div class="col-lg-6 animated">
              <div class="tx-about-inner-box pe-xxl-3">
                <!-- single box active -->
                <h3 class="tx-about-inner-box-title pb-16"><a href="#">Our Vision</a></h3>
                <p>
                  Our mission is to empower businesses through best innovative IT solutions that drive growth,
                  efficiency digital transformation. We committed to delivering exceptional service, fostering
                  long partnerships, and leveraging the latest technologies to help.
                </p>
              </div>
            </div>
            <div class="col-lg-6 animated">
              <div class="tx-about-inner-box pe-xxl-3">
                <!-- single box active -->
                <h3 class="tx-about-inner-box-title pb-16"><a href="#">Our Mission</a></h3>
                <p>
                  Our mission is to empower businesses through best innovative IT solutions that drive growth,
                  efficiency digital transformation. We committed to delivering exceptional service, fostering
                  long partnerships, and leveraging the latest technologies to help.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= Choose section start ================= -->
  <section class="tx-section bg-gradient-light">
    <div class="container">
      <div class="tx-section-title-wrapper text-center animated">
        <h4 class="tx-section-subtitle">Expertise</h4>
        <h2 class="tx-section-title">Why People Choose Us</h2>
      </div>

      <div id="mousewheel_carousel" class="owl-carousel mousewheel_scroll animated">
        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between mb-4">
                <div class="tx-service-icon-box-icon order-lg-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-people-group"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Experienced Facilitator</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between mb-4">
                <div class="tx-service-icon-box-icon order-lg-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-badge-check"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Official Certification</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between mb-4">
                <div class="tx-service-icon-box-icon order-lg-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-badge-check"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Professional Networking</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between mb-4">
                <div class="tx-service-icon-box-icon order-lg-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-badge-check"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Lifetime Access</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="card tx-service-icon-box p-relative z-index-1 fix p-0">
          <div class="card-body">
            <div class="tx-service-icon-box-content">
              <div class="d-flex justify-content-between mb-4">
                <div class="tx-service-icon-box-icon order-lg-last text-primary">
                  <span><i class="fa-duotone fa-solid fa-badge-check"></i></span>
                </div>
                <h3 class="tx-service-icon-box-title pt-4">Live & Interactive Learning</h3>
              </div>
              <p>
                Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt pulvinar.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->
      </div>

      <div class="tx-section-bg-image mb-0 animated">
        <div class="bg-overlay"></div>
        <img class="img-cover p-absolute" src="/img/banner/business-advisor-working-together.avif" alt="" />
        <div class="caption">
          <h2 class="tx-section-title text-white mb-4">Dedicated Professionals, Proven Results</h2>
          <a href="<?php echo e(route('second', ['pages', 'team'])); ?>" class="btn btn-secondary">Meet Our Team</a>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Choose section end ================= -->

  <?php echo $__env->make('layouts.partials.section-border-center', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- ================= Success section start ================= -->
  <section class="tx-section">
    <div class="container">
      <div class="tx-section-title-wrapper col-lg-10 col-xxl-8 mx-auto text-center mb-6 animated">
        <h2 class="tx-section-title">Core Value</h2>
        <p>As a global certification partner, our core values reflect a strong commitment to compliance, ethical
          leadership, and ESG-aligned risk practices—anchored by ISO standards including 22301, 27001, and 9001:2015.</p>
      </div>
      <div class="table-responsive-xl pb-3 pb-xl-0">
        <div class="row flex-nowrap g-3 g-lg-4">
          <!-- single success icbox start -->
          <div class="col-10 col-md-5 col-xl-3 animated">
            <div class="tx-core-box text-center">
              <div class="tx-core-box-icon">
                <span><img src="/img/icons/core-transparency.webp" alt="" /></span>
                <div class="tx-core-box-icon-number">
                  <cite>01</cite>
                </div>
                <div class="tx-core-box-3-arow d-none d-md-block">
                  <img src="/img/icons/tx-arow-4.1.svg" alt="" />
                  <img class="arow-active" src="/img/icons/tx-work-pro-arow.svg" alt="" />
                </div>
              </div>
              <div class="tx-core-box-desc">
                <h3 class="tx-core-box-title pt-32 pb-16">Transparency</h3>
                <p>
                  We ensure open, clear processes that build trust.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->

          <!-- single success icbox start -->
          <div class="col-10 col-md-5 col-xl-3 animated">
            <div class="tx-core-box text-center">
              <div class="tx-core-box-icon">
                <span><img src="/img/icons/core-integrity.webp" alt="" /></span>
                <div class="tx-core-box-icon-number">
                  <cite>02</cite>
                </div>
                <div class="tx-core-box-3-arow d-none d-md-block">
                  <img src="/img/icons/tx-arow-4.1.svg" alt="" />
                  <img class="arow-active" src="/img/icons/tx-work-pro-arow.svg" alt="" />
                </div>
              </div>
              <div class="tx-core-box-desc">
                <h3 class="tx-core-box-title pt-32 pb-16">Integrity</h3>
                <p>
                  We act ethically and foster accountable practices.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->

          <!-- single success icbox start -->
          <div class="col-10 col-md-5 col-xl-3 animated">
            <div class="tx-core-box text-center">
              <div class="tx-core-box-icon">
                <span><img src="/img/icons/core-simplicity.webp" alt="" /></span>
                <div class="tx-core-box-icon-number">
                  <cite>03</cite>
                </div>
                <div class="tx-core-box-3-arow d-none d-md-block">
                  <img src="/img/icons/tx-arow-4.1.svg" alt="" />
                  <img class="arow-active" src="/img/icons/tx-work-pro-arow.svg" alt="" />
                </div>
              </div>
              <div class="tx-core-box-desc">
                <h3 class="tx-core-box-title pt-32 pb-16">Simplicity</h3>
                <p>
                  We make complex standards easy to apply.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->

          <!-- single success icbox start -->
          <div class="col-10 col-md-5 col-xl-3 animated">
            <div class="tx-core-box text-center">
              <div class="tx-core-box-icon">
                <span><img src="/img/icons/core-performance.webp" alt="" /></span>
                <div class="tx-core-box-icon-number">
                  <cite>04</cite>
                </div>
              </div>
              <div class="tx-core-box-desc">
                <h3 class="tx-core-box-title pt-32 pb-16">Performance</h3>
                <p>
                  We focus on results that improve resilience and strategy.
                </p>
              </div>
            </div>
          </div>
          <!-- single success icbox end -->
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Success section End ================= -->

  <!-- ================= Brand section start ================= -->
  <section class="tx-brand-area bg-primary-subtle py-6">
    <div class="container">
      <div class="row align-items-center justify-content-between gy-4 text-center text-xl-start">
        

        <div class="col-12">
          <div class="tx-brand-logo-active">
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-lsppm.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/Logo-Komite-Akreditasi-Nasional-KAN.svg" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-AAFM.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-GAFM.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/logo-AAPM-lapel-pin.webp" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/iso22301-logo-badge.avif" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/iso9001-logo-badge.avif" alt="" />
            </div>
            <!-- tx-single brand -->
            <div class="tx-brand-logo">
              <img src="/img/brand/iso31000-logo-badge.avif" alt="" />
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!-- ================= Brand section End ================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing', ['title' => 'Certifico || About'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\certifico\resources\views/pages/about.blade.php ENDPATH**/ ?>