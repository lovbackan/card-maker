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

        // $categories = DB::table('categories')->get();
        $categories = Category::get();

        // $cards = DB::table('cards')->where('user_id', '=', $userId)->all();

        $cards = Card::where('user_id', '=', $userId)->get();

        // die(var_dump($cards));
        // $categoryName = $categories->category_name;

        return view('dashboard', ['user' => Auth::user(), 'categories' => $categories, 'cards' => $cards],);
    }
}
