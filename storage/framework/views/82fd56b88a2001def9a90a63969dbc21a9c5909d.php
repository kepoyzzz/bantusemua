<?php $__env->startSection('title','job'); ?>
<?php $__env->startSection('main'); ?>
<html lang="en">
  <body>
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Job List</h1>      
        <p>Get your job here</p>
      </div>
      <form action="/showjob" method="get">
        <div class="form-row">
          <div class="col-2">
          </div>
          <div class="col-7">
            <input type="text" class="form-control" name="Jobname" placeholder="Search ...">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-dark">Find</button>
          </div>
        </div>
      </form>
    </div>
     
    <div class="container">
      <div class="row">
      <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><h5><?php echo e($jobs->JobName); ?></h5></div>
            <div class="panel-body"><img src="jobpictures/<?php echo e($jobs->JobPicture); ?>" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
              <div class="table-responsive-md">
                <table class="table">
                  <tr>
                    <td>
                      Person in Charge: 
                    </td>
                    <td>
                    <?php echo e($jobs->JobGiver); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Email:
                    </td>
                    <td>
                    <?php echo e($jobs->JobEmail); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Phone Number: 
                    </td>
                    <td>
                    <?php echo e($jobs->JobPhone); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Location: 
                    </td>
                    <td>
                    <?php echo e($jobs->JobLocation); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Description:
                    </td>  
                    <td>
                    <?php echo e($jobs->JobSpecification); ?>

                    </td>
                  </tr>
                </table>
                <a href=<?php echo e("/addtojobs/".$jobs->id); ?>><button class = "btn2 btn-primary">Apply Job</button></a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php echo e($result->render()); ?>

    </div>
  </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>