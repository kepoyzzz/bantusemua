<?php $__env->startSection('title','job'); ?>
<?php $__env->startSection('main'); ?>
<html lang="en">
  <body>
    <form action="/showsjob" method="get">
        <input type="text" name="jobname" placeholder="Search ...">
        <button type="submit">Find</button>
    </form>
    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jobs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="slider">
      <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo"><?php echo e($jobs->jobname); ?></button>
      <div id="demo" class="collapse">
      Penanggung Jawab : <?php echo e($jobs->jobgiver); ?><br>
        <button type="button" class="btn" id="btn1">Desc</button>
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>Lokasi : <?php echo e($jobs->joblocation); ?></p>
            <p>Pekerjaan : <br><?php echo e($jobs->jobspecification); ?></p>
          </div>
        </div>
        <!-- <button type="button" class="btn" id="btn2">Apply</button>

        <div id="myModal2" class="modal">
          <div class="modal-content">
            <span class="close2">&times;</span>
            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
            <button type="button" class="btn" id="btn3">Yes</button>
            <button type="button" class="btn" id="btn4">No</button>
          </div>
        </div> -->
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($result->render()); ?>

    <script>
      var modal = document.getElementById('myModal');
      var btn = document.getElementById("btn1");
      var span = document.getElementsByClassName("close")[0];

      btn.onclick = function() {
        document.getElementById("myModal").style.display
        modal.style.display = "block";
      }

      span.onclick = function() {
        console.log("Hello world!");
        document.getElementById("myModal").style.display = "none"
      }

      window.onclick = function(event) {

        if (event.target == document.getElementById("myModal")) {
          document.getElementById("myModal").style.display = "none"
        }
      }	
    </script>

    <script>
      var modal2 = document.getElementById('myModal2');


      var btn2 = document.getElementById("btn2");


      var span2 = document.getElementsByClassName("close2")[0];


      btn2.onclick = function() {
        document.getElementById("myModal2").style.display
        modal2.style.display = "block";
      }


      span2.onclick = function() {
        document.getElementById("myModal2").style.display = "none"
      }


      window.onclick = function(event) {
        if (event.target == document.getElementById("myModal2")) {
          document.getElementById("myModal2").style.display = "none"
        }
      }


    </script>
    
  </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>