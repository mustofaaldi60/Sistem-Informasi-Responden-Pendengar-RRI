<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(RegisterRequest $request)
    {
        $validated = $request->validate($request->all());

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return redirect()->to('/home');
    }
}
