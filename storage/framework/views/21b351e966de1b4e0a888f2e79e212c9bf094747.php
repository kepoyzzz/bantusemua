<?php $__env->startSection('title','insertdonation'); ?>
<?php $__env->startSection('main'); ?>
<div class="jumbotron">
      <div class="container text-center">
        <h1>Add Donation</h1>      
        <p>There are many generous person that will help you.</p>
      </div>
</div>
<div class="container">
    <form method="POST" action="/insertdonation" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="DonateTitle">
            </div>
            <div class="form-group">
                <label for="Person In Charge">Requester</label> 
                <input type="text" class="form-control" name="DonateName">
            </div>
            <div class="form-group">
                <label for="Job Location">Target Donation</label>
                <input type="text" class="form-control" name="TargetDon">
            </div>
            <div class="form-group">
                <label for="Total">Total Donation</label>
                <label for="Total"></label>
                <input type="text" class="form-control" name="TotalDon">
            </div>
            <div class="form-group">
                <label for="DonDesc">Donation Description</label>
                <textarea name="DonDesc" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="DonDesc">Maximum Donation Collection</label>
                <input type="date" class="form-control" name="DonTime">
            </div>
            <div class="form-group">
                <label for="Input Your Picture">Input Picture</label>
                <input type="file" class="form-control-file" name="DonatePict">
            </div>    
            <button type="submit" name="button" class="btn btn-primary" onclick="myFunction()">Submit</button>
    </form>
</div>
<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>