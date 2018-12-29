<?php $__env->startSection('title','insertdonation'); ?>
<?php $__env->startSection('main'); ?>
<form method="POST" action="/insertdonation" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

            donatePicture:<input type = "file" name="DonatePict"><br>
            donateTitle: <input type="text" name="DonateTitle"><br>
            requesterDonation: <input type="text" name="DonateName"><br>
            totalDonation: <input type="text" name="TotalDon"><br> 
            targetDonation: <input type="text" name="TargetDon"><br>
            donateTime: <input type="text" name="DonTime"><br>
            descriptionDonation: <input type="text" name="DonDesc"><br>        
            <button type="submit" name="button">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>