<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
        return view('home');
    }

    public function filter(Request $request)
    {   
        $foods = Food::All();
        $filter = $request->input('filter');
        return view('home');
    }
}
