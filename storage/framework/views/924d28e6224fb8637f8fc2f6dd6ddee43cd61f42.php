<?php $__env->startSection('title','job'); ?>
<?php $__env->startSection('main'); ?>
<form method="POST" action="/job" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

            JobName: <input type="text" name="Jobname"><br>
            JobLocation: <input type="text" name="Joblocation"><br>
            JobSpecification: <input type="text" name="Jobspecification"><br>
            JobGiver: <input type="text" name="Jobgiver"><br> 
            JobPicture:<input type = "file" name="JobPict"><br>       
            <button type="submit" name="button">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>