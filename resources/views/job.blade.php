@extends('layout')
@section('title','job')
@section('main')
<div class="jumbotron">
      <div class="container text-center">
        <h1>Add Job</h1>      
        <p>There are many volunteer that will help you.</p>
      </div>
</div>
<div class="container">
    <form method="POST" action="/job" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="Job Name">Job Name</label>
                <input type="text" class="form-control" name="Jobname">
            </div>
            <div class="form-group">
                <label for="Job Location">Job Location</label>
                <input type="text" class="form-control" name="Joblocation">
            </div>
            <div class="form-group">
                <label for="Person In Charge">Requester</label> 
                <input type="text" class="form-control" name="Jobgiver">
            </div>
            <div class="form-group">
                <label for="Phone">Phone Number</label> 
                <input type="text" class="form-control" name="Jobphone">
            </div>
            <div class="form-group">
                <label for="Person In Charge">Email</label> 
                <input type="text" class="form-control" name="Jobemail">
            </div>
            <div class="form-group">
                <label for="Job Description">Job Description</label>
                <textarea name="Jobspecification" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="Input Your Picture">Input Picture</label>
                <input type="file" class="form-control-file" name="JobPict">
            </div>    
            <button type="submit" name="button" class="btn btn-primary" onclick="myFunction()">Submit</button>
    </form>
</div>
<script>
function myFunction() {
  alert("Job Added Successfully");
}
</script>
@endsection