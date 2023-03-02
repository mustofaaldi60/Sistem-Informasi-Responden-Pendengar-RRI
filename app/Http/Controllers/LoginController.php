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
        // Rules setelah lewat guard nya blade
        $rules = [
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ];

        // menyamakan antara yg di rules dengan yang di input lewat form
        $validated = $request->validate($rules);

        // pengecekan jika yg diinput sesuai
        if (Auth::attempt($validated)) {
            // generate session
            $request->session()->regenerate();

            // redirect ke dashboard
            return redirect()->to('/dashboard');
        }

        // jika email dan password tidak sesuai yg ada di db
        return redirect()->back()->with('failed', 'Login Failed!');
    }
}
