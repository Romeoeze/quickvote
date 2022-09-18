<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use App\Models\Contest;
use App\Models\Multicontest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CorporateMultiContest;
use App\Models\CorporateSingleContest;
use Illuminate\Auth\Events\Registered;

class AdminController extends Controller
{
    //


    public function index(){

        $data['users'] = User::all();
        $data['visitors'] = request()->ip();
        $data['vendors'] = Vendor::all();

            return view ('admin.index', $data);


    }








public function UserView(){
    $data['users'] = User::latest()->paginate(25);
    return view ('admin.users', $data);
}


public function UserCreate(){
 
    return view ('admin.users_create');
}






public function UserViewSingle($id){
    $user = User::find($id);
    return view ('admin.users_preview', compact('user'));
}



public function UserEdit($id){
    $user = User::find($id);
    return view ('admin.users_edit', compact('user'));
}




public function UserStore(Request $request){

$data = new User();
$data->name = $request->name;
$data->phonenumber = $request->phonenumber;
$data->Role = $request->role;
$data->email = $request->email;
$data->password = Hash::make($request->password);
$data->code = $request->password;

if($request->file('image')){

$file = $request->file('image');
$filename = date('Ymdhi'). $file->getClientOriginalExtension();
$file->move(public_path('/uploads/admin_images/'), $filename);

$data->profileimage = $filename;




}

$data ->save();

event(new Registered($data));

Auth::login($data);


$notification = array(
    'message' => 'User Added Successfully', 
    'alert-type' => 'success'
   );
   return redirect()->route('admin.users')->with( $notification);









}













public function UserUpdate(Request $request, $id){

$user = User::find($id);
$user->phonenumber = $request->phonenumber;
$user->Role = $request->role;
$user->name = $request->name;


if($request->file('image')){
    $file =$request->file('image');
    $filename = date('YmdHi') . $file->getClientOriginalName();
    @unlink(public_path('uploads/admin_images/'.$user->profileimage));
    $file->move(public_path('uploads/admin_images'), $filename);
    $user->profileimage = $filename;
}


$user->save();
$notification = array(
 'message' => 'User Profile Updated Successfully', 
 'alert-type' => 'success'
);
return redirect()->back()->with( $notification);




    return redirect()->back();


}





public function UserDelete($id){
    $user = User::find($id);
    $user->delete();
    $notification = array(
        'message' => 'Deleted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
}







public function ContestsView(){
    $contests_single = Contest::all();
    $contests_multiple = Multicontest::all();
    $contest_corporate_single = CorporateSingleContest::all();
    $contest_corporate_multi = CorporateMultiContest::all();
    $all_contests = $contests_single->concat($contests_multiple)->concat($contest_corporate_single)->concat($contest_corporate_multi);

    return view ('admin.contests.request_contest', compact('all_contests'));




}





public function  getContest($category_id)
{

    $contests_single = Contest::all();
    $contests_multiple = Multicontest::all();
    $contest_corporate_single = CorporateSingleContest::all();
    $contest_corporate_multi = CorporateMultiContest::all();
    $all_contests = $contests_single->concat($contests_multiple)->concat($contest_corporate_single)->concat($contest_corporate_multi)->where('contest_type', $category_id);
    return response()->json($all_contests);
 
}




public function processContest(Request $request)
{
   
    $contest_id = $request->contest_id;
    $category_id = $request->category_id;
    return view ('admin.contests.contest_details', compact('contest_id', 'category_id'));
   
   
}



public function contestSearch(Request $request)
{
   
    $category_id = $request->category_id;
    
    if($category_id == '1'){
        $contests = Contest::with('vendor')->orderBy('created_at', 'DESC')->paginate(25);
        return view ('admin.contests.all_contest_paid_single', compact('contests'));
    }

    elseif($category_id == '2'){
   
        $contests = Multicontest::with('vendor')->orderBy('created_at', 'DESC')->paginate(25);
        return view ('admin.contests.all_contest_paid_multi', compact('contests'));
    }


    elseif($category_id == '3'){
        $contests = CorporateSingleContest::with('vendor')->orderBy('created_at', 'DESC')->paginate(25);
        return view ('admin.contests.all_contest_free_single_corporate', compact('contests'));
    }


    else{
        $contests = CorporateMultiContest::with('vendor')->orderBy('created_at', 'DESC')->paginate(25);
        return view ('admin.contests.all_contest_free_multi_corporate', compact('contests'));
    }
   
   
}


public function adminContestShowSinglePiaid($slug)
{
   
    
        $contest = Contest::where('slug', $slug)
        ->with('vendor')
        ->with('contestants')
        ->first();
        
        return view ('contest.show_vendor_contest', compact ('contest'));
    

  
   
   
}


public function adminContestShowSinglePiaidStop($slug)
{
    $contest = Contest::where('slug',$slug)->first();
                
    $contest->status = 3;
    $contest->save();
   

    $notification = array(
        'message' => 'Contest Disabled Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);
}

public function adminContestShowSinglePiaidApprove($slug)
{
    $contest = Contest::where('slug',$slug)->first();
                
    $contest->status = 1;
    $contest->save();
   

    $notification = array(
        'message' => 'Contest Approved Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);
}

public function adminContestShowSinglePiaidReActivate($slug)
{
    $contest = Contest::where('slug',$slug)->first();
                
    $contest->status = 1;
    $contest->save();
   

    $notification = array(
        'message' => 'Contest Re-Activated Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);
}


public function adminContestShowMultiPiaid($slug)
{
   
    
        $contest = MultiContest::where('slug', $slug)
        ->with('vendor')
        ->with('category')
        ->first();
        
        return view ('contest.withcategory.show_vendor_multicontest', compact ('contest'));
    

  
   
   
}



public function adminContestShowMultiPiaidApprove($slug)
{
    $contest = MultiContest::where('slug',$slug)->first();
                
    $contest->status = 1;
    $contest->save();
   

    $notification = array(
        'message' => 'Contest Approved Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);
}




public function adminContestShowMultiPiaidStop($slug)
{
    $contest = MultiContest::where('slug',$slug)->first();
                
    $contest->status = 3;
    $contest->save();
   

    $notification = array(
        'message' => 'Contest Disabled Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);
}



public function adminContestShowMultiPiaidReActivate($slug)
{
    $contest = MultiContest::where('slug',$slug)->first();
                
    $contest->status = 1;
    $contest->save();
   

    $notification = array(
        'message' => 'Contest Re-Activated Successfully', 
        'alert-type' => 'success'
    );
    return redirect()->back()->with( $notification);
}







}



