<?php $__env->startSection('title'); ?>
Flurry
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

<section class="nav-sec">
	  <div class="d-flex justify-content-between">
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="<?php echo e(route('home')); ?>"><em class="fa fa-home"></em>
		<span>Home</span>
	   </a>
	   </div>
	 
	   <div class="p-2 nav-icon-lg dark-black">
	   <a class="nav-icon" href="<?php echo e(route('post')); ?>"><em class="fab fa-instagram"></em>
		<span>Upload</span>
	   </a>
	   </div>
	
	   <div class="p-2 nav-icon-lg mint-green">
	   <a class="nav-icon" href="<?php echo e(route('profile')); ?>"><em class="fa fa-user"></em>
		<span>Profile</span>
	   </a>
	   </div>
	  </div>
	</section>	
  
	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="profile">
	  <div class="container-fluid">
	   <div class="row">
	   
	   <div class="col-lg-3">
		 <div class="profilebox hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/4.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
		 <div class="profilebox hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/1.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
	   </div>
	   <div class="col-lg-6">
		 <div class="profilebox-large hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/9.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
	   </div>
	   <div class="col-lg-3">
		 <div class="profilebox hidden-xs hidden-sm" 
		   style="background: linear-gradient( rgba(34,34,34,0.45), rgba(34,34,34,0.45)), url('assets/img/posts/11.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
		 <div class="profilebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.6), rgba(34,34,34,0.6)), url('assets/img/posts/12.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">		  
		 </div>
	   </div>
		
       </div><!--/ row-->	
	  </div><!--/ container -->
	 </section><!--/ profile -->
  
	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="user-profile">
	  <div class="container-fluid">
	   <div class="row">
	   
	    <div class="col-lg-12">
		   <div class="post-content">
		    <div class="author-post text-center">
		     <a href="#"><img class="img-fluid img-circle" src="assets/img/users/13.jpg" alt="Image"></a>
		    </div><!-- /author -->
		   </div><!-- /.post-content -->		
		</div><!-- /col-sm-12 -->
		
       </div><!--/ row-->	
	  </div><!--/ container -->
	 </section><!--/ profile -->
  
	 <!-- ==============================================
	 User Profile Section
	 =============================================== --> 
	 <section class="details">
	  <div class="container">
	   <div class="row">
	    <div class="col-lg-12">
		 
          <div class="details-box row">
		   <div class="col-lg-9">
           <div class="content-box">
		     <h4>Name here <i class="fa fa-check"></i></h4>
             <p>Welcome to the  account . Success is in the PIXELS, <</p>
			
           </div><!--/ media -->
		   </div> 
		   <div class="col-lg-3">
           <div class="follow-box">
		    <a href="#" class="kafe-btn kafe-btn-mint"><i class="fa fa-check"></i> Following</a>
           </div><!--/ dropdown -->
		   </div>
          </div><!--/ details-box -->
		  
		</div>
	   </div>
	  </div><!--/ container -->
	 </section><!--/ profile -->

	 <!-- ==============================================
	 Home Menu Section
	 =============================================== -->	
     <section class="home-menu">
      <div class="container">
       <div class="row">

        <div class="menu-category">
         <ul class="menu">
          <li class="current-menu-item"><a href="photo_profile.html">Posts <span>1.7k</span></a></li>
          <li><a href="photo_followers.html">Followers <span>1.3M</span></a></li>
          <li><a href="photo_followers.html">Following <span>1200</span></a></li>
         </ul>
		</div>
		
	   </div><!--/row -->
      </div><!--/container -->
     </section><!--/home-menu -->	

	 <!-- ==============================================
	 News Feed Section
	 =============================================== --> 
	 <section class="newsfeed">
	  <div class="container">
	  
	   <div class="row">
	   


	    <div class="col-lg-4">
		 <a href="#myModal" data-toggle="modal">
		 <div class="explorebox" 
		   style="background: linear-gradient( rgba(34,34,34,0.2), rgba(34,34,34,0.2)), url('assets/img/posts/15.jpg') no-repeat;
		          background-size: cover;
                  background-position: center center;
                  -webkit-background-size: cover;
                  -moz-background-size: cover;
                  -o-background-size: cover;">
		  <div class="explore-top">
		   <div class="explore-like"><i class="fa fa-heart"></i> <span>100</span></div>
		   <div class="explore-circle pull-right"><i class="far fa-bookmark"></i></div>
          </div>		  
		 </div>
		 </a>
		</div><!--/ col-lg-4 -->
		
	   </div><!--/ row -->

	  </div><!--/ container -->
	 </section><!--/ newsfeed -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>