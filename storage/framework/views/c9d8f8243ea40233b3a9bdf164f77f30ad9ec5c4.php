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
                <table class="table">
                    <tr>
                        <td>Name : </td>
                        <td>test</td>
                    </tr>
                    <tr>
                        <td>Date Of Birth : </td>
                        <td>test</td>
                    </tr>
                    <tr>
                        <td>Location : </td>
                        <td>test</td>
                    </tr>
                    <tr>
                        <td>Gender : </td>
                        <td>test</td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td>test</td>
                    </tr>
                    <tr>
                        <td>Phone Number : </td>
                        <td>test</td>
                    </tr>
                </table>
            </div>
            <button type="button" class="btn btn-dark">Edit Profile</button>
        </div>
        <div class="col-sm-3">
        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>