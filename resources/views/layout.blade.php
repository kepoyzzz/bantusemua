<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <nav><a href="/" id="Home">Home</a></nav>
    <nav><a href="/register" id="register">Register User</a></nav>
    <nav><a href="/registerAdmin" id="register">Register Admin</a></nav>
    <nav><a href="/login" id="login">Login User</a></nav>
    <nav><a href="/loginAdmin" id="login">Login Admin</a></nav>
    <nav><a href="/job" id="job">Job</a></nav>
    <nav><a href="/showjob" id="showjob">JobList</a></nav>
    <main>
        @yield('main')
    </main>
</body>
</html>