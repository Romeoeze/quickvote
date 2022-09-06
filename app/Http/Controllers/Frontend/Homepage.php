<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Logo;

use App\Models\Slider;
use App\Models\Contest;
use App\Models\VoterCM;
use App\Models\VoterCS;
use App\Models\VoteLogCM;
use App\Models\VoteLogCS;
use App\Models\Contestant;
use App\Models\Multicontest;
use Illuminate\Http\Request;
use App\Models\Contestantmulti;
use App\Http\Controllers\Controller;
use App\Models\CorporateMultiContest;
use Intervention\Image\Facades\Image;
use App\Models\CorporateSingleContest;
use App\Models\CorporateContestantmulti;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\CorporateSingleContestant;

class Homepage extends Controller
{
 

    public function index(){

    $contests = Contest::where('end_date', '>=' , Carbon::now())->where('status', '=' , 1)->with('vendor')->get();
    $contestmultis = Multicontest::where('end_date', '>=' , Carbon::now())->where('status', '=' , 1)->with('vendor')->get();
 

    $brands = Logo::latest()->get();
        return view('frontend.home', compact('brands', 'contestmultis', 'contests'));
    }



    public function EditSlide(){
        $sliderData= Slider::FindorFail(1);
        return view('frontend.homepageslider', compact('sliderData'));
    }


    
       
    

    public function UpdateSlide (Request $request){

        $sliderID = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = date('Y-m-d-H:i:s')."-".$image->getClientOriginalName();  // 3434343443.jpg

            Image::make($image)->resize(1200,740)->save('uploads/slides/'.$name_gen);
            $save_url = 'uploads/slides/'.$name_gen;

            Slider::findOrFail($sliderID)->update([
                'description' => $request->description,
                'image' => $save_url,

            ]); 
            $notification = array(
            'message' => 'Home Slide Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            Slider::findOrFail($sliderID)->update([
                'description' => $request->description,
            
            ]); 

            $notification = array(
            'message' => 'Home Slide Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     } // End Method 


 



public function new(){
    return view('newfrontend.master');
}

public function about(){
    return view('frontend.about');
}


public function contact(){
    return view('frontend.contact');
}

public function searchcontest (Request $request){

     $single = Contest::where('contest_name', 'LIKE', "%{$request->search}%")->get();
     $multi = Multicontest::where('contest_name', 'LIKE', "%{$request->search}%")->get();



     $contests =  $single->merge($multi);




     return view ('frontend.contest_search', compact('contests'));
 
}
     

public function contestarchive(){
    $contestssingle = Contest::where('end_date', '>=' , Carbon::now())->where('status', '=' , 1)->with('vendor')->get();
    $contestmultis = Multicontest::where('end_date', '>=' , Carbon::now())->where('status', '=' , 1)->with('vendor')->get();
 
    $contests =  $contestssingle->concat($contestmultis);
    $contests = Contest::OrderBy('created_at', 'DESC')->with('vendor')->paginate(20);
    return view('frontend.contest_archive', compact('contests'));
}
    

public function ContestView($slug){

    $contests = Contest::where('slug', $slug)->first();

    $now = Carbon::now('Africa/Lagos');
    $enddate = Carbon::parse($contests->end_date);
    $expiry = $enddate->diffInSeconds($now);


    return view('frontend.show_contest', compact(['contests', 'expiry']));

  
  
}
    




public function ContestantUserVote($slug){

    $contestant = Contestant::where('slug', $slug)
                        ->with('contest')
                          ->first();


    return view('frontend.contestant_user_vote', compact('contestant'));

  
  
}
    




public function ContestantUserSearch(Request $request){

    $contestant = Contestant::where('id', $request->contestants)
                        ->with('contest')
                          ->first();


    return view('frontend.contestant_user_vote', compact('contestant'));

  
  
}



public function MultiContestView($slug){

    $contestsmulti = Multicontest::where('slug', $slug)->first();

    $now = Carbon::now('Africa/Lagos');
    $enddate = Carbon::parse($contestsmulti->end_date);
    $expiry = $enddate->diffInSeconds($now);


    return view('frontend.multi.multi_show_contest', compact(['contestsmulti', 'expiry']));

  
  
}








public function MultiContestantUserVote($slug){

    $contestant = Contestantmulti::where('slug', $slug)
                        ->with('contest')->with('category')
                          ->first();


    return view('frontend.multi.multi_contestant_user_vote', compact('contestant'));

  
  
}
    







public function CorporateSingleContestUserView($slug){

   
    $contests = CorporateSingleContest::where('slug', $slug)->first();
    $now = Carbon::now('Africa/Lagos');
    $enddate = Carbon::parse($contests->end_date);
    $expiry = $enddate->diffInSeconds($now);


    return view('frontend.cs.cs_show_contest', compact(['contests', 'expiry']));


  
  
  
}








public function CorporateSingleContestContestantUserVote($slug){

    $contestant = CorporateSingleContestant::where('slug', $slug)
                        ->with('contest')
                          ->first();


    return view('frontend.cs.cs_contestant_user_vote', compact('contestant'));

  
  
}




public function CorporateSingleContestantUserSearch(Request $request){

    $contestant = CorporateSingleContestant::where('id', $request->contestants)
                        ->with('contest')
                          ->first();


    return view('frontend.cs.cs_contestant_user_vote', compact('contestant'));

  
  
}






public function CorporateSingleContestantAddVote (Request $request){

   //validate voters id and email



   $validVoter = VoterCS::where('email', $request->email)->where('vote_passcode', $request->passcode)->where('hasvoted', false)->where('status', 1)->first();
   $validVoterButHasVoted = VoterCS::where('email', $request->email)->where('vote_passcode', $request->passcode)->where('hasvoted', true)->where('status', 1)->first();

   $validVoterButnotactivated = VoterCS::where('email', $request->email)->where('vote_passcode', $request->passcode)->where('hasvoted', false)->where('status', 2)->first();



   $contest = CorporateSingleContest::where('id', $request->contest_id);
   $contestant = CorporateSingleContestant::where('id', $request->contestant_id)->first();;



   if($validVoter){

    $validVoter->hasVoted = true;
    $validVoter->save();

//increase votecount

    $contestant->increment('vote_total', 1);


//record voters detail on the log model


    $voterRecord = new VoteLogCS;

    $voterRecord->voter_id = $validVoter->id;
    $voterRecord->contest_id = $request->contest_id;
    $voterRecord->contestant_id = $request->contestant_id;
    $voterRecord->numberOfVotes = 1;
    $voterRecord->save();
//show confirmation prompt
  
    Alert::html('<h2 style="color:orange;">Voting Successful</h2>', '<p>Our system has <b>automatically added 1 vote point</b> to the intial vote count of your selected contenstant. Thank You.</p>', 'success'); 
    
    
    
    return redirect()->back();
   }





   else if($validVoterButHasVoted ){

  
  

  
    Alert::html('<h2 style="color:red;">Duplicate Vote Attempt Detected</h2>', '<p> <b>You cannot vote more than once</b> Thank You.</p>', 'error'); 
    
    
    
    return redirect()->back();
   }






   else if($validVoterButnotactivated ){

  
  

  
    Alert::html('<h2 style="color:red;">Unaccreditated Voter</h2>', '<p> <b>contact the election vendor for more deatils</b> Thank You.</p>', 'error'); 
    
    
    
    return redirect()->back();
   }






   else{

    Alert::html('<h2 style="color:red;">An Error Occured</h2>', '<p>Invalid Credentails. Kindly <b>check your accredited email address</b> for the correct credentails and try again.</p>', 'error'); 
    
    return redirect()->back();

   }
   //increase vote count for selected contestant

   //disable voter from voting again


   //record the log

  //5PF13UVHEPRJ
  
}









public function CorporateMultiContestUserView($slug){

   
    $contestsmulti = CorporateMultiContest::where('slug', $slug)->first();

    $now = Carbon::now('Africa/Lagos');
    $enddate = Carbon::parse($contestsmulti->end_date);
    $expiry = $enddate->diffInSeconds($now);


    return view('frontend.cmulti.multi_show_contest', compact(['contestsmulti', 'expiry']));





  
  
  
}





public function CorporateMultiContestContestantUserVote($slug){

    $contestant = CorporateContestantmulti::where('slug', $slug)
                        ->with('contest')
                          ->first();


    return view('frontend.cmulti.cm_contestant_user_vote', compact('contestant'));

  
  
}






public function CorporateMultiContestantAddVote (Request $request){

    //validate voters id and email
 
//  dd($request->contestant_category_id);
 
    $validVoter = VoterCM::where('email', $request->email)->where('vote_passcode', $request->passcode)->where('status', 1)->first();
  
 
    $validVoterButnotactivated = VoterCM::where('email', $request->email)->where('vote_passcode', $request->passcode)->where('hasvoted', false)->where('status', 2)->first();

  

  
 
 
    
    $contest = CorporateMultiContest::where('id', $request->contest_id);
    $contestant = CorporateContestantmulti::where('id', $request->contestant_id)->first();;
 
 
    if($validVoter){

        $validVoterID =$validVoter->id;
        $validVoterButHasVoted = VoteLogCM::where('voter_id', $validVoterID )->where('contestant_category_id', $request->contestant_category_id)->first();
 
     
     if($validVoterButHasVoted ){


        Alert::html('<h2 style="color:red;">Duplicate Vote Attempt Detected</h2>', '<p> <b>You cannot vote more than once on the same category.</b> Thank You.</p>', 'error'); 
     
     
     
        return redirect()->back();

     }
     
     else{
        $validVoter->hasVoted = true;
        $validVoter->save();
    
    //increase votecount
    
        $contestant->increment('vote_total', 1);
    
    
    //record voters detail on the log model
    
    
        $voterRecord = new VoteLogCM;
    
        $voterRecord->voter_id = $validVoter->id;
        $voterRecord->contest_id = $request->contest_id;
        $voterRecord->contestant_id = $request->contestant_id;
        $voterRecord->contestant_category_id = $request->contestant_category_id;
        $voterRecord->numberOfVotes = 1;
        $voterRecord->save();
    //show confirmation prompt
      
        Alert::html('<h2 style="color:orange;">Voting Successful</h2>', '<p>Our system has <b>automatically added 1 vote point</b> to the intial vote count of your selected contenstant. Thank You.</p>', 'success'); 
        
        
        
        return redirect()->back();
     }
     
    
    }
 
 

 
 
 
 
 
    else if($validVoterButnotactivated ){
 
   
   
 
   
     Alert::html('<h2 style="color:red;">Unaccreditated Voter</h2>', '<p> <b>contact the election vendor for more deatils</b> Thank You.</p>', 'error'); 
     
     
     
     return redirect()->back();
    }
 
 
 
 
 
 
    else{
 
     Alert::html('<h2 style="color:red;">An Error Occured</h2>', '<p>Invalid Credentails. Kindly <b>check your accredited email address</b> for the correct credentails and try again.</p>', 'error'); 
     
     return redirect()->back();
 
    }
    //increase vote count for selected contestant
 
    //disable voter from voting again
 
 
    //record the log
 
   //5PF13UVHEPRJ
   
 }
 
 
 
 
 



















 }
