<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;
use Illuminate\Support\Facades\DB;;


class CreateCardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //

        $this->validate($request, ['category', 'title', 'body']);

        $newCard = $request->only('category', 'title', 'body');

        $user = Auth::user();
        $userId = $user->id;

        $cardExists = Card::where('user_id', $userId)
            ->where('title', $newCard['title'])
            ->exists();

        if ($cardExists) {
            return back()->with('error', 'A card with the same title already exists.');
        }

        //convert the name of the category to the categoryId
        $categoryRow = DB::table('categories')->where('category_name', '=', $newCard['category'])->first();
        $categoryId = $categoryRow->id;

        Card::create(['user_id' => $userId, 'card_category' => $categoryId, 'title' => $newCard['title'], 'body' => $newCard['body']]);

        return back()->with('message', 'Card created succesfully!');
    }
}
