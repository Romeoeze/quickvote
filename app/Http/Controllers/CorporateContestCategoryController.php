<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CorporateMultiContest;
use App\Models\CorporateContestCategory;

class CorporateContestCategoryController extends Controller
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
        $categories = CorporateContestCategory::where('vendor_id', $vendor_id )->get();
        return view ('contest.cm_withcategory.categories.all_listed_categories_mc', compact('categories'));
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
        $multicontests = CorporateMultiContest::where('vendor_id', $vendor_id )->get();
        return view('contest.cm_withcategory.categories.createmulticontest_category', compact(['multicontests', 'vendor_id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i=0; $i < count($request->category_name); $i++) {     
            $category = new CorporateContestCategory();
            $category->category_name = $request->category_name[$i];
            $category->corporatemulticontest_id = $request->multicontest_id;
            $category->vendor_id = $request->vendor_id;
            $category->created_at = Carbon::now();
            $category->save();


        }
    
    $notification = array(
        'message' => 'Categories Added Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->route('corporatemulticontestcategoryadd.all')->with( $notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateContestCategory  $corporateContestCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CorporateContestCategory $corporateContestCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorporateContestCategory  $corporateContestCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CorporateContestCategory::where('id', $id)->first();
        return view ('contest.cm_withcategory.categories.multicontest_category_edit', compact ('category'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorporateContestCategory  $corporateContestCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $category = CorporateContestCategory ::where('id', $id)->first();
        $category->category_name = $request->category_name;
        $category->save();
        $notification = array(
            'message' => 'Categories Edited Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('corporatemulticontestcategoryadd.all')->with( $notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateContestCategory  $corporateContestCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CorporateContestCategory::find($id)->delete();
         
        $notification = array(
            'message' => 'Category Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with( $notification);
    
        
    }
}
