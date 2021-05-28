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

Route::get('/', function () {
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
    return view('index', [
        'Snacks' => $Snacks,
        'Sweets' => $Sweets,
        'Vegetables' => $Vegetables
    ]);
});

 //Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
