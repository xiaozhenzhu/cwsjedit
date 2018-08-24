<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CWSJ News List</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>
    <body>
        <div class="">
			<ul>
				
				<?php $__currentLoopData = $newslist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					
					<li><?php echo e($news->headline); ?></li>
					
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</ul>
        </div>
    </body>
</html>
