<?php $__env->startSection('content'); ?>
  <!-- ================= Banner section start ================= -->
  <section class="tx-section bg-gradient-light pt-9">
    <div class="container">
      <div class="row g-3 gx-md-5 mt-7">
        <div class="col-md-6">
          <div class="vl-breadcrumb mb-5 mb-md-8">
            <h4 class="tx-section-subtitle">Contact Us</h4>
            <h1>Let's Connect and Empower Your Skill</h1>
          </div>
          <div class="tx-contact-widget">
            <div class="d-block">
              <h5 class="tx-contact-widget-title">Gives us a Call</h5>
              <span>123-456-7890</span>
            </div>
            <div class="d-block">
              <h5 class="tx-contact-widget-title">Send Mail</h5>
              <span>contact@thinxbold.com</span>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="row align-items-center justify-content-center p-relative h-100">
            <div class="border-start border-dark p-absolute start-0 top-0 h-100 d-none d-md-block"></div>
            <div class="col-lg-8">
              <hr class="d-block d-md-none mt-5">
              <div class="py-5 text-center">
                <img src="/img/logo/logo.svg" class="col-3 mb-3" alt="">
                <h5>Certifico</h5>
                <p>915 Broadway Str 501<br>New York, NY 10010</p>
              </div>
            </div>
            <div class="col-6 col-xl-4">
              <img src="/img/about/QRcode.svg" class="rounded" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Banner section End ================= -->

  <!-- ================= Contact section start ================= -->
  <section class="">
    <div class="container">
      <div class="bg-primary-subtle py-5 px-6 rounded">
        <div class="row justify-content-between">
          <div class="col-md-6 d-flex align-items-center gap-4">
            <h6 class="mb-0 text-uppercase">Follow Us</h6>
            <div class="tx-footer-social tx-footer-social-3">
              <ul>
                <li>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-auto">
            <a href="" class="btn btn-secondary btn-icon-leading">
              Get a Free Consultation
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= Contact section end ================= -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.landing', ['title' => 'Certifico || Contact Us'], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\certifico\resources\views/pages/contact.blade.php ENDPATH**/ ?>