@extends('Layout')
@section('title')
@section('main')
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Bantu Semua</title>

        <!-- Styles -->
        <style>
            body {
                background-color: orange;
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: left;
                margin-left: 3%;
                margin-right: 3%;
                margin-top: 3%;
                margin-bottom: 3%;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <form action="/editProfile" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name ="name" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name ="location" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="dob">Date Of Birth</label>
                    <input type="date" name ="dob" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                        <label class="form-check-label" for="pria">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                        <label class="form-check-label" for="wanita">
                            Wanita
                        </label>
                    </div> 
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" name ="phone" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="dob">Password</label>
                    <input type="password" name ="password" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="dob">Profile Picture</label>
                    <input type = "file" name="userpict" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}"> <br>
                <button type="submit" name="button" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
</html>
@endsection