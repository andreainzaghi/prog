<?php

use App\Food;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'FoodController@index' )->name('homepage');
Route::get('/search', 'FoodController@search' );
// Route::post('/{filter}', 'FoodController@filter')->name('homepage.filter');


Route::get('/chilopage', function() {
   
    return view('chilopage');
})->name('chilopage');

Route::get('/news', function() {
    $foods = Food::All();
    $people = array();
    $food_group = $foods['Food_Group'];
    for($i = 0; i < $food_group;$i++){
        $i = $people;
    }
    echo $people;

// if (in_array("Glenn", $food_group))
//   {
//   echo "Match found";
//   }
// else
//   {
//   echo "Match not found";
//   }   
    return view('news',['foods' => $foods,'food_group' => $food_group]);
})->name('news');


Route::get('prodotto/{id?}', function ($id = 4998) {
    
    $foods = Food::All();
    
    if ($id >= count($foods)) {
        abort(404);
    }

    // siamo all'ultimo prodotto
    if($id == count($foods) - 1) {
        $next = 0;
        $prev = $id - 1;
    // siamo nel primo prodotto
    } elseif($id == 0) {
        $prev = count($foods) - 1;
        $next = $id + 1;
    } else {
        $prev = $id - 1;
        $next = $id + 1;
    }

    $food = $foods[$id];

    return view('prodotto', [
        'food' => $food,
        'prevProdottoId' => $prev,
        'nextProdottoId' => $next
    ]);
})->where('id', '[0-4997]+')->name('prodotto');

 //Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');

*/

Route::get('/prova', function() {
    $foods = Food::All();

    return view('news',['food' => $foods]);
})->name('prova');


