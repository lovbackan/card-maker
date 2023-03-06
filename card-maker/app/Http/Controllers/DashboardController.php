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
        $categories = DB::table('categories')->get();
        // $categoryName = $categories->category_name;

        $user = Auth::user();
        $name = $user->name;
        return view('dashboard', ['user' => Auth::user(), 'categories' => $categories],);
    }
}
