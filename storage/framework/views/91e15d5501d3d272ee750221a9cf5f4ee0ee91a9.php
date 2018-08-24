<?php $__env->startSection('title', 'News List'); ?>

<?php $__env->startSection('content'); ?>
    <ul>
		<?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<li><?php echo e($article->headline); ?></li>
			
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		
	</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>