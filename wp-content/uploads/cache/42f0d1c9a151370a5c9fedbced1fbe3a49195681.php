<?php $__env->startSection('content'); ?>
<div class="main_container">
  <?php echo $__env->make('partials.home-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('partials.home-main-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php echo $__env->make('partials.home-partners', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>