<?php $__env->startSection('content'); ?>

<div class="content-wrapper d-flex align-items-center justify-content-center auth theme-one" >
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <div class="auto-form-wrapper">
        <?php if(session()->has('message')): ?>
        <p class="alert alert-success"> <?php echo e(session()->get('message')); ?></p>
        <?php endif; ?>
        <form action="login" method="post">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label class="label">Username</label>
            <div class="input-group">
              <input type="text" name="email" class="form-control" placeholder="Username">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>             
            </div>
            <?php if($errors->has('email')): ?>
            <div class="error"><?php echo e($errors->first('email')); ?></div>
          <?php endif; ?>
          </div>
          <div class="form-group">
            <label class="label">Password</label>
            <div class="input-group">
              <input type="password" name="password" class="form-control" placeholder="*********">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>             
            </div>
            <?php if($errors->has('password')): ?>
            <div class="error"><?php echo e($errors->first('password')); ?></div>
          <?php endif; ?>
          </div>
          <div class="form-group">
            <button class="btn btn-primary submit-btn btn-block">Login</button>
          </div>
          
        </form>
      </div>     
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master-mini', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/aware/resources/views/pages/user-pages/login.blade.php ENDPATH**/ ?>