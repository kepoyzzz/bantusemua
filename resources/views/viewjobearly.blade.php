@extends('earlyLayout')
@section('title','jobearly')
@section('main')
<html lang="en">
  <body>
    <div class="jumbotron">
      <div class="container text-center">
        <h1>Job List</h1>      
        <p>Get your job here</p>
      </div>
      <form action="/showjobearly" method="get">
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
      @foreach($result as $jobs) 
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><h5>{{$jobs->JobName}}</h5></div>
            <div class="panel-body"><img src="jobpictures/{{$jobs->JobPicture}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
              <div class="table-responsive-md">
                <table class="table">
                  <tr>
                    <td>
                      Person in Charge: 
                    </td>
                    <td>
                    {{$jobs->JobGiver}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Location: 
                    </td>
                    <td>
                    {{$jobs->JobLocation}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Email:
                    </td>
                    <td>
                    {{$jobs->JobEmail}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Phone Number: 
                    </td>
                    <td>
                    {{$jobs->JobPhone}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Description:
                    </td>  
                    <td>
                    {{$jobs->JobSpecification}}
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      {{$result->render()}}
    </div>
  </body>
</html>
@endsection