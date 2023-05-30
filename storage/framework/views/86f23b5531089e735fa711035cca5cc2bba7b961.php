

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            Create Appointment
        </div>
        <div class="card-body">
            <form action="/appointments" method='POST'>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Name</label>
                <input type="text" name="client_name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Time</label>
                <input type="time" name="time" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Date</label>
                <input type="date" name="date" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Phone Number</label>
                <input type="number" name="phone_number" class="form-control">
            </div>

            <div class="mb-3">
                <label for="">Purpose</label>
                    <div class="select-box">
                      <select name="purpose">
                        <option hidden>Services</option>
                        <option>Check-Up</option>
                        <option>Deworming</option>
                        <option>Vaccination</option>
                        <option>Grooming</option>
                      </select>
                    </div>
                
            </div>
            
            <button type="submit" class="btn btn-danger">Save</button>
            </form>
        </div>
    </div>
<style>
    *{
        margin: 1%;
        margin-left: 8%;
        width: 90%;
        align-items: center;
    }
    .card-body {
        margin-left: 1px;
    }
    .btn {
        width: 50%;
        margin-left: 30%;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PetClinic\resources\views/appointment/create.blade.php ENDPATH**/ ?>