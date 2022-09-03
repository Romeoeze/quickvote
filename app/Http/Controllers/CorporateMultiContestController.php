<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vendor;
use App\Rules\DateAfter;
use App\Rules\DateBetween;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CorporateMultiContest;
use Intervention\Image\Facades\Image;

class CorporateMultiContestController extends Controller
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
    
        $contests = CorporateMultiContest::with('vendor')->where('vendor_id', $vendor_id)->orderBy('updated_at', 'DESC')->paginate(10);
        return view ('contest.cm.all_multi_contests', compact('contests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $min = Carbon::now();
        $user = Auth::user()->id;
        $contestvendor = Vendor::where('user_id', $user)->first();
        return view('contest.cm.createmulticontest', compact(['contestvendor', 'min']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'contest_name' => 'required|unique:corporate_multi_contests,contest_name',
            'start_date' =>  ['required', 'date', new DateBetween],
            'end_date' => ['required', 'date', new DateAfter],
            'contest_image' => 'required|image|mimes:jpeg,jpg,png|max:1000',
            'contest_description' => 'required|min:20',
         
        
        
        
           ]);
         
        
        
            $contest = new CorporateMultiContest;
                
            $contest->contest_name = $request->contest_name;
            $contest->contest_description = Str::limit($request->contest_description, 250);
            $contest->start_date = $request->start_date;
            $contest->end_date = $request->end_date;
            $contest->is_featured = 2;
            $contest->vendor_id = $request->vendor_id;
            $contest->status = 2;
            $contest->slug = Str::slug($request->contest_name, '-');
        
        
            if ($request->file('contest_image')){


                $request->validate([

                    'contest_image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
                     
                
                   ]);
        
        
                $file = $request->file('contest_image');
                $filename = date('Ymdhi').'.' .$file->getClientOriginalExtension();
              
        
                Image::make($file)->resize(570,516)->save('uploads/corporatemulticontests/'.$filename);
                $fileurl = 'uploads/corporatemulticontests/'.$filename;
        
                $contest->contest_image = $fileurl;
        
        
        
        
        
            }
        
        
            $contest->save();
        
        
        
            $notification = array(
                'message' => 'MultiContest Added Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('corporatemulticontest.all')->with( $notification);
            
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateMultiContest  $corporateMultiContest
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
    $contest = CorporateMultiContest::where('slug', $slug)
                                    ->with('vendor')
                                    ->with('category')
                                    ->first();
    return view ('contest.cm.show_vendor_multicontest', compact ('contest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorporateMultiContest  $corporateMultiContest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contest = CorporateMultiContest ::where('id', $id)->first();
        return view ('contest.cm.multicontest_edit', compact ('contest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorporateMultiContest  $corporateMultiContest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'contest_name' => 'required|unique:corporate_multi_contests,contest_name,'.$id.',id',
            'start_date' =>  ['required', 'date', new DateBetween],
            'end_date' => ['required', 'date', new DateAfter],
            'contest_description' => 'required|min:20',
        
        
           ]);
    
    
            $contest = CorporateMultiContest::where('id', $id)->first();
                
            $contest->contest_name = $request->contest_name;
            $contest->contest_description = Str::limit($request->contest_description, 250);
            $contest->start_date = $request->start_date;
            $contest->end_date = $request->end_date;
            $contest->is_featured = 2;
            $contest->status = 2;
            $contest->slug = Str::slug($request->contest_name, '-');
    
    
            if ($request->file('contest_image')){

                $request->validate([

                    'contest_image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
                     
                
                   ]);
    
                $file = $request->file('contest_image');
                $filename = date('Ymdhi').'.' .$file->getClientOriginalExtension();
              
        
                Image::make($file)->resize(570,516)->save('uploads/corporatemulticontests/'.$filename);
                $fileurl = 'uploads/corporatemulticontests/'.$filename;
        
                $contest->contest_image = $fileurl;
    
    
    
    
    
            }
    
    
            $contest->save();
    
    
    
            $notification = array(
                'message' => 'Contest Updated Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('corporatemulticontest.all')->with( $notification);
            
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateMultiContest  $corporateMultiContest
     * @return \Illuminate\Http\Response
     */
    public function destroy(CorporateMultiContest $corporateMultiContest)
    {
        //
    }
}
