<?php

namespace App\Http\Controllers;

use App\Models\Contestant;
use App\Models\VotePurchase;
use Illuminate\Http\Request;
use App\Models\Contestantmulti;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentControllerMulti extends Controller
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
       $voterdata->voterName = 'kingsley';
       $voterdata->contestant_id = $contestant_id;
       $voterdata->voterEmail = $voter_email;
       $voterdata->pricePerVote = $pricepervote;
       $voterdata->totalAmountPaid =  $pricefromkobotothousand;
       $voterdata->numberofVotesPurchased =  $totalvotetoadd;
       $voterdata->save();


        $contestant = Contestantmulti::find($contestant_id);
        $contestant->increment('vote_total',$totalvotetoadd);
        $contestant->save();

       
        

        return view('frontend.payment_success', compact(['paymentDetails', 'voter_email', 'contestant', 'slug', 'totalvotetoadd','contest_id']));
    }


}



















