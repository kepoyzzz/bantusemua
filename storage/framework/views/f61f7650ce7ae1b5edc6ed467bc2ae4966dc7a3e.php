<?php $__env->startSection('title'); ?>
<?php $__env->startSection('main'); ?>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="css/home.css">
  </head>
    <body>
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1>Welcome Back,</h1>
          <h2><?php echo e(Session::get('userName')); ?></h2>
        </div>
      </div>
    </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>