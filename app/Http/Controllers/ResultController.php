<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Contest;
use App\Models\Multicontest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CorporateMultiContest;
use App\Models\CorporateSingleContest;

class ResultController extends Controller
{
    


    public function create()
    {
        $user = Auth::user()->id;
        $contestvendor = Vendor::where('user_id', $user)->first(); 
        $contests_single = Contest::all();
        $contests_multiple = Multicontest::all();
        $contest_corporate_single = CorporateSingleContest::all();
        $contest_corporate_multi = CorporateMultiContest::all();
        $all_contests = $contests_single->concat($contests_multiple)->concat($contest_corporate_single)->concat($contest_corporate_multi)->where('vendor_id', $contestvendor->id);
        // dd($all_contests);
        return view ('contest.results.request_result', compact('contestvendor', 'all_contests'));
    }



    public function store(Request $request)
    {
       
        $contest_id = $request->contest_id;
        $category_id = $request->category_id;
        return view ('contest.results.result_details', compact('contest_id', 'category_id'));
       
       
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

   




}
