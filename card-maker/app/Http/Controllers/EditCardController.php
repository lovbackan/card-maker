<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;
use App\Models\Category;

class EditCardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        $userId = $user->id;

        $edit = $request->validate([
            'cardSelector' => 'required',
            'category' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);


        $card = Card::where('user_id', '=', $userId)
            ->where('title', '=', $edit['cardSelector'])
            ->first();

        if ($card) {
            $card->title = $edit['title'];
            $card->body = $edit['body'];
            $category = Category::where('category_name', $edit['category'])->first();
            if ($category) {
                $card->card_category = $category->id;
            }
            $card->save();
        }
        return back()->with('message', 'Card edited succesfully!');
    }
}
