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
       
        return view('home', ['Foods'=>$foods]);
    }


    public function search(Request $request){
        $foods = Food::All();
        $ciboarr=[];
       if($foods){
            $ciboarr[]=$foods;
            $search = request()->get('search');
            if($search){
                for($i = 0; $i <= $ciboarr; ++$i){
                    if($i == $search){
                        $foods = $i;
                    }
                }
            }
       }
      
       
        // $posts = DB::table('Foods')->where('title','LIKE',"%.$search.'%'")->paginate();
      
        return view('home', ['search'=>$search,'Foods'=>$foods]);
    }
   
   
    // public function filter(){
    //     $prova = 'Vegetabrrles';
    //     $tags = Tag::All();
    //     $tag = Tag::where('name',$prova)->first();
    //     if ( $tag == null ) {
    //        abort(404);
    //      }
    //      $foods = $tag->foods()->get();        
    //     return view('home',compact('foods','tags',['prova'=>$prova]));

    // }
  

}


// public function filterTag($slug)    {
//     $tags = Tag::all();
//     $tag = Tag::where('slug', $slug)->first();
//     if ( $tag == null ) {
//         abort(404);
//     }
//     $posts = $tag->posts()->where('published', 1)->get();
//     return view('guest.index', compact('posts', 'tags'));
// }