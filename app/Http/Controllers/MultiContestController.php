<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vendor;
use App\Models\Category;
use App\Rules\DateAfter;
use App\Rules\DateBetween;
use Illuminate\Support\Str;
use App\Models\Multicontest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MultiContestController extends Controller
{
    
/////////////////////////multi category contest





public function index()
{
    $userid = Auth::user()->id;
    $vendor = Vendor::where('user_id', $userid)->first();
    $vendor_id = $vendor->id;

    $contests = Multicontest::with('vendor')->where('vendor_id', $vendor_id)->orderBy('updated_at', 'DESC')->paginate(10);
    return view ('contest.withcategory.all_multi_contests', compact('contests'));
}






public function create()
{
$min = Carbon::now();
$user = Auth::user()->id;
$contestvendor = Vendor::where('user_id', $user)->first();
    
    return view('contest.withcategory.createmulticontest', compact(['contestvendor', 'min']));
}





public function store(Request $request)
{
   $request->validate([

    'contest_name' => 'required|unique:multicontests,contest_name',
   'start_date' =>  ['required', 'date', new DateBetween],
   'end_date' => ['required', 'date', new DateAfter],
   'contest_image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
   'contest_description' => 'required|min:20',



   ]);
 


    $contest = new Multicontest;
        
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
      

        Image::make($file)->resize(570,516)->save('uploads/multicontests/'.$filename);
        $fileurl = 'uploads/multicontests/'.$filename;

        $contest->contest_image = $fileurl;





    }


    $contest->save();



    $notification = array(
        'message' => 'MultiContest Added Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);
    




}


public function show($slug)

{
    
   $contest = Multicontest::where('slug', $slug)
                        ->with('vendor')
                        ->with('category')
                        ->first();


    return view ('contest.withcategory.show_vendor_multicontest', compact ('contest'));
}


public function edit($id)

{
    $contest = Multicontest::where('id', $id)->first();
    return view ('contest.withcategory.multicontest_edit', compact ('contest'));
}



public function update(Request $request, $id)
{
    $request->validate([

        'contest_name' => 'required|unique:multicontests,contest_name,'.$id.',id',
   'start_date' =>  ['required', 'date', new DateBetween],
   'end_date' => ['required', 'date', new DateAfter],
   'contest_description' => 'required|min:20',
    
    
    
       ]);


        $contest = Multicontest::where('id', $id)->first();
            
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
          
    
            Image::make($file)->resize(570,516)->save('uploads/multicontests/'.$filename);
            $fileurl = 'uploads/multicontests/'.$filename;
    
            $contest->contest_image = $fileurl;





        }


        $contest->save();



        $notification = array(
            'message' => 'Contest Updated Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('multicontest.all')->with( $notification);
        

}





// public function destroy($id)
// {
//     Multicontest::findorFail($id)->delete();

//     $notification = array(
//         'message' => 'Contest Deleted Successfully', 
//         'alert-type' => 'success'
//     );
//     return redirect()->back()->with( $notification);
// }





}


