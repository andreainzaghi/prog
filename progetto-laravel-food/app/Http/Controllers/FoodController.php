<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Food;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FoodController extends Controller
{
 
    public function index(Request $request){
        $search = request()->get('search');
        $foods = Food::where('name', 'LIKE', '%'.$request->input('search', '').'%')->get();
       
        return view('home', ['Foods'=>$foods,'search'=>$search]);
    }


    public function search(Request $request){
        // $foods = Food::All();
        $search = request()->get('search');
        $foods = Food::where('name', 'LIKE', '%'.$request->input('search', '').'%')->get();
        return view('home', ['Foods'=>$foods,'search'=>$search]);
    }
}