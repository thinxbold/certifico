<?php $__env->startSection('content'); ?>
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light">
    <div class="container">
      <div class="row justify-content-between g-3">
        <div class="col-md-6 col-xl-5 animated_left">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Our Services</h4>
            <h1 class="tx-section-heading">Sertifikasi BNSP</h1>
            <div class="tx-breadcrumb-list mt-3">
              <span><a href="<?php echo e(route('any', 'index')); ?>">Home</a></span>
              <span><a href="<?php echo e(route('second', ['services', 'our-services'])); ?>">Our Service</a></span>
              <span class="active"><a href="#">Sertifikasi BNSP</a></span>
            </div>
          </div>
        </div>
        <div class="col-md-6 pt-5 animated_right">
          <div class="tx-breadcrumb mb-4">
            <p>Program sertifikasi Certified Risk Associate (CRA) dan Certified Risk Professional (CRP)
              merupakan inisiatif strategis bagi para profesional di bidang manajemen risiko.</p>
          </div>
          <a href="<?php echo e(route('second', ['pages', 'contact'])); ?>" class="btn btn-secondary btn-icon-leading">
            Get a Free Consultation <i class="fa-regular fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->


  <!-- ================= Service Details Start ================= -->
  <section class="tx-section services-program">
    <div class="container">
      <div class="row justify-content-end g-3 g-xl-4">
        <div class="col animated">
          <div class="card">
            <div class="card-body d-flex flex-column">
              <h2 class="tx-section-title">Certification Programs</h2>
              <p>Jalur Profesional Menuju Keahlian Manajemen Risiko</p>
              <div class="brand-logo">
                <div class="brand-logo-title">Certified by:</div>
                <div class="brand-logo-wrapper">
                  <img src="/img/brand/logo-lsppm.webp" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- single services box start -->
        <div class="col-md-6 col-lg-4 col-xl-3 animated">
          <div class="card">
            <div class="tx-single-services-item">
              <div class="tx-single-services-img ratio ratio-4x3">
                <div class="d-block">
                  <img src="/img/service/cra.avif" class="img-cover" alt="" />
                </div>
                <a href="<?php echo e(route('third', ['services', 'sertifikasi-bnsp', 'cra-certified-risk-associate'])); ?>"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/cra-logo-badge.avif" alt="">
                  </div>
                  <div class="tx-single-services-tag mt-auto">
                    <span>Sertifikasi BNSP</span>
                  </div>
                  <h3>CRA<sup>&reg;</sup><span>Certified Risk Associate</span></h3>
                  <div class="icon-readmore">
                    <i class="fa-thin fa-arrow-right"></i>
                  </div>
                </a>
              </div>
              <div class="tx-single-services-content">
                <span class="tx-single-services-meta">by: Herbert Harrison</span>
                <div class="d-flex align-items-center gap-2 mb-3">
                  <span class="tx-single-services-desc">Rp 25.500.000</span>
                  <span class="small text-decoration-line-through text-danger">Rp 34.000.000</span>
                </div>
                <a href="<?php echo e(route('third', ['services', 'sertifikasi-bnsp', 'cra-certified-risk-associate'])); ?>"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="<?php echo e(route('second', ['pages', 'contact'])); ?>" class="btn btn-tertiary btn-icon-leading btn-sm">
                  <i class="fa-regular fa-cart-shopping"></i>Buy
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- single services box end -->

        <!-- single services box start -->
        <div class="col-md-6 col-lg-4 col-xl-3 animated">
          <div class="card">
            <div class="tx-single-services-item">
              <div class="tx-single-services-img ratio ratio-4x3">
                <div class="d-block">
                  <img src="/img/service/crp.avif" class="img-cover" alt="" />
                </div>
                <a href="<?php echo e(route('third', ['services', 'sertifikasi-bnsp', 'crp-certified-risk-professional'])); ?>"
                  class="tx-single-services-title stretched-link">
                  <div class="tx-single-services-meta-box">
                    <img src="/img/brand/crp-logo-badge.avif" alt="">
                  </div>
                  <div class="tx-single-services-tag mt-auto">
                    <span>Sertifikasi BNSP</span>
                  </div>
                  <h3>CRP<sup>&reg;</sup><span>Certified Risk Proffesional</span></h3>
                  <div class="icon-readmore">
                    <i class="fa-thin fa-arrow-right"></i>
                  </div>
                </a>
              </div>
              <div class="tx-single-services-content">
                <span class="tx-single-services-meta">by: Herbert Harrison</span>
                <div class="d-flex align-items-center gap-2 mb-3">
                  <span class="tx-single-services-desc">Rp 25.500.000</span>
                  <span class="small text-decoration-line-through text-danger">Rp 34.000.000</span>
                </div>
                <a href="<?php echo e(route('third', ['services', 'sertifikasi-bnsp', 'crp-certified-risk-professional'])); ?>"
                  class="btn btn-secondary btn-icon-leading btn-sm">Learn More</a>
                <a href="<?php echo e(route('second', ['pages', 'contact'])); ?>" class="btn btn-tertiary btn-icon-leading btn-sm">
                  <i class="fa-regular fa-cart-shopping"></i>Buy
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- single services box end -->
      </div>
    </div>
  </section>
  <!-- ================== Service Details End ================== -->

  <!-- ================= Service Details Start ================= -->
  <section class="tx-section bg-gradient-light">
    <div class="container">
      <div class="row justify-content-between align-items-xl-center g-3 g-xl-4 gy-5">
        <div class="col-lg-8 order-last ps-lg-7 ps-xxl-8 animated_left">
          <div class="tx-service-content-block mb-5">
            <h2 class="tx-section-title mb-5 mb-xl-7">Validasi Kompetensi, <br> Tingkatkan Kepercayaan!</h2>
            <p>Program sertifikasi Certified Risk Associate (CRA) dan Certified Risk Professional (CRP) adalah
              inisiatif pendidikan dan pengembangan profesional yang dirancang untuk individu yang tertarik dan terlibat
              dalam manajemen risiko.</p>
            <p>Program sertifikasi ini diselenggarakan melalui kolaborasi strategis antara <strong>Lembaga Sertifikasi
                Profesi Pasar Modal (LSP-PM)</strong> dan <strong>Badan Nasional Sertifikasi Profesi (BNSP)</strong>, yang
              menjamin pengakuan resmi di tingkat nasional.</p>
          </div>
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="cra-tab" data-bs-toggle="tab" data-bs-target="#cra-tab-pane"
                type="button" role="tab" aria-controls="cra-tab-pane" aria-selected="true">CRA<sup>&reg;</sup>
                Certified</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="crp-tab" data-bs-toggle="tab" data-bs-target="#crp-tab-pane"
                type="button" role="tab" aria-controls="crp-tab-pane" aria-selected="false">CRP<sup>&reg;</sup>
                Certified</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <!-- 1 -->
            <div class="tab-pane fade show active" id="cra-tab-pane" role="tabpanel" aria-labelledby="cra-tab"
              tabindex="0">
              <p>Program CRA<sup>&reg;</sup> (Certified Risk Associate) memberikan pemahaman dasar tentang konsep-konsep
                risiko dan teknik manajemen risiko. Peserta akan belajar mengidentifikasi, menilai, dan mengelola risiko
                dalam berbagai konteks organisasi. Sertifikasi ini sesuai untuk para profesional yang baru memasuki
                bidang
                manajemen risiko atau yang ingin memperluas pengetahuan mereka dalam hal ini.</p>
            </div>
            <!-- 1 -->
            <div class="tab-pane fade" id="crp-tab-pane" role="tabpanel" aria-labelledby="crp-tab" tabindex="0">
              <p>Program CRP<sup>&reg;</sup> (Certified Risk Professional) memberikan pemahaman dasar tentang
                konsep-konsep risiko dan teknik manajemen risiko.Peserta akan belajar mengidentifikasi, menilai, dan
                mengelola risiko dalam berbagai konteks organisasi.Sertifikasi ini sesuai untuk para profesional yang
                baru
                memasuki bidang manajemen risiko atau yang ingin memperluas pengetahuan mereka dalam hal ini.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 animated_right">
          <div class="tx-service-details">
            <div class="ratio ratio-21x9 ratio-lg-3x4 ratio-xxl-1x1 rounded fix">
              <img src="/img/service/sertifikasi-bnsp.avif" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  <?php echo $__env->make('layouts.partials.section-border-center', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- ================= More Services start ================= -->
  <section class="tx-section">
    <div class="container">
      <div class="row mb-5">
        <!-- single service box start -->
        <div class="col-12 text-center animated">
          <h2>View More Services</h2>
        </div>
      </div>
      <div class="row g-3 g-xxl-4 tx-service-related justify-content-lg-center">
        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card d-none animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-badge-check"></i>
              </div>
              <div class="tx-service-icon-box-4-content4">
                <h3 class="h5">Sertifikasi BNSP</h3>
                <p>Inisiatif strategis bagi para profesional di bidang manajemen risiko.</p>
                <a href="<?php echo e(route('second', ['services', 'sertifikasi-bnsp'])); ?>" class="btn btn-more"><span>Learn
                    More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-compass"></i>
              </div>
              <div class="tx-service-icon-box-4-content4">
                <h3 class="h5">Sertifikasi Internasional</h3>
                <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                <a href="<?php echo e(route('second', ['services', 'sertifikasi-internasional'])); ?>"
                  class="btn btn-more"><span>Learn
                    More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-globe"></i>
              </div>
              <div class="tx-service-icon-box-4-content4">
                <h3 class="h5">Sertifikasi ISO</h3>
                <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                <a href="<?php echo e(route('second', ['services', 'sertifikasi-iso'])); ?>" class="btn btn-more"><span>Learn
                    More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-trophy-star"></i>
              </div>
              <div class="tx-service-icon-box-4-content4">
                <h3 class="h5">Corporate Training</h3>
                <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                <a href="<?php echo e(route('second', ['services', 'corporate-training'])); ?>" class="btn btn-more"><span>Learn
                    More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-3 tx-service-item-card animated">
          <div class="card">
            <div class="card-body">
              <div class="tx-service-icon mb-4">
                <i class="fa-solid fa-award"></i>
              </div>
              <div class="tx-service-icon-box-4-content4">
                <h3 class="h5">Corporate Certification</h3>
                <p>Mauris tempus vel orci in viverra. In scelerisque vestibulum odio tincidunt.</p>
                <a href="<?php echo e(route('second', ['services', 'corporate-certification'])); ?>"
                  class="btn btn-more"><span>Learn
                    More</span></a>
              </div>
            </div>
          </div>
        </div>
        <!-- single service box end -->
      </div>
    </div>
  </section>
  <!-- ================= More Services End ================= -->

  <?php echo $__env->make('layouts.partials.cta', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const elements = document.querySelectorAll('.nav_link_child');
      elements.forEach(element => {
        element.classList.remove('active');
      });
    });
  </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.landing', ['title' => 'Certifico || Sertifikasi BNSP'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\certifico\resources\views/services/sertifikasi-bnsp.blade.php ENDPATH**/ ?>