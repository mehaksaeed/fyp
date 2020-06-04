<!DOCTYPE html>
<html lang="en">
	<head>

	    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title'); ?></title>
		<meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta property="og:title" content="" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />		
		
		<!-- ==============================================
		Favicons
		=============================================== --> 
	     <link rel="icon" href="assets/img/logo.html">
        <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.html">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.html">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.html">
        
        <!-- ==============================================
        CSS
        =============================================== -->
        
          <link href="<?php echo e(asset('assets/css/demos/photo.css')); ?>" rel="stylesheet">      
        <!-- ==============================================
        Feauture Detection
        =============================================== -->
        <script src="<?php echo e(asset('assets/js/modernizr-custom.html')); ?>"></script>
         <script src=""></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>    	
 	</head>


	<body>
		
		<?php echo $__env->yieldContent('content'); ?>
		<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/js/base.js')); ?>"></script>
		<script src="<?php echo e(asset('assets/plugins/slimscroll/jquery.slimscroll.js')); ?>"></script>
	
	</body>
</html>