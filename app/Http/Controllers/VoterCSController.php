<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\VoterCS;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\CorporateSingleContest;
use App\Notifications\CSVoterRegistrationNotification;
use Carbon\Carbon;

class VoterCSController extends Controller
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
        $voters = VoterCS::where('vendor_id', $vendor_id)->orderBy('name', 'ASC')->paginate(20);
        $votersnotactivated = VoterCS::where('haspaid', false)->where('status', 2)->get();
        return view ('contest.cs.voter_cs.voter_cs_all', compact('voters', 'votersnotactivated'));

    }



  
    public function search(Request $request){

        $voters = VoterCS::where('name', 'LIKE', "%{$request->searchVoters}%")->
                            orWhere('email', 'LIKE', "%{$request->searchVoters}%")->paginate(20);
   
    return view ('contest.cs.voter_cs.voter_cs_search', compact('voters'));
    
   }
     








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = Auth::user()->id;
$vendor = Vendor::where('user_id', $userid)->first();
$vendor_id = $vendor->id;

$contests = CorporateSingleContest::with('vendor')->where('vendor_id', $vendor_id)->get();

return view ('contest.cs.voter_cs.voter_cs_add', compact('contests', 'vendor_id'));
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
    $voter = new VoterCS();           
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
return redirect()->route('corporatesinglevoter.all')->with( $notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VoterCS  $voterCS
     * @return \Illuminate\Http\Response
     */
    public function show(VoterCS $voterCS)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VoterCS  $voterCS
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                
        $voter = VoterCS::findorFail($id);
        return view ('contest.cs.voter_cs.voter_cs_edit', compact('voter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VoterCS  $voterCS
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $voter = VoterCS::find($request->id);
         $voter->name =  $request->name;
         $voter->email =  $request->email;           
        $voter->vote_passcode = strtoupper(Str::random(12));
         

        $voter->save();




$notification = array(
    'message' => 'Voter Edited Successfully', 
    'alert-type' => 'success'
    );
    return redirect()->route('corporatesinglevoter.all')->with( $notification);
    
    




}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VoterCS  $voterCS
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $voter = VoterCS::findorFail($id);
        $voter->delete();

        $notification = array(
            'message' => 'Voter Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('corporatesinglevoter.all')->with( $notification);
            }




            public function activate()
            {
                $userid = Auth::user()->id;
                 $vendor = Vendor::where('user_id', $userid)->first();
                $vendor_id = $vendor->id;
                $voters = VoterCS::where('vendor_id', $vendor_id)->where('haspaid', false)->get();



                return view('contest.cs.voter_cs.voter_activate', compact('voters', 'vendor'));
                
            

                    
            
            
            
            }
        
        
        






}







