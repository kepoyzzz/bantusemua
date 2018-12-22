<?php $__env->startSection('title','job'); ?>
<?php $__env->startSection('main'); ?>
<form action="/showjob" method="get">
            <input type="text" name="jobname" placeholder="Search ...">
            <button type="submit">Find</button>
        </form>
        <table>
            <tr>
                <td>Job Name</td>
                <td>Job Location</td>
                <td>Job Specification</td>
                <td>Job Giver</td>
            </tr>

            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($jobs->jobname); ?></td>
                    <td><?php echo e($jobs->joblocation); ?></td>
                    <td><?php echo e($jobs->jobspecification); ?></td>
                    <td><?php echo e($jobs->jobgiver); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
            
    <?php echo e($result->render()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>