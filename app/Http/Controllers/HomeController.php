<?php

namespace App\Http\Controllers;

use App\Breed;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $breed = Breed::paginate(15);
        return view('home', compact('breed'));
    }
}
