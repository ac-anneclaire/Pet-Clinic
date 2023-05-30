


<?php $__env->startSection('content'); ?>
<body>
    <div class="form">
    <form method="post" action="<?php echo e(route('login.perform')); ?>">
        
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
        
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
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

        <button class="btn" type="submit">Login</button>
					<a href="/register"><li>Register</li></a>
    </form>
    </div>
</div>
</body>
<style>
    .form {
        margin: 20px;
        margin-left: 50px;
        margin-top: 90px;
        padding: 20px;
    }
    body {
        background-image: url(img/pawclaws.png);
        background-repeat: no-repeat;
        background-position-x: 110%;
        background-position-y: 100%;
        background-size: 65%;
    }
    .form-group {
        width: 40%;
        margin: 10px;
    }
    .btn {
        width: 10%;
        margin-left: 20%;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PetClinic\resources\views/auth/login.blade.php ENDPATH**/ ?>