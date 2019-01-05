<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Session;
use Carbon\carbon;
use App\ApplyJob;
use App\Job;
use App\User;


class ApplyJobController extends Controller
{
    //
    public function add(Request $request, $id){
        $jobs = Job::where('id', '=', $id)->first();
        $userLogin = $request->session()->get('userLogin');
       
        $apply = new ApplyJob();
        $apply->id = $id;
        $apply->userID = $userLogin->userID;
        $apply->JobName = $jobs->JobName;
        $apply->JobLocation = $jobs->JobLocation;
        $apply->JobSpecification = $jobs->JobSpecification;
        $apply->JobPhone = $jobs->JobPhone;
        $apply->JobGiver = $jobs->JobGiver;
        $apply->JobEmail = $jobs->JobEmail;
        $apply->JobPicture = $jobs->JobPicture;

        $jobs->save();
        $apply->save();
        return redirect('/ApplyJob');
    }

    public function view(Request $request){
        $userLogin = $request->session()->get('userLogin');
        $result = ApplyJob::where('userID', '=', $userLogin->userID)->paginate(5);

        return view('/ApplyJob', compact('result'));
    }

    
}
