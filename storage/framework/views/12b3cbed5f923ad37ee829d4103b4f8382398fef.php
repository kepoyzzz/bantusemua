<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/job.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>"Bantu Semua" - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Help-Out</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/job" id="job">Input Job</a></li>
                <li><a href="/showjob" id="showjob">JobList</a></li>
            </ul>
        </div>
    </nav>
    <nav><a href="/" id="Home">Home</a></nav>
    <nav><a href="/register" id="register">Register User</a></nav>
    <nav><a href="/registerAdmin" id="register">Register Admin</a></nav>
    <nav><a href="/login" id="login">Login User</a></nav>
    <nav><a href="/loginAdmin" id="login">Login Admin</a></nav>
    <main>
        <?php echo $__env->yieldContent('main'); ?>
    </main>
</body>
</html>