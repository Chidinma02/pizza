@extends('layouts.app')

@section('content')
<div class=" container">
  
  <div class="row">
    
    <div class="col-6 offset-3">
      <h1>Buy pizza</h1>
      <form action="/pizzas" method="POST">
        @csrf
        <label for="name" class="form-label">Your name:</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
        
        <label for="type" class="form-label">Your choice:</label>
        <select class="form-select" id="type" name="type" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="magarita">Magarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">Volcano</option>
        </select>
  
        <label for="base" class="form-label">Choose:</label>
        <select class="form-select" id="base" name="base" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
  
        <fieldset>
          <label>Extra toppings:</label>
          <br>
          <input type="checkbox" name="toppings[]" value="mushrooms">Mushroom<br/>
          <input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
          <input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
          <input type="checkbox" name="toppings[]" value="olives">Olives<br/>
        </fieldset>  
        
        <button type="submit" class="btn btn-primary">Order pizza</button>
    </form>
    </div>
  </div>
  
</div>
@endsection
