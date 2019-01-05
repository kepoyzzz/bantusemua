<?php $__env->startSection('title'); ?>
<?php $__env->startSection('main'); ?>
<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
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
        
            <!-- <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?> -->

            <div class="content">
            <form action="<?php echo e(URL::to('/login')); ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> <br>
                <button type="submit" name="button" class="btn btn-primary">Login</button>
            </form>
            </div>
    </body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('earlyLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>