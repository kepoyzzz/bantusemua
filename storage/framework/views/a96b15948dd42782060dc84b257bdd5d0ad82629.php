<?php $__env->startSection('title','profileUser'); ?>
<?php $__env->startSection('main'); ?>
<head>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<div class="row">
    <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <H2>Profile</H2>
            <div class="table-responsive-sm">
                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <table class="table">
                        <tr>
                            <td>Name : </td>
                            <td><?php echo e($user->name); ?></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth : </td>
                            <td><?php echo e($user->dateofbirth); ?></td>
                        </tr>
                        <tr>
                            <td>Location : </td>
                            <td><?php echo e($user->location); ?></td>
                        </tr>
                        <tr>
                            <td>Gender : </td>
                            <td><?php echo e($user->gender); ?></td>
                        </tr>
                        <tr>
                            <td>Email : </td>
                            <td><?php echo e($user->email); ?></td>
                        </tr>
                        <tr>
                            <td>Phone Number : </td>
                            <td><?php echo e($user->phonenumber); ?></td>
                        </tr>
                    </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <form action="/editProfile" method="GET" class="">
                <button type="submit" class="btn btn-primary">Edit Profile</button>
            </form>
        </div>
        <div class="col-sm-3">
        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>