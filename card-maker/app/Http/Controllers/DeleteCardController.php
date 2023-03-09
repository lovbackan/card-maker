<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Card;

class DeleteCardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $delete = $request->validate([
            'cardSelector' => 'required',
        ]);
        $user = Auth::user();
        $userId = $user->id;
        if ($delete) {
            Card::where('user_id', '=', $userId)
                ->where('title', '=', $delete['cardSelector'])
                ->delete();

            return back()->with('message', 'Card deleted succesfully!');
        }
    }
}
