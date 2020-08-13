<?php

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
    return view('welcome');
});

Route::get('/pizzas', function () {
    //returning views below
    $pizza = [
        'type' => 'Kenyan',
        'base' => 'cheesy crust',
        'price' => 1200
    ];
    return view('pizzas', $pizza);

    //returning  strings below
    //return 'pizzas';

    //return json below
    /*return['name' => 'veg pizza', 'base' => 'classic'];*/
});
