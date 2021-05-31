<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Food;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FoodController extends Controller
{
 
    public function index(){
        $foods = Food::All();
        $search = request()->get('search');
        return view('home', ['Foods'=>$foods,'search'=>$search]);
    }


    public function search(Request $request){
        $foods = Food::All();
       if($foods){
             $search = request()->get('search');
       }
        return view('home', ['Foods'=>$foods,'search'=>$search]);
    }
}
