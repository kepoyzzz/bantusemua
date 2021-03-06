@extends('earlyLayout')
@section('title','viewdonationearly')
@section('main')
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
      @foreach($result as $donations)
        <div class="col-sm-4">
          <div class="panel panel-primary">
            <div class="panel-heading"><h5>{{$donations->donateTitle}}</h5></div>
            <div class="panel-body"><img src="donasibencana/{{$donations->donatePicture}}" class="img-responsive" style="width:100%" alt="Image"></div>
            <div class="panel-footer">
              <div class="table-responsive-md">
                <table class="table">
                  <tr>
                    <td>
                      Requester: 
                    </td>
                    <td>
                      {{$donations->requesterDonation}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Phone Number: 
                    </td>
                    <td>
                      {{$donations->phoneDonation}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Email: 
                    </td>
                    <td>
                      {{$donations->emailDonation}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Total Donation : 
                    </td>
                    <td>
                      Rp. {{$donations->totalDonation}},00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Target Donation :
                    </td>
                    <td>
                      Rp. {{$donations->targetDonation}},00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Donation Time : 
                    </td>
                    <td>
                      {{$donations->donateTime}}
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Description:
                    </td>  
                    <td>
                      {{$donations->descriptionDonation}}
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