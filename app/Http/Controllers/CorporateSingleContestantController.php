<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vendor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\CorporateSingleContest;
use App\Models\CorporateSingleContestant;

class CorporateSingleContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
   
    return view ('contestants.cs.cs_contestants_add', compact('contests'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        
        
        $files = $request->file('contestant_image');
 
//START OF I LOOP


    for ($i=0; $i < count($files); $i++) {     
        $contestant = new CorporateSingleContestant();
        $image = $files[$i];
        $filename = Str::random(6).'.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(1080,1080)->save('uploads/contestant_images/cs/'.$filename);
        $fileurl= 'uploads/contestant_images/cs/'.$filename;               
        $contestant->name =  $request->contestant_name[$i];
        $contestant->bio = $request->bio[$i];
        $contestant->contest_id = $request->contest_id;
        $contestant->image = $fileurl;
        $contestant->slug = Str::slug($request->contestant_name[$i], '-');            
        $contestant->passcode = strtoupper(Str::random(3));
        $contestant->created_at = Carbon::now();
        $contestant->save();


    }

$notification = array(
    'message' => 'Contestants Added Successfully', 
    'alert-type' => 'success'
);
return redirect()->route('corporatesinglecontest.all')->with( $notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CorporateSingleContestant  $corporateSingleContestant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    $contestant = CorporateSingleContestant::findorFail($id);
    return view ('contestants.cs.cs_contestant_show', compact('contestant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CorporateSingleContestant  $corporateSingleContestant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $contestant = CorporateSingleContestant::findorFail($id);
    return view ('contestants.cs.cs_contestant_edit', compact('contestant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CorporateSingleContestant  $corporateSingleContestant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $contestant = CorporateSingleContestant::find($request->id);
    
    if($request->file('image')){
        $image_path = public_path($contestant->image);

        if(file_exists($image_path)){
          @unlink($image_path); 
        }
        $image = $request->file('image');
        $filename = Str::random(6).'.' . $image->getClientOriginalExtension();
      
        Image::make($image)->resize(1080,1080)->save('uploads/contestant_images/'.$filename);
        $fileurl= 'uploads/contestant_images/'.$filename; 
        $contestant['image'] = $fileurl;
        $contestant->slug = Str::slug($request->contestant_name, '-'); 
        $contestant->save();
    }
            $contestant = CorporateSingleContestant::find($request->id);
            $contestant->name =  $request->name;
            $contestant->bio = $request->bio;
            $contestant->slug = Str::slug($request->name, '-'); 
           
        
            $contestant->save();

        $notification = array(
            'message' => 'Contestant Info Edited Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with( $notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CorporateSingleContestant  $corporateSingleContestant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $contestant = CorporateSingleContestant::findorFail($id);
    $contestant->delete();

    $notification = array(
        'message' => 'Contestantant Deleted Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->route('corporatesinglecontest.all')->with( $notification);
    }
}







