<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $user = Auth::user();
        $userId = $user->id;
        $categories = Category::get();
        $cards = Card::where('user_id', '=', $userId)->get();
        return view('dashboard', ['user' => Auth::user(), 'categories' => $categories, 'cards' => $cards],);
    }
}
