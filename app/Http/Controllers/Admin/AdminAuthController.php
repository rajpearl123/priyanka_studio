<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to log in using the 'admin' guard
        if (Auth::guard('admin')->attempt($credentials)) {
            // Regenerate session to prevent fixation
            $request->session()->regenerate();
            //dd("hre");
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function logout(Request $request)
    {
        //dd("here");
        $request->user()?->tokens()?->delete();

        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Explicit redirect to avoid fallback to 'login'
        return redirect()->route('admin.login');
    }
}
