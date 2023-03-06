<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Card;
use Illuminate\Support\Facades\Redirect;


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
        //istället att card_category blir ett namn här så borde vara card_category id't (Borde vara innerjoin) borde vara innerjoin också ifall t.ex. categories ska ha färger också etc
        Card::create(['user_id' => $userId, 'card_category' => $newCard['category'], 'title' => $newCard['title'], 'body' => $newCard['body']]);

        return back()->with('message', 'Card created succesfully!');
    }
}
