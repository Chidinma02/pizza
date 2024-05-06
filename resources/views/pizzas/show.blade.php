@extends('layouts.app')

@section('content')
      <div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name }}</h1>
    <p class="">Type: {{ $pizza->type }}</p>
    <p class="">Base: {{ $pizza->base }}</p>
    <p class="">Extra toppings:</p>
    <ul>

      @foreach ($pizza->toppings as $topping )
      <li>{{ $topping }}</li>
        
      @endforeach
    </ul>  

    <form action="/pizzas/{{ $pizza->id }}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit">Complete order</button>
  </form>
  <a href="/pizzas">back to order</a>
</div>
    @endsection