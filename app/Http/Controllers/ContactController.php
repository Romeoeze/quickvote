<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        //
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

            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
           
        
    
    
    
           ]);

      
         
         $contact = new Message();
         $contact->name = $request->name;
         $contact->subject = $request->subject;
         $contact->sender_email = $request->email;
         $contact->sender_phonenumber = $request->phonenumber;
         $contact->message = $request->message;
        $contact->save();

        $notification = array(
            'message' => 'Contact Message Sent Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('homepage.show')->with( $notification);

 
    }



    public function  newsletter(Request $request)
    {




        $request->validate([

      
            'email' => 'required|email|unique:newsletters,subscriber_email',
          
           
        
    
    
    
           ]);

      
         
         $contact = new Newsletter();
    
         $contact->subscriber_email = $request->email;
        
        $contact->save();

        $notification = array(
            'message' => 'Newsletter Subscription Request Sent Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('homepage.show')->with( $notification);

 
    }



   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
