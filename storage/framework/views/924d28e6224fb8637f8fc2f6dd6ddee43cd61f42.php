<!DOCTYPE html>


<?php $__env->startSection('title','job'); ?>
<?php $__env->startSection('main'); ?>
<html lang="en">
<!-- <head>
  <title>Help out</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./css/job.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head> -->
<body>



<div class="slider">
  <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">PT Apa aja</button>
  <div id="demo" class="collapse">
   apa aja
   <button type="button" class="btn" id="btn1">Desc</button>
   

   <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Relawan untuk dikirim ke palu</p>
    <p>Requirement:-</p>
  </div>
   </div>

   <button type="button" class="btn" id="btn2">Apply</button>

   <div id="myModal2" class="modal">
  <div class="modal-content">
    <span class="close2">&times;</span>
    <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
    <button type="button" class="btn" id="btn3">Yes</button>
    <button type="button" class="btn" id="btn4">No</button>
  </div>
   </div>
 
  </div>
</div>
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