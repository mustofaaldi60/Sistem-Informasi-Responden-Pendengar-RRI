<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // return response()->json($request->all());
        $rules = [
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ];

        $validated = $request->validate($rules);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();

            return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('failed', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout($request);

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
