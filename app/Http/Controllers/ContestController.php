<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Vendor;
use App\Models\Contest;
use App\Rules\DateAfter;
use App\Rules\DateBetween;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ContestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function select()
    {
    
        return view ('contest.selectcontesttype');
    }





     
    public function index()
    {
        $userid = Auth::user()->id;
        $vendor = Vendor::where('user_id', $userid)->first();
        $vendor_id = $vendor->id;

        $contests = Contest::with('vendor')->where('vendor_id', $vendor_id)->orderBy('updated_at', 'DESC')->paginate(10);
        return view ('contest.all_contests', compact('contests'));
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
        return view ('contest.add_new_contest', compact('contestvendor'));
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

        'contest_name' => 'required|unique:contests,contest_name',
        'vote_price' => 'required',
       'start_date' => ['required', 'date', new DateBetween],
       'end_date' => ['required', 'date', new DateAfter],
       'vote_price' => 'required',
       'contest_image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
       'contest_description' => 'required|min:20',



       ]);
     


        $contest = new Contest;
            
        $contest->vendor_id = $request->vendor_id;
        $contest->contest_name = $request->contest_name;
        $contest->contest_type = 1;
        $contest->contest_description = Str::limit($request->contest_description, 250);
        $contest->start_date = $request->start_date;
        $contest->end_date = $request->end_date;
        $contest->is_categorized = 2;
        $contest->is_featured = 2;
        $contest->vote_price = $request->vote_price;
        $contest->vendor_id = $request->vendor_id;
        $contest->status = 2;
        $contest->slug = Str::slug($request->contest_name, '-');


        if ($request->file('contest_image')){

            $request->validate([

                'contest_image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
                 
            
               ]);


            $file = $request->file('contest_image');
            $filename = date('Ymdhi').'.' .$file->getClientOriginalName();
          

            Image::make($file)->resize(1080,1080)->save('uploads/contests/'.$filename);
            $fileurl = 'uploads/contests/'.$filename;

            $contest->contest_image = $fileurl;





        }


        $contest->save();



        $notification = array(
            'message' => 'Contest Added Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('contest.all')->with( $notification);
        




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function show($slug)

    {
       $contest = Contest::where('slug', $slug)
                            ->with('vendor')
                            ->with('contestants')
                            ->first();
       
        return view ('contest.show_vendor_contest', compact ('contest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contest = Contest::where('id', $id)->first();
        return view ('contest.contest_edit', compact ('contest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'contest_name' => 'required|unique:contests,contest_name,'.$id.',id',
            'vote_price' => 'required',
            'start_date' => ['required', 'date', new DateBetween],
            'end_date' => ['required', 'date', new DateAfter],
           'vote_price' => 'required',
           'contest_description' => 'required|min:20',
    
    
    
           ]);
         
    
    
            $contest = Contest::where('id', $id)->first();
                
            $contest->contest_name = $request->contest_name;
            $contest->contest_type = 1;
            $contest->contest_description = Str::limit($request->contest_description, 250);
            $contest->start_date = $request->start_date;
            $contest->end_date = $request->end_date;
            $contest->is_categorized = 2;
            $contest->is_featured = 2;
            $contest->vote_price = $request->vote_price;
            $contest->slug = Str::slug($request->contest_name, '-');
    
    
            if ($request->file('contest_image')){
    
                $request->validate([

                    'contest_image' => 'required|image|mimes:jpeg,jpg,png|max:2000',
                     
                
                   ]);
    
                $file = $request->file('contest_image');
                $filename = date('Ymdhi').'.' .$file->getClientOriginalName();
                @unlink('uploads/contests/'.$filename);
              
    
                Image::make($file)->resize(1080,1080)->save('uploads/contests/'.$filename);
                $fileurl = 'uploads/contests/'.$filename;
    
                $contest->contest_image = $fileurl;
    
    
    
    
    
            }
    

            $contest->save();

    
    
            $notification = array(
                'message' => 'Contest Updated Successfully', 
                'alert-type' => 'success'
            );
            return redirect()->route('contest.all')->with( $notification);
            
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contest  $contest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contest::findorFail($id)->delete();

        $notification = array(
            'message' => 'Contest Deleted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with( $notification);
    }















































}
