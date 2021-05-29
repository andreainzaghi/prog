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

Route::get('/home', function () {
    $foods = Food::All();

    $Snacks = [];
    $Sweets = [];
    $Vegetables = [];
    
    
   

    foreach($foods as $key => $food) {

        $food['ID'] = $key;
       

        if($food['Food_Group'] == 'Snacks') {
            $Snacks[] = $food;
        } else if($food['Food_Group'] == 'Sweets') {
            $Sweets[] = $food;
        } else if($food['Food_Group'] == 'Vegetables') {
            $Vegetables[] = $food;
        } 
        
    }
    return view('home', [
        'Snacks' => $Snacks,
        'Sweets' => $Sweets,
        'Vegetables' => $Vegetables
    ]);
})->name('homepage');

 //Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');

*/
Route::get('/', function() {
   
    return view('login.index');
})->name('login');

Route::get('/chilopage', function() {
   
    return view('chilopage');
})->name('chilopage');


Route::get('/news', function() {
    $foods = Food::All();
    

    return view('news',['food' => $foods]);
})->name('news');

Route::get('prodotto/{id?}', function ($id = 10) {
    
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
})->where('id', '[0-9]+')->name('prodotto');

//foods



