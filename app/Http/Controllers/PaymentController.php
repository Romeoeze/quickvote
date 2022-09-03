<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vendor;
use App\Models\VoterCM;
use App\Models\VoterCS;
use App\Models\Contestant;
use App\Models\VotePurchase;
use Illuminate\Http\Request;
use App\Models\Contestantmulti;
use App\Models\VotePurchaseMulti;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Unicodeveloper\Paystack\Facades\Paystack;
use App\Notifications\CSVoterRegistrationNotification;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
       
      
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


    public function  paymentprocess(){
        $paymentDetails = Paystack::getPaymentData();
        $type = $paymentDetails['data']['metadata']['contest_type'];
     



        if ($type == 'multi'){
            $voter_name = $paymentDetails['data']['customer']['first_name'];
            $voter_email = $paymentDetails['data']['customer']['email'];
            $amount = $paymentDetails['data']['amount'];
            $contestant_id = $paymentDetails['data']['metadata']['contestant_id'];
            $contest_id = $paymentDetails['data']['metadata']['contest_id'];
            $pricepervote = $paymentDetails['data']['metadata']['pricepervote'];
            $slug = $paymentDetails['data']['metadata']['slug'];
            $pricefromkobotothousand =  $amount / 100;
            $totalvotetoadd = $pricefromkobotothousand / $pricepervote;

            $voterdata = new VotePurchaseMulti();
            $voterdata->voterName = 'hello';
            $voterdata->contestant_id = $contestant_id;
            $voterdata->voterEmail = $voter_email;
            $voterdata->pricePerVote = $pricepervote;
            $voterdata->totalAmountPaid =  $pricefromkobotothousand;
            $voterdata->numberofVotesPurchased =  $totalvotetoadd;
            $voterdata->save();
     
     
             $contestant = Contestantmulti::find($contestant_id);
             $contestant->increment('vote_total',$totalvotetoadd);
             $contestant->save();
    
            return view('frontend.multi.multi_payment_success', compact(['paymentDetails', 'voter_email', 'contestant', 'slug', 'totalvotetoadd','contest_id']));

        }




        elseif ($type == 'single'){
            $voter_name = $paymentDetails['data']['customer']['first_name'];
            $voter_email = $paymentDetails['data']['customer']['email'];
            $amount = $paymentDetails['data']['amount'];
            $contestant_id = $paymentDetails['data']['metadata']['contestant_id'];
            $contest_id = $paymentDetails['data']['metadata']['contest_id'];
            $pricepervote = $paymentDetails['data']['metadata']['pricepervote'];
            $slug = $paymentDetails['data']['metadata']['slug'];
            $pricefromkobotothousand =  $amount / 100;
            $totalvotetoadd = $pricefromkobotothousand / $pricepervote;
            $voterdata = new VotePurchase();
            $voterdata->voterName = 'New';
            $voterdata->contestant_id = $contestant_id;
            $voterdata->voterEmail = $voter_email;
            $voterdata->pricePerVote = $pricepervote;
            $voterdata->totalAmountPaid =  $pricefromkobotothousand;
            $voterdata->numberofVotesPurchased =  $totalvotetoadd;
            $voterdata->save();
     
     
             $contestant = Contestant::find($contestant_id);
             $contestant->increment('vote_total',$totalvotetoadd);
             $contestant->save();
            return view('frontend.payment_success', compact(['paymentDetails', 'voter_email', 'contestant', 'slug', 'totalvotetoadd','contest_id']));
     
           }
    


           elseif($type == 'corporatemulti'){


            $amount = $paymentDetails['data']['amount'];
            $voter_email = $paymentDetails['data']['customer']['email'];
            $userid = Auth::user()->id;
            $vendor = Vendor::where('user_id', $userid)->first();
           $vendor_id = $vendor->id;
            $voters = VoterCM::where('vendor_id', $vendor_id)->where('haspaid', false)->get();

                $voters_data = $voters->pluck('name', 'email');
             
               
               foreach ($voters as $voter){
                $csvoter_details = [
                    'name' => $voter->name,
                    'passcode' => $voter->vote_passcode,
                    'email' => $voter->email,
                    'contest_name' =>$voter->contest->contest_name,
                    'start' => Carbon::parse($voter->contest->start_date)->format('d-m-Y'),
                    'end' =>  Carbon::parse($voter->contest->end_date)->format('d-m-Y'),
                    'url' => route('corporatemulticontest.user.view', $voter->contest->slug) 
                ];

                $voter->haspaid = true;
                $voter->status = 1;
                $voter->save();

                $delay = now()->addSeconds(5);
                $voter->notify((new CSVoterRegistrationNotification($csvoter_details))->delay($delay));
            }
           
           
            $notification = array(
                'message' => 'Voter Activated Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('corporatemultivoter.all')->with( $notification);
      

           }








        else{

               
            $amount = $paymentDetails['data']['amount'];
            $voter_email = $paymentDetails['data']['customer']['email'];
            $userid = Auth::user()->id;
            $vendor = Vendor::where('user_id', $userid)->first();
           $vendor_id = $vendor->id;
            $voters = VoterCS::where('vendor_id', $vendor_id)->where('haspaid', false)->get();

                $voters_data = $voters->pluck('name', 'email');
             
               
               foreach ($voters as $voter){
                $csvoter_details = [
                    'name' => $voter->name,
                    'passcode' => $voter->vote_passcode,
                    'email' => $voter->email,
                    'contest_name' =>$voter->contest->contest_name,
                    'start' => Carbon::parse($voter->contest->start_date)->format('d-m-Y'),
                    'end' =>  Carbon::parse($voter->contest->end_date)->format('d-m-Y'),
                    'url' => route('corporatesinglecontest.user.view', $voter->contest->slug) 
                ];

                $voter->haspaid = true;
                $voter->status = 1;
                $voter->save();

                $delay = now()->addSeconds(5);
                $voter->notify((new CSVoterRegistrationNotification($csvoter_details))->delay($delay));
            }
           
           
            $notification = array(
                'message' => 'Voter Activated Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('corporatesinglevoter.all')->with( $notification);
      

        }







      
       
        

    }















}
