<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <div class="w3-container">
			
			<div class="header">
				<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			
			<div id="main" class="row">
				<?php echo $__env->yieldContent('content'); ?>
			</div>
			
			<div class="footer">
				<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			
        </div>
    </body>
</html>
