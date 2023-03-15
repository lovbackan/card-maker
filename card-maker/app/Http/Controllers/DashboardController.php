<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


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

        if (Category::count() == 0) {
            // Create default categories
            $categories = [
                ['category_name' => 'Character', 'color' => 'Pink'],
                ['category_name' => 'Technology', 'color' => 'Purple'],
                ['category_name' => 'Country', 'color' => 'Green'],
            ];
            Category::insert($categories);
        }
        $categories = Category::get();
        $cards = Card::where('user_id', '=', $userId)->get();
        return view('dashboard', ['user' => Auth::user(), 'categories' => $categories, 'cards' => $cards],);
    }
}
