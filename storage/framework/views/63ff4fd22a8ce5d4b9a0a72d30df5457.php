<?php $__env->startSection('content'); ?>
  <!-- ================= Banner section start ================= -->
  <section class="tx-hero-section bg-gradient-light pb-7 pb-xl-8">
    <div class="container">
      <div class="row g-3 gx-xl-9">
        <div class="col-md-9">
          <div class="tx-breadcrumb">
            <h4 class="tx-section-subtitle">Our Services</h4>
            <h1 class="tx-section-heading">Corporate Certification</h1>
            <div class="tx-breadcrumb-list mt-3">
              <span><a href="<?php echo e(route('any', 'index')); ?>">Home</a></span>
              <span><a href="<?php echo e(route('second', ['services', 'our-services'])); ?>">Our Service</a></span>
              <span class="active">Corporate Certification</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Service Details Start ================= -->
  <section class="tx-section bg-gradient-light">
    <div class="container">
      <div class="row justify-content-between align-items-lg-center g-3 g-xl-4 gy-5">
        <div class="col-lg-8 order-last p-relative ps-lg-7 ps-xxl-8 animated_left">
          <img src="/img/icons/3d-users.webp" class="col-3 col-md-2 p-absolute end-0 top-0 mt-n5 mt-xxl-n7 me-3"
            alt="" />
          <div class="tx-service-content-block mb-5">
            <h2 class="tx-section-title mb-5 mb-xl-7 col-10">Tingkatkan Kinerja Tim, <br> Buktikan Profesionalisme
              Perusahaan!
            </h2>
            <p>Program Corporate Certification kami menawarkan solusi sertifikasi yang disesuaikan untuk perusahaan dan
              institusi yang ingin meningkatkan standar profesional, tata kelola, dan daya saing bisnis secara menyeluruh.
              Melalui pendekatan kolaboratif, kami membantu organisasi mengembangkan kompetensi internal, memenuhi
              kepatuhan regulasi, serta mendapatkan pengakuan nasional dan internasional.</p>
            <a href="<?php echo e(route('second', ['pages', 'contact'])); ?>" class="btn btn-secondary btn-icon-leading mt-3">
              Get a Free Consultation <i class="fa-regular fa-arrow-right"></i>
            </a>
          </div>
        </div>
        <div class="col-lg-4 animated_right">
          <div class="tx-service-details">
            <div class="ratio ratio-21x9 ratio-lg-3x4 ratio-xxl-1x1 rounded fix">
              <img src="/img/banner/corporate-certification.avif" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Service Details End ================= -->

  <?php echo $__env->make('layouts.partials.section-border-center', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <!-- ================= More Services start ================= -->
  <section class="tx-section pb-0">
    <div class="container">
      <div class="row mb-5">
        <!-- single service box start -->
        <div class="col-12 text-center animated">
          <h2 class="tx-section-title ">Keunggulan Corporate Certification</h2>
        </div>
      </div>
      <div class="row g-3 g-xxl-4 tx-service-related mb-7">
        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-4 animated">
          <div class="card tx-service-card">
            <div class="card-body">
              <div class="d-xl-flex justify-content-xl-between align-items-center mb-3 mb-4">
                <div class="tx-service-icon order-xl-last">
                  <i class="fa-solid fa-compass"></i>
                </div>
                <h3 class="h5 col-xl-8">Custom Training &amp; Certification</h3>
              </div>
              <p>Program disesuaikan dengan kebutuhan industri, struktur organisasi, dan tujuan strategis perusahaan Anda.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-4 animated">
          <div class="card tx-service-card">
            <div class="card-body">
              <div class="d-xl-flex justify-content-xl-between align-items-center mb-3 mb-xl-4">
                <div class="tx-service-icon order-xl-last">
                  <i class="fa-solid fa-award"></i>
                </div>
                <h3 class="h5 col-xl-8">Peningkatan Kompetensi Tim</h3>
              </div>
              <p>Tingkatkan kapabilitas SDM melalui pelatihan berbasis kompetensi yang diakui oleh lembaga profesional.
              </p>
            </div>
          </div>
        </div>
        <!-- single service box end -->

        <!-- single service box start -->
        <div class="col-9 col-md-5 col-lg-4 animated">
          <div class="card tx-service-card">
            <div class="card-body">
              <div class="d-xl-flex justify-content-xl-between align-items-center mb-3 mb-4">
                <div class="tx-service-icon order-xl-last">
                  <i class="fa-solid fa-trophy-star"></i>
                </div>
                <h3 class="h5 col-xl-8">Citra Perusahaan yang Lebih Kredibel</h3>
              </div>
              <p>Sertifikasi membantu memperkuat kepercayaan pelanggan, mitra, dan investor terhadap kualitas dan
                integritas bisnis Anda.</p>
            </div>
          </div>
        </div>
        <!-- single service box end -->
      </div>
    </div>
  </section>
  <!-- ================= More Services End ================= -->

  <!-- ================= Cta section start ================= -->
  <?php echo $__env->make('layouts.partials.cta3', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <!-- ================= Cta section End ================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing', ['title' => 'Certifico || Corporate Certification'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\certifico\resources\views/services/corporate-certification.blade.php ENDPATH**/ ?>