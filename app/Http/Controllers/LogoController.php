<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allMultiImage= Logo::all();


        $data['allData'] = Logo::latest()->get();


        return view ('admin.brands', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('admin.brand_logo_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('logos');

        foreach ($image as $multi_image) {

           $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($multi_image)->resize(220,220)->save('uploads/brands/'.$name_gen);
            $save_url = 'uploads/brands/'.$name_gen;

            Logo::insert([

                'logos' => $save_url,
                'brand_name' => $request->brand_name,
                'created_at' => Carbon::now()

            ]); 

             } // End of the froeach


            $notification = array(
            'message' => 'Multi Image Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('brands.show')->with($notification);


     }// End Method 
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $brand_detail = Logo::FindorFail($id);
        return view('admin.brand_logo_edit', compact('brand_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        //
        $id = $request->id;
        $brand = Logo::findorfail($id);

        

        if($request->file('logos')){
            $image = $request->file('logos');
            foreach ($image as $multi_image) {

                $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg
     
                 Image::make($multi_image)->resize(220,220)->save('uploads/brands/'.$name_gen);
                 $save_url = 'uploads/brands/'.$name_gen;
     
                 Logo::findorfail($id)->update([
     
                     'logos' => $save_url,
                     'brand_name' => $request->brand_name,
                     'created_at' => Carbon::now()
     
                 ]); 
     
                 
     
     
                 $notification = array(
                 'message' => 'Multi Image Inserted Successfully', 
                 'alert-type' => 'success'
             );
        
             return redirect()->route('brands.show')->with($notification);



            }
        
        
        
        }


        else {
            Logo::findorfail($id)->update([
 
               
                'brand_name' => $request->brand_name,
                'created_at' => Carbon::now()

            ]); 

            $notification = array(
            'message' => 'Multi Image Inserted Successfully', 
            'alert-type' => 'success'
        );
   
        return redirect()->route('brands.show')->with($notification);
   

        } 

    

        

    }
    









    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logo  $logo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $brand = Logo::findorfail($id);
       $imagetoberemoved = $brand->logos;
       unlink($imagetoberemoved);
       $brand->delete();
        $notification = array(
            'message' => 'Brand Deleted Successfully', 
            'alert-type' => 'success'
        );
   
        return redirect()->back()->with($notification);
    }
}
