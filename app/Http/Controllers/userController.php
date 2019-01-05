<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
        $users->password = $request->get('password');
        
        $users->save();
        return redirect('/');
    }

    public function login(Request $request){
        $email = $request->input('email');
        $pass = $request->input('password');
        $data = DB::select('select userID from users where email=? and password=?', [$email, $pass]);
        
        $name = User::where('email', $request->email)->first();
        Session::put('userLogin', $name);
        Session::put('userName', $name->name);
        Session::put('userID', $name->userID);

        if(count($data)){
            return redirect('/welcome');
        }
        else{
            echo "wrong email or password";
            return redirect('/login');
        }
    }
    public function profile($email){
        $user = User::where('email', $email)->firstOrFail();
        return view('profile.index', ['user' => $user] )->withUsers($users);
    }

    public function showProfile(){
        $name = Session::get('userName');
        $result = DB::select('select * from users where name=?', [$name]);
        return view('profileUser', compact('result'));
    }
    
    public function updateProfile(Request $request){
        $userID = Session::get('userID');
        $users = User::where('userID', 'LIKE', $userID)->first();

        $upict = $request->userpict;
        $upict->move('image',$upict->getClientOriginalName());

        $users->name = $request->input('name');
        $users->dateofbirth = $request->input('dob');
        $users->location = $request->input('location');
        $users->gender = $request->input('gender');
        $users->email = $request->input('email');
        $users->profilepicture = $upict->getClientOriginalName();
        $users->phonenumber = $request->input('phone');
        $users->password = bcrypt($request->get('password'));
        Session::put('userName', $users->name);
        
        $users->save();
        return redirect('/showProfile');
    }

}