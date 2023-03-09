<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        $newUser = $request->only('name', 'email', 'password');

        if (User::where('email', '=', $newUser['email'])->exists()) {

            return back()->withErrors("A user with that email already exists. Please try again");
        } else {

            User::create(['name' => $newUser['name'], 'email' => $newUser['email'], 'password' => Hash::make($newUser['password'])]);

            return back()->with('message', 'User registered succesfully!');
        }
    }
}
