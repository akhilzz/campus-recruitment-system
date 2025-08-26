<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('public')->except(['logout']);
    }

    public function showSignupForm()
    {
        return view('public.pages.signup');
    }

    public function submitSignupForm(Request $request)
    {
        dd($request->all());
        // Validate request data
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Return a response
        return response()->json(['message' => 'Signup successful', 'user' => $user]);
    }

        

        //return redirect()->route('login')->with('success', 'Account created successfully!');
    

    public function showLoginForm()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Handle login logic here
    }
}


