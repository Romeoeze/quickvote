<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\VoterCM;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CorporateMultiContest;

class VoterCMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $vendor = Vendor::where('user_id', $userid)->first();
        $vendor_id = $vendor->id;
        $voters = VoterCM::where('vendor_id', $vendor_id)->orderBy('name', 'ASC')->paginate(20);
        $votersnotactivated = VoterCM::where('haspaid', false)->where('status', 2)->get();
        return view ('contest.cm.voter_cs.voter_cs_all', compact('voters', 'votersnotactivated'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function search(Request $request){

        $voters = VoterCM::where('name', 'LIKE', "%{$request->searchVoters}%")->
                            orWhere('email', 'LIKE', "%{$request->searchVoters}%")->paginate(20);
   
    return view ('contest.cm.voter_cs.voter_cs_search', compact('voters'));
    
   }
     






    public function create()
    {
        $userid = Auth::user()->id;
        $vendor = Vendor::where('user_id', $userid)->first();
        $vendor_id = $vendor->id;
        
        $contests = CorporateMultiContest::with('vendor')->where('vendor_id', $vendor_id)->get();
        
        return view ('contest.cm.voter_cs.voter_cs_add', compact('contests', 'vendor_id'));
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voterslength = $request->name;

//START OF I LOOP


for ($i=0; $i < count($voterslength); $i++) {     
    $voter = new VoterCM();           
    $voter->name =  $request->name[$i];
    $voter->email =  $request->email[$i];
    $voter->contest_id = $request->contest_id; 
    $voter->vendor_id = $request->vendor_id;            
    $voter->vote_passcode = strtoupper(Str::random(12));
    $voter->save();



    // $csvoter_details 


}

$notification = array(
'message' => 'Voter(s) Added Successfully', 
'alert-type' => 'success'
);
return redirect()->route('corporatemultivoter.all')->with( $notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VoterCM  $voterCM
     * @return \Illuminate\Http\Response
     */
    public function show(VoterCM $voterCM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VoterCM  $voterCM
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voter = VoterCM::findorFail($id);
        return view ('contest.cs.voter_cs.voter_cs_edit', compact('voter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VoterCM  $voterCM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $voter = VoterCM::find($request->id);
        $voter->name =  $request->name;
        $voter->email =  $request->email;           
       $voter->vote_passcode = strtoupper(Str::random(12));
        

       $voter->save();




$notification = array(
   'message' => 'Voter Edited Successfully', 
   'alert-type' => 'success'
   );
   return redirect()->route('corporatemultivoter.all')->with( $notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VoterCM  $voterCM
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voter = VoterCM::findorFail($id);
        $voter->delete();

        $notification = array(
            'message' => 'Voter Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('corporatemultivoter.all')->with( $notification);
    }




    public function activate()
    {
        $userid = Auth::user()->id;
         $vendor = Vendor::where('user_id', $userid)->first();
        $vendor_id = $vendor->id;
        $voters = VoterCM::where('vendor_id', $vendor_id)->where('haspaid', false)->get();



        return view('contest.cm.voter_cs.voter_activate', compact('voters', 'vendor'));
        
    

            
    
    
    
    }























}
