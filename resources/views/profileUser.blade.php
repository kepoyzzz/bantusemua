@extends('layout')
@section('title','profileUser')
@section('main')
<head>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<div class="row">
@foreach($result as $user)
    <div class="col-sm-3">
        <img src="image/{{$user->profilepicture}}" width=50% style="margin-top:30%;margin-left:20%">
    </div>
    <div class="col-sm-6" style="margin-bottom:3%;margin-top:3%">
        <H2>Profile</H2>
        
        <div class="table-responsive-sm">
            
                <table class="table">
                    <tr>
                        <td>Name : </td>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <td>Date Of Birth : </td>
                        <td>{{$user->dateofbirth}}</td>
                    </tr>
                    <tr>
                        <td>Location : </td>
                        <td>{{$user->location}}</td>
                    </tr>
                    <tr>
                        <td>Gender : </td>
                        <td>{{$user->gender}}</td>
                    </tr>
                    <tr>
                        <td>Email : </td>
                        <td>{{$user->email}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number : </td>
                        <td>{{$user->phonenumber}}</td>
                    </tr>
                </table>
            @endforeach
        </div>
        <form action="/editProfile" method="GET" class="">
            <button type="submit" class="btn btn-primary">Edit Profile</button>
        </form>
    </div>
    <div class="col-sm-3">
    
    </div>
    </div>
</div>
@endsection