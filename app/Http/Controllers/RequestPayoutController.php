<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Contest;
use App\Models\Multicontest;
use Illuminate\Http\Request;
use App\Models\RequestPayout;
use Illuminate\Support\Facades\Auth;
use App\Models\CorporateMultiContest;
use App\Models\CorporateSingleContest;

class RequestPayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $vendor = Vendor::where('user_id', $user)->first(); 
        
        $payouts = RequestPayout::where('vendor_id', $vendor->id)->paginate(10);

        return view ('contest.payouts.all_payouts', compact('payouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        $contestvendor = Vendor::where('user_id', $user)->first(); 
        $contests_single = Contest::all();
        $contests_multiple = Multicontest::all();
        $all_contests = $contests_single->concat($contests_multiple)->where('vendor_id', $contestvendor->id);
        // dd($all_contests);
        return view ('contest.payouts.request_payout', compact('contestvendor', 'all_contests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $contestvendor = Vendor::where('user_id', $user)->first(); 
        $contests_single = Contest::all();
        $contests_multiple = Multicontest::all();
        $all_contests = $contests_single->concat($contests_multiple)->where('vendor_id', $contestvendor->id);
        $contest_id = $request->contest_id;
        $category_id = $request->category_id;

        return view ('contest.payouts.payout_details', compact('contest_id', 'contestvendor', 'category_id'));
        // echo $contest_id;
        // RequestPayout
       
    }


    public function process (Request $request)
    {
        $user = Auth::user()->id;
        $vendor = Vendor::where('user_id', $user)->first(); 
        $payout_amount = $request->payout_amount;
        $contest_id = $request->contest_details;
        $contests_single = Contest::all();
        $contests_multiple = Multicontest::all();
        $contest = $contests_single->concat($contests_multiple)->where('id', $contest_id)->first();
      

        return view ('contest.payouts.payout_process', compact('contest', 'vendor', 'payout_amount', 'contest_id'));

       
    }


    public function storeRequest (Request $request)
    {
        $user = Auth::user()->id;
        $contestvendor = Vendor::where('user_id', $user)->first(); 
        $contests_single = Contest::all();
        $contests_multiple = Multicontest::all();
        $all_contests = $contests_single->concat($contests_multiple)->where('vendor_id', $contestvendor->id);
        $contest_id = $request->contest_id;




        // return view ('contest.payouts.payout_details', compact('contest_id', 'contestvendor'));
   
        //


        $payoutRequest = new RequestPayout;
        $contests_single = Contest::all();
        $contests_multiple = Multicontest::all();
        $contest = $contests_single->concat($contests_multiple)->where('id', $request->contest_id)->first();     
        $payoutRequest->vendor_id = $request->vendor_id;
        $payoutRequest->contest_id = $request->contest_id;
        $payoutRequest->contest_name = $contest->contest_name;
        $payoutRequest->payout_amount = intval(str_replace(',', '', $request->payout_amount));
        $payoutRequest->proof_of_payment = '/backend/assets/images/no_image.jpg';
        $payoutRequest->account_name = $request->vendor_account_name;
        $payoutRequest->account_number = $request->vendor_account_number;
        $payoutRequest->bank_name = $request->vendor_bank_name;  
        $payoutRequest->approval_status = 2;
        $payoutRequest->save();



        $notification = array(
            'message' => 'Payout Request Submitted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('payout.all')->with( $notification);
        


       
    }







    public function  getContest($category_id)
    {
        $user = Auth::user()->id;
        $contestvendor = Vendor::where('user_id', $user)->first(); 
        $contests_single = Contest::all();
        $contests_multiple = Multicontest::all();
        $contest_corporate_single = CorporateSingleContest::all();
        $contest_corporate_multi = CorporateMultiContest::all();
        $all_contests = $contests_single->concat($contests_multiple)->concat($contest_corporate_single)->concat($contest_corporate_multi)->where('contest_type', $category_id)->where('vendor_id', $contestvendor->id);
        return response()->json($all_contests);
     
    }












    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RequestPayout  $requestPayout
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $payout = RequestPayout::FindorFail($id);
       
       return view('contest.payouts.preview_payout', compact('payout'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RequestPayout  $requestPayout
     * @return \Illuminate\Http\Response
     */
    public function edit(RequestPayout $requestPayout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RequestPayout  $requestPayout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestPayout $requestPayout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RequestPayout  $requestPayout
     * @return \Illuminate\Http\Response
     */
    public function destroy(RequestPayout $requestPayout)
    {
        //
    }
}
