<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        $notification = array(
            'message' => 'User Logged in Successfully', 
            'alert-type' => 'success'
        );


        if (Auth::check() && Auth::user()-> Role == 'Admin'){
            return redirect()->route('admin.dashboard')->with($notification);
        }

        else{
            return redirect()->route('contest.create')->with($notification);
        }

        
        // return redirect()->intended(RouteServiceProvider::HOME)->with($notification);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $notification = array(
            'message' => 'User Logged Out Successfully', 
            'alert-type' => 'success'
        );
   


        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/')->with($notification);;
    }









}
