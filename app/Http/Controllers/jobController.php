<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\carbon;
use App\Job;

class jobController extends Controller
{
    public function insert(Request $request){
        $jname = $request->input('Jobname');
        $jlocation = $request->input('Joblocation');
        $jspecification = $request->input('Jobspecification');
        $jgiver = $request->input('Jobgiver');
        $time = Carbon::now()->toDateTimeString();

        echo DB::insert('insert into jobs(id, jobname, joblocation, jobspecification, jobgiver,created_at) values (?, ?, ?, ?, ?, ?)', 
        [null, $jname, $jlocation, $jspecification, $jgiver, $time]);
    }

    public function getAll(){
        $jobs = Job::all();
        return view('viewjob', compact('jobs'));
    }

    public function search(Request $request){
            $search = $request->get('jobname');
            $result = Job::where('jobname', 'LIKE', '%'.$search.'%')->paginate(10);
            $result->appends($request->only('jobname'));
            return view('viewjob', compact('result'));
     }    
}
