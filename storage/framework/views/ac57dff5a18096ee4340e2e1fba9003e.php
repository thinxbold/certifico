<!DOCTYPE html>
<html lang="en" <?php echo $__env->yieldContent('html_attribute'); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo e(isset($title) ? $title : 'Certifico'); ?></title>

  <link rel="shortcut icon" href="/img/icons/favicon.svg">
  

  <!--===== CSS LINK =======-->
  <?php echo app('Illuminate\Foundation\Vite')(['resources/scss/main.scss']); ?>

  <?php echo $__env->yieldContent('css'); ?>

</head>

<body <?php echo $__env->yieldContent('body_attribute'); ?>>

  <?php echo $__env->make('layouts.partials.loader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
  <?php echo $__env->make('layouts.partials.header.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <main id="main" class="aos">
    <?php echo $__env->yieldContent('content'); ?>
  </main>

  <?php echo $__env->make('layouts.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <?php echo $__env->make('layouts.partials.progress-circle', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

  <?php echo $__env->yieldContent('scripts'); ?>

  <?php echo app('Illuminate\Foundation\Vite')(['resources/js/function.js']); ?>
  <?php echo app('Illuminate\Foundation\Vite')(['resources/js/main.js']); ?>

  <?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html>
<?php /**PATH E:\certifico\resources\views/layouts/landing.blade.php ENDPATH**/ ?>