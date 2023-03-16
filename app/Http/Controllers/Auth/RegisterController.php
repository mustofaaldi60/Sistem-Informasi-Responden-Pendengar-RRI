<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:dns', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        $validated = $request->validate($rules);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->to('/home');
    }
}
