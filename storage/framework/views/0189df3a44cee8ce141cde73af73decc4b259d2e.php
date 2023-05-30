

<?php $__env->startSection('content'); ?>

    <h1>YOUR APPOINTMENTS</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Client ID</th>
            <th scope="col">Client Name</th>
            <th scope="col">Time</th>
            <th scope="col">Date</th>
            <th scope="col">Purpose</th>
            <th scope="col">Appointment Status</th>
           


            

          </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointments): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($appointments->id); ?></th>
                <td><?php echo e($appointments->client_name); ?></td>
                <td><?php echo e($appointments->time); ?></td>
                <td><?php echo e($appointments->date); ?></td>
                <td><?php echo e($appointments->purpose); ?></td>
                <td><?php echo e($appointments->status); ?></td>
                <td>
                
                    <div class="d-flex justify-content-start ">
                        <form action="/appointments/<?php echo e($appointments->id); ?>" method="POST"> 
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('DELETE'); ?>
                          <button type="submit" class="btn btn-danger btn-xs m-2">Cancel</button>
                        </form>

                    </div>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
        </tbody>
      </table>
<style>
  *{
    margin: 10px;
  }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PetClinic\resources\views/appointment/table.blade.php ENDPATH**/ ?>