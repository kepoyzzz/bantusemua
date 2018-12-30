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
        $jpict = $request->JobPict;
        $jpict->move('jobpictures',$jpict->getClientOriginalName());
        
        $jobs = new Job();
        $jobs->JobName = $request->input('Jobname');
        $jobs->JobLocation = $request->input('Joblocation');
        $jobs->JobSpecification = $request->input('Jobspecification');
        $jobs->JobGiver = $request->input('Jobgiver');
        $jobs->JobPicture = $jpict->getClientOriginalName();
        
        $jobs->save();
        return view('job');
    }

    public function getAll(){
        $jobs = Job::all();
        return view('viewjob', compact('jobs'));
    }

    public function search(Request $request){
            $search = $request->get('Jobname');
            $result = Job::where('Jobname', 'LIKE', '%'.$search.'%')->paginate(12);
            $result->appends($request->only('Jobname'));
            return view('viewjob', compact('result'));
     }    
}
