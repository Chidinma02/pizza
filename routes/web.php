<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PizzaController;
use Illuminate\Http\Request;
// Auth::routes(['register'=>false]
    
// );
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');


    
Route::get('/', function () {
    return view('welcome');
});


// Route::get('/pizzas', 'PizzaController@index');
Route::controller(PizzaController::class)->group(function(){
    Route::get("/pizzas", "index")->middleware('auth');
    Route::get("/pizzas/{id}", "show")->middleware('auth');
    Route::get("/create", "create");
    Route::post("/pizzas","store");
    Route::delete("/pizzas/{id}","destroy")->middleware('auth');;
});

// Route::get('/pizzas/{id}', 'PizzaController@index');




