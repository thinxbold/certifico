<!DOCTYPE html>
<html lang="en" <?php echo $__env->yieldContent('html_attribute'); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <link rel="shortcut icon" href="/img/icons/vl-fav-ic-1.1.svg">
  

  <!--===== CSS LINK =======-->
  <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/main.scss']); ?>

  <?php echo $__env->yieldContent('css'); ?>

</head>

<body <?php echo $__env->yieldContent('body_attribute'); ?>>

  <?php echo $__env->make('layouts.partials.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <?php echo $__env->make('layouts.partials.header.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <main>
    <section class="tx-error-sec tx-hero-section bg-gradient-light">
      <div class="tx-text-overlay">
        <span><?php echo $__env->yieldContent('code'); ?></span>
      </div>
      <div class="container py-8">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <div class="tx-error-con">
              
              <div class="tx-error-text mb-5">
                <h1><?php echo $__env->yieldContent('code'); ?></h1>
                <h3><?php echo $__env->yieldContent('message'); ?></h3>
                
              </div>

              <div class="tx-error-btn">
                <div class="tx-herobtn tx-aboutbtn tx-upper">
                  <a href="<?php echo e(route('any', 'index')); ?>" class="theme-btn theme-btn2">Back To Home <span><i
                        class="fa-regular fa-arrow-right"></i></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <?php echo $__env->make('layouts.partials.progress-circle', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <?php echo $__env->yieldContent('scripts'); ?>

  <?php echo app('Illuminate\Foundation\Vite')(['resources/js/main.js']); ?>

  <?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html>
<?php /**PATH E:\certifico\resources\views/errors/minimal.blade.php ENDPATH**/ ?>