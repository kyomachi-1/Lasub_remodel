<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function checkout()
    {
        return view('web.checkout');
    }

    public function set_token(Request $request)
    {
        $user = Auth::user();
        $user->token = request('token');
        $user->save();
        return response()->json($user);
    }

    public function subscription()
    {
        return view('web.subscription');
    }
}
