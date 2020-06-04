<?php $__env->startSection('title'); ?>
    Flurry 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


     <section class="login">
      <div class="container">
         <?php echo $__env->make('includes.alertmessage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div class="banner-content">
      
          <h1><i class="fa fa-smile"></i> Flurry</h1>

          <form method="post" class="form-signin" action="<?php echo e(route('signup')); ?>">
           <h3 class="form-signin-heading">Please register</h3>
           <div class="form-group  <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
            <input name="email" type="text" class="form-control " placeholder="Email"  value="<?php echo e(Request::old('email')); ?>">
           </div>
           <div class="form-group <?php echo e($errors->has('username') ? 'has-error' : ''); ?>">
            <input name="username" type="text" class="form-control" placeholder="Username" value="<?php echo e(Request::old('username')); ?>">
           </div>
           <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo e(Request::old('password')); ?>">
           </div>
           <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
           <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Sign Up</button>
           <br/>
           <a class="btn btn-dark " href="#signin" role="button">Already have an account? Click Here.</a>
        
          </form>
        
       </div><!--/. banner-content -->
      </div><!-- /.container -->
     </section> 

      <section class="login" id="signin">
      <div class="container">
       <div class="banner-content">
       
          <h1><i class="fa fa-smile"></i> Flurry</h1>
          <form method="post" class="form-signin " action="<?php echo e(route('signin')); ?>">
           <h3 class="form-signin-heading">Please sign in</h3>
           <div class="form-group  <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
            <input name="email" type="text" class="form-control" placeholder="Email" value="<?php echo e(Request::old('email')); ?>">
           </div>
           <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
            <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo e(Request::old('password')); ?>">
           </div>
           <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
           <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Sign in</button>
           <br/>
  
          </form>
        
       </div><!--/. banner-content -->
      </div><!-- /.container -->
     </section> 
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>