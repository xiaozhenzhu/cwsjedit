<?php $__env->startSection('title', 'Create'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Create an article</h2>
	
	<form method="post" action="/articles">
		<?php echo e(csrf_field()); ?>

		
		<input type="text" name="username">
		<input type="submit">
	</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>