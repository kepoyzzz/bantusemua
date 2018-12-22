<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class userController extends Controller
{
    public function register(Request $request){
        //print_r($request->input());
        $name = $request->input('name');
        $email = $request->input('email');
        $location = $request->input('location');
        $dob = $request->input('dob');
        $gender = $request->input('gender');
        $phone = $request->input('phone');
        $pass = $request->input('password');
        $time = Carbon::now()->toDateTimeString();
        $token = $request->input('_token');
        echo DB::insert('insert into users(id, name, dateofbirth, location, gender, email, phonenumber, password, remember_token, created_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        [null, $name, $dob, $location, $gender, $email, $phone, $pass, $token, $time]);
    }

    public function login(Request $request){
        $email = $request->input('email');
        $pass = $request->input('password');
        $data = DB::select('select id from users where email=? and password=?', [$email, $pass]);
         
        if(count($data)){
            echo "You have sucessfully logged in!";
        }
        else{
            echo "try again!";
        }
    }

}