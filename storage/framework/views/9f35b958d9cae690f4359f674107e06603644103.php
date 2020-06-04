<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<section class="nav-sec">
	  <div class="d-flex justify-content-between">
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="<?php echo e(route('home')); ?>"><em class="fa fa-home"></em>
		<span>Home</span>
	   </a>
	   </div>
	 
	   <div class="p-2 nav-icon-lg   mint-green">
	   <a class="nav-icon" href="<?php echo e(route('post')); ?>"><em class="fab fa-instagram"></em>
		<span>Upload</span>
	   </a>
	   </div>
	
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="<?php echo e(route('profile')); ?>"><em class="fa fa-user"></em>
		<span>Profile</span>
	   </a>
	   </div>
	  </div>
	</section>	
	 <section class="upload">
    
	  <div class="container">
	   <?php echo $__env->make('includes.alertmessage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	   <div class="row">
	    <div class="col-lg-12">  
		
	     <div class="box">
		  <form method="post"  action="<?php echo e(route('post.create')); ?>">
		   <textarea class="form-control no-border" rows="3" placeholder="Type something..." name="body"></textarea>
		  	<input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
		  
		  <div class="box-footer clearfix">
		   <button class="kafe-btn kafe-btn-mint-small pull-right btn-sm">Upload</button>
		   <ul class="nav nav-pills nav-sm">
			<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-camera text-muted"></i></a></li>
			<li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-video text-muted"></i></a></li>
		   </ul>
		  </div>
		  </form>
		 </div>	
		 
		</div>
	   </div>
	  

	   
	   <div class="row">

        <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
          <div class="card">
            <div class="card-image">
              <img src="assets/img/posts/18.jpg" class="img-responsive" alt="Image"/>
            </div>
            <div class="card-header">
              <span>Name here</span>
            </div>
          </div>
        </div>

     
		
       </div><!--/ row-->	   
  
	  </div><!--/ container -->
	 </section><!--/ newsfeed -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>