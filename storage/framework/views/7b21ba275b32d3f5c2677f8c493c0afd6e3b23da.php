<?php $__env->startSection('title','viewdonationearly'); ?>
<?php $__env->startSection('main'); ?>
<html lang="en">
  <body>
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Donation</h1>      
        <p>Your Help Will Help Many People</p>
      </div>
      <form action="/viewdonationearly" method="get">
        <div class="form-row">
          <div class="col-2">
          </div>
          <div class="col-7">
            <input type="text" class="form-control" name="donateTitle" placeholder="Search ...">
          </div>
          <div class="col-2">
            <button type="submit" class="btn btn-dark">Find</button>
          </div>
        </div>
      </form>
    </div>
    <div class="container">
      <div class="row">
      <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><h5><?php echo e($donations->donateTitle); ?></h5></div>
            <div class="panel-body"><img src="donasibencana/<?php echo e($donations->donatePicture); ?>" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
              <div class="table-responsive-md">
                <table class="table">
                  <tr>
                    <td>
                      Requester: 
                    </td>
                    <td>
                      <?php echo e($donations->requesterDonation); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Phone Number: 
                    </td>
                    <td>
                      <?php echo e($donations->phoneDonation); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Email: 
                    </td>
                    <td>
                      <?php echo e($donations->emailDonation); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Total Donation : 
                    </td>
                    <td>
                      Rp. <?php echo e($donations->totalDonation); ?>,00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Target Donation :
                    </td>
                    <td>
                      Rp. <?php echo e($donations->targetDonation); ?>,00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Donation Time : 
                    </td>
                    <td>
                      <?php echo e($donations->donateTime); ?>

                    </td>
                  </tr>
                  <tr>
                    <td>
                      Description:
                    </td>  
                    <td>
                      <?php echo e($donations->descriptionDonation); ?>

                    </td>
                  </tr>
                </table>
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
<?php echo $__env->make('earlyLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>