<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function submit(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $response = Http::post(url('admin/login'), [
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            session(['admin_token' => $data['token']]);

            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid email or password');
    }
}
