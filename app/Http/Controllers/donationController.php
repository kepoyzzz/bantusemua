<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\carbon;
use App\Donation;

class donationController extends Controller
{
    //
    public function insert(Request $request){
        $dpict = $request->DonatePict;
        $dpict->move('donasibencana',$dpict->getClientOriginalName());
        
        $donations = new Donation();
        $donations->donatePicture = $dpict->getClientOriginalName();
        $donations->donateTitle = $request->input('DonateTitle');
        $donations->requesterDonation = $request->input('DonateName');
        $donations->totalDonation = $request->input('TotalDon');
        $donations->targetDonation = $request->input('TargetDon');
        $donations->donateTime = $request->input('DonTime');
        $donations->descriptionDonation = $request->input('DonDesc');
       
        $donations->save();
        return view('insertdonation');
    }

    public function getAll(){
        $donate = Donation::all();
        return view('viewdonation', compact('donate'));
    }

    public function searching(Request $request){
            $search = $request->get('donateTitle');
            $result = Donation::where('donateTitle', 'LIKE', '%'.$search.'%')->paginate(12);
            $result->appends($request->only('donateTitle'));
            return view('viewdonation', compact('result'));
     }    
}
