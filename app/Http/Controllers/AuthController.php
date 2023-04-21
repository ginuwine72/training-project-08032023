<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('userlogin');
    }

    public function processLoginForm(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($validatedData)) {
            // Authentication successful, redirect to home page
            return redirect()->route('store');
        }

        // Authentication failed, redirect back to login form with error message
        return redirect()->back()->withErrors([
            'email' => 'Invalid email or password',
        ]);
    }
    
}
