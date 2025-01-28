<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('authentication.sign-up');
    }

    public function signup(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
            'agree' => 'accepted',
        ]);

        $fullname = $request->firstname . ' ' . $request->lastname;

        // Create the user
        $admin = Admin::create([
            'name' => $fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            
        ]);

        // Log the user in
        Auth::guard('admin')->login($admin);  // Specify the 'admin' guard

        // Redirect to the admin dashboard
        return redirect()->route('admin.dashboard')->with('success', 'Registration successful. Welcome!');
    }

    public function showLoginForm()
    {
        return view('authentication.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login with the 'admin' guard
        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard')->with('success', 'Login successful. Welcome!');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout(); // Logs out the user from the 'admin' guard
        $request->session()->invalidate(); // Invalidates the session
        $request->session()->regenerateToken(); // Regenerates the CSRF token

        // Redirect to the login form route
        return redirect()->route('login.form')->with('success', 'You have been logged out.');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }
}
