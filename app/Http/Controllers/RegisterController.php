<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // return response()->json($request->all());
        $rules = [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'min:5', 'max:255']
        ];

        $validated = $request->validate($rules);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect('/dashboard');
    }
}