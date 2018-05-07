<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; // Add user

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user('id')->id;
        $user = User::find($user_id); // Find by user id
        return view('dashboard')->with('articles', $user->articles); //
    }
}
