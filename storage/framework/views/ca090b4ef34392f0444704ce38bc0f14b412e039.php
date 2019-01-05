<?php $__env->startSection('title'); ?>
<?php $__env->startSection('main'); ?>
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/loginregister.css">
        <link rel="stylesheet" type="text/css" href="css/job.css">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

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
            <?php echo e(csrf_field()); ?>

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
                    <input type="text" name ="password" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="dob">Profile Picture</label>
                    <input type = "file" name="userpict" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> <br>
                <button type="submit" name="button" class="btn btn-primary">Update</button>
            </form>
        </div>
    </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('earlyLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>