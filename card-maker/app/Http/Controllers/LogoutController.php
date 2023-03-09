<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class LogoutController extends Controller
{
    public function __invoke()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
