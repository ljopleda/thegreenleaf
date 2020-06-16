<?php $__env->startSection('content'); ?>
	<div class="main_container about-page">
		<div class="overlay"></div>
  	<?php echo $__env->make('partials.about-us-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  	<?php echo $__env->make('partials.about-us-content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>