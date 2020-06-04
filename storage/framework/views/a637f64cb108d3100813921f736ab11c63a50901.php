<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

<section class="nav-sec">
	  <div class="d-flex justify-content-between">
	   <div class="p-2 nav-icon-lg mint-green">
	   <a class="nav-icon" href="<?php echo e(route('home')); ?>"><em class="fa fa-home"></em>
		<span>Home</span>
	   </a>
	   </div>
	   <div class="p-2 nav-icon-lg dark-black">
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
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="newsfeed">
	  <div class="container-fluid">
	   <div class="row">
	    <div class="col-lg-3">
		
		 <a href="#">
		 <div class="storybox" 
		   style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/2.gif') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
       		  
		 </div>
		 </a>

		 	 <a href="#">
		 <div class="storybox" 
		   style="background: linear-gradient( rgba(34,34,34,0.78), rgba(34,34,34,0.78)), url('assets/img/posts/2.gif') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
       		  
		 </div>
		 </a>

		 
		</div><!--/ col-lg-3 -->
	    <div class="col-lg-6">
		
         <div class="cardbox">
		 
          <div class="cardbox-heading">
           <!-- START dropdown-->
           <div class="dropdown pull-right">
            <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
		     <em class="fa fa-ellipsis-h"></em>
			</button>
            <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
	         <a class="dropdown-item" href="#">Hide post</a>
			 <a class="dropdown-item" href="#">Stop following</a>
			 <a class="dropdown-item" href="#">Report</a>
            </div>
           </div><!--/ dropdown -->
           <!-- END dropdown-->
           <div class="media m-0">
            <div class="d-flex mr-3">
			 <a href="#"><img class="img-responsive img-circle" src="assets/img/users/18.jpg" alt="User"></a>
			</div>
            <div class="media-body">
             <p class="m-0">Person Name</p>
			 <small><span>10 hours ago</span></small>
            </div>
           </div><!--/ media -->
          </div><!--/ cardbox-heading -->
          
		  <div class="cardbox-item">
		   <a href="#myModal" data-toggle="modal">
		    <img class="img-responsive" src="assets/img/posts/1.jpg" alt="MaterialImg">
		   </a> 
          </div><!--/ cardbox-item -->
	      <div class="">
		   <br>
		  
		  </div><!--/ cardbox-base -->
    	  
         <div class="row" >
		 	<ul class="imoji">
			   <li class="col-md-3"><a href="#" ><i class="fa fa-thumbs-up fa-2x" style="color: blue"></i></a> 777</li>
			   <li class="col-md-3"><a href="#" ><i class="fa fa-smile fa-2x" style="color: yellow"></i></a> 88</li>
			   <li class="col-md-3"><a href="#" ><i class="fa fa-frown fa-2x" style="color: orange"></i></a>  678</li>
			   <li class="col-md-3"><a href="#" ><i class="fas fa-angry fa-2x" style="color: red"></i> </a> 888</li>
			  </ul>
		 </div>	
		 <br>  
		 </div><!--/ cardbox -->
		
		
         
        
		</div><!--/ col-lg-6 -->
		<div class="col-lg-3">
		
         <div class="suggestion-box full-width">
			<div class="suggestions-list">
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/users/17.jpg" alt="Image">
					<div class="name-box">
						<h4>Person Name</h4>
						<span>@username</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/users/16.jpg" alt="Image">
					<div class="name-box">
						<h4>Person Name</h4>
						<span>@username</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/users/14.jpg" alt="Image">
					<div class="name-box">
						<h4>Person Name</h4>
						<span>@username</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/users/11.jpg" alt="Image">
					<div class="name-box">
						<h4>Person Name</h4>
						<span>@username</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/users/9.jpg" alt="Image">
					<div class="name-box">
					<h4>Person Name</h4>
						<span>@username</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
				<div class="suggestion-body">
					<img class="img-responsive img-circle" src="assets/img/users/8.jpg" alt="Image">
					<div class="name-box">
						<h4>Person Name</h4>
						<span>@username</span>
					</div>
					<span><i class="fa fa-plus"></i></span>
				</div>
			</div><!--suggestions-list end-->
		</div>	

     
	
		
		</div>
		
	   </div><!--/ row -->
	  </div><!--/ container -->
	 </section><!--/ newsfeed -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>