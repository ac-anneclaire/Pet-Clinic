

<?php $__env->startSection('content'); ?>
<body>
    <div class="form">
    <form method="post" action="<?php echo e(route('register.perform')); ?>">

        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        
        <h1 class="h3 mb-3 fw-normal">Registration Form</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Full Name" required="required">
            <label for="floatingName">Full Name</label>
            <?php if($errors->has('name')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('client_name')); ?></span>
            <?php endif; ?>
        </div>

        
        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="name@example.com" required="required">
            <label for="floatingEmail">Email address</label>
            <?php if($errors->has('email')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('email')); ?></span>
            <?php endif; ?>
        </div>

   
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            <?php if($errors->has('password')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password')); ?></span>
            <?php endif; ?>
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <?php if($errors->has('password_confirmation')): ?>
                <span class="text-danger text-left"><?php echo e($errors->first('password_confirmation')); ?></span>
            <?php endif; ?>
        </div>

        <button class="btn" type="submit">Register</button>
        
    </form>
    </div>
</body>
<style>
    .form {
        margin: 20px;
    }
    body {
        background-image: url(img/pawclaws.png);
        background-repeat: no-repeat;
        background-position-x: 110%;
        background-position-y: 100%;
        background-size: 60%;
    }
    .form-group {
        width: 50%;
    }
    .btn {
        width: 10%;
        margin-left: 20%;
    }

</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PetClinic\resources\views/auth/register.blade.php ENDPATH**/ ?>