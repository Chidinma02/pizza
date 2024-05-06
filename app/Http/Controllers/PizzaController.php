<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public function index(){
     $pizzas = Pizza::all();
    //  $pizzas = Pizza::orderBy->get();
     return view('pizzas.index', compact('pizzas'));
  }
  
  public function create(){
    $pizzas = Pizza::all();
   //  $pizzas = Pizza::orderBy->get();
    return view('pizzas.create', compact('pizzas'));
 }
 public function show($id) {
    $pizza = Pizza::findorfail($id);
    return view('pizzas.show', ['pizza' => $pizza]);
}

public function store() {
 
   // error_log(request('name'));
   // error_log(request('type'));
   // error_log(request('base'));
   
   $pizza = new Pizza();
   $pizza->name = request('name');
   $pizza->type = request('type');
   $pizza->base = request('base');
   $pizza->toppings = request('toppings');
   $pizza->save();
   
 return redirect('/')->with('mssg','Thanks for ordering');
}

public function destroy($id){
   $pizza = Pizza::findorfail($id);
   $pizza->delete();

   return redirect('/pizzas');
}


}
