<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $validatedattributes = request()->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::min(5), 'confirmed']

        ]);

        $user = User::create($validatedattributes);

        Auth::login($user);

        return redirect('/jobs')->with('success', 'Your account has been created.');

    }
}
