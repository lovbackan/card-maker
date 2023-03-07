<?php

namespace App\Http\Controllers;

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

        $name = $user->name;
        $categories = DB::table('categories')->get();

        $cards = DB::table('cards')->where('user_id', '=', $userId)->get();
        // $categoryName = $categories->category_name;

        return view('dashboard', ['user' => Auth::user(), 'categories' => $categories, 'cards' => $cards],);
    }
}
