<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class VendorController extends Controller
{
   public function index(){
      echo "this is contest page";
   }




   public function create(){
    return view('vendorcompany.start');
 }



 public function  SignUp() {


    $user = Auth::user();

    return view('vendorcompany.signup', compact('user'));
 }



public function VendorStore(Request $request){

$vendor = new Vendor();

$vendor->user_id = $request->user_id;
$vendor->vendor_name = $request->vendor_name;
$vendor->vendor_email = $request->vendor_email;
$vendor->company_name = $request->company_name;
$vendor->company_address = $request->company_address;
$vendor->company_phonenumber = $request->company_phonenumber;
$vendor->company_description = Str::limit($request->company_description, 200);
$vendor->account_name = $request->account_name;
$vendor->account_number = $request->account_number;
$vendor->bank_name = $request->bank_name;
$vendor->status = '2';



if ($request->file('company_logo')){

    $file = $request->file('company_logo');
    $filename = date('Ymdhi') . $file->getClientOriginalName();
    $vendor->company_logo = $filename;
    $file->move(public_path('/uploads/vendors/'), $filename);
}

$vendor->save();

$user = User::find($request->user_id);


$user->Role = 'Vendor';

$user->save();



$notification = array(
    'message' => 'Vendor Profile Created Successfully', 
    'alert-type' => 'success'
);
return redirect()->route('vendor.show')->with( $notification);


}




public function  VendorShow() {

    $id = Auth::user()->id;

    $vendor = Vendor::where('user_id', $id)->first();

    return view('vendorcompany.vendor_preview', compact('vendor'));
 }


 

 public function  VendorEdit($id) {

    $vendor = Vendor::where('user_id', $id)->first();

    return view('vendorcompany.vendor_edit', compact('vendor'));
 }



 public function  VendorUpdate(Request $request, $id) {

    $vendor = Vendor::where('id', $id)->first();
    $vendor->company_name = $request->company_name;
    $vendor->company_address = $request->company_address;
    $vendor->company_description = Str::limit($request->company_description, 200);
    $vendor->account_name = $request->account_name;
    $vendor->account_number = $request->account_number;
    $vendor->bank_name = $request->bank_name;
    $vendor->status = '2';



        if ($request->file('company_logo')){

            $file = $request->file('company_logo');
            $filename = date('Ymdhi') . $file->getClientOriginalName();
            $vendor->company_logo = $filename;
            $file->move(public_path('/uploads/vendors/'), $filename);
        }

        $vendor->save();

        $notification = array(
            'message' => 'Vendor Profile Edited Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->back()->with( $notification);
        

 }




 public function Profile (){
       
    $user = Auth::user()->id;
    $profile_data = User::find($user);
    return view ('admin.admin_profile_view', compact ('profile_data'));
}



public function ProfileEdit (){
    
 $user = Auth::user()->id;
 $profile_data = User::find($user);
 return view ('admin.admin_profile_edit', compact ('profile_data'));
}





public function ProfileStore (Request $request){
    
 $user = Auth::user()->id;
 $data = User::find($user);
 $data->name = $request->name;
 $data->email = $request->email;
 $data->phonenumber = $request->phonenumber;


 if($request->file('image')){
        $file =$request->file('image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('uploads/admin_images'), $filename);
        $data->profileimage = $filename;
 }



 $data->save();
 $notification = array(
     'message' => 'User Profile Image Changed Successfully', 
     'alert-type' => 'success'
 );
 return redirect()->back()->with( $notification);

}


public function ProfileChangePassword(){
 // $user = Auth::user()->id;
 // $data = User::find($user);
 return view ('admin.admin_profile_change_password');
}


public function PasswordUpdate(Request $request){
 $user = Auth::user()->id;
 $data = User::find($user);


     $validateData = $request->validate([
         'oldpassword' => 'required',
         'newpassword' => 'required',
         'confirmpassword' => 'required|same:newpassword',
     ]);
         



         $hashedPassword = Auth::user()->password;
         if (Hash::check($request->oldpassword,$hashedPassword )) {
         $user = User::find(Auth::id());
         $user->password = bcrypt($request->newpassword);
         $user->save();

         session()->flash('message','Password Updated Successfully');
         return redirect()->back();
     } else{
         session()->flash('message','Old password is not match');
         return redirect()->back();

     }




}




















 public function destroy(Request $request)
 {
     Auth::guard('web')->logout();
     $notification = array(
         'message' => 'User Logged Out Successfully', 
         'alert-type' => 'success'
     );
     $request->session()->invalidate();

     $request->session()->regenerateToken();

     return redirect('/login')->with( $notification);;
 }









}
