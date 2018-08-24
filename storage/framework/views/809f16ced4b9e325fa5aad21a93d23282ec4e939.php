<?php $__env->startSection('title', 'News'); ?>

<?php $__env->startSection('content'); ?>
    <ul>	
		<li><?php echo e($article->headline); ?></li>
	</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>