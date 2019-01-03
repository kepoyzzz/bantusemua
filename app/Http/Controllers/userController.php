<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;
use App\User;

class userController extends Controller
{
    public function register(Request $request){
        $upict = $request->userpict;
        $upict->move('image',$upict->getClientOriginalName());
        
        $users = new User();
        $users->name = $request->input('name');
        $users->dateofbirth = $request->input('dob');
        $users->location = $request->input('location');
        $users->gender = $request->input('gender');
        $users->email = $request->input('email');
        $users->profilepicture = $upict->getClientOriginalName();
        $users->phonenumber = $request->input('phone');
        $users->password = bcrypt($request->get('password'));
        
        $users->save();
    }

    public function login(Request $request){
        $email = $request->input('email');
        $pass = $request->input('password');
        $data = DB::select('select id from users where email=? and password=?', [$email, $pass]);
         
        if(count($data)){
            return redirect('/welcome');
        }
        else{
            echo "wrong email or password";
            return redirect('/login');
        }
    }
    public function profile($email)
    {
    $user = User::where('email', $email)->firstOrFail();
    return view('profile.index', ['user' => $user] )->withUsers($users);
    }
}