<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/loginregister.css">
        <link rel="stylesheet" type="text/css" href="css/job.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bantu Semua</title>

    </head>
    <body>
        <div id="centering">
            <div id="kotak">
                <div id="menu">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#login">Login</a></li>
                            <li><a data-toggle="tab" href="#register">Register</a></li>
                        </ul>
                </div>
                <!-- {{--  tutup menu --}} -->
                <div class="tab-content">
                    <div id="login" class="tab-pane fade in active">
                        <h1>Login</h1>
                        <hr style="height:3px;border:none;color:blue;background-color:blue;">
                        <img src="Logo D'online Clothes.png" class="logo" />
                        <form action="/login" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                            <input type="text" placeholder="Email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="remember"> Remember me
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn form-control btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                    <!-- {{--  tutup login --}} -->
                    <div id="register" class="tab-pane fade">
                        <h1>Register</h1>
                        <hr style="height:3px;border:none;color:blue;background-color:blue;">
                        <img src="images/bantusemua.png" class="logo" />
                        <form action="/register" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" placeholder="Name" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" name="confirm_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" placeholder="PhoneNumber" name="confirm_password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Gender: </label>
                                <label class="radio-inline"><input type="radio" name="gender" value="male" checked>Male</label>
                                <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="address" placeholder="Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Choose your Profile Picture</label>
                                <input type="file" name="profilePicture" class="btn btn-primary">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="register" class="btn form-control btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                    <!-- {{--  tutup register --}} -->
                </div>
                <!-- {{--  tutup tab-control --}} -->
            </div>
            <!-- {{--  tutup kotak --}} -->
        </div>
        <!-- {{--  tutup centering --}} -->
    </body>
</html>
