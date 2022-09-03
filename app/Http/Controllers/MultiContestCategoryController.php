<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vendor;
use App\Models\Category;
use App\Models\Multicontest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MultiContestCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   $userid = Auth::user()->id;
        $vendor = Vendor::where('user_id', $userid)->first();
        $vendor_id = $vendor->id;
        $categories = Category::where('vendor_id', $vendor_id )->get();
        return view ('contest.withcategory.categories.all_listed_categories_mc', compact('categories'));
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
        $multicontests = Multicontest::where('vendor_id', $vendor_id )->get();
        return view('contest.withcategory.categories.createmulticontest_category', compact(['multicontests', 'vendor_id']));
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
            $category = new Category();
            $category->category_name = $request->category_name[$i];
            $category->vote_price = $request->vote_price[$i];
            $category->multicontest_id = $request->multicontest_id;
            $category->vendor_id = $request->vendor_id;
            $category->created_at = Carbon::now();
            $category->save();


        }
    
    $notification = array(
        'message' => 'Categories Added Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->route('multicontestcategoryadd.all')->with( $notification);

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view ('contest.withcategory.categories.multicontest_category_edit', compact ('category'));
    
    
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $category = Category::where('id', $id)->first();
        $category->category_name = $request->category_name;
        $category->vote_price = $request->vote_price;
        $category->save();
        $notification = array(
            'message' => 'Categories Edited Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('multicontestcategoryadd.all')->with( $notification);

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->delete();
         
    $notification = array(
        'message' => 'Category Deleted Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);

    }
    
}







