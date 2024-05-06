@extends('layout.layout')

@section('content')
        <div class="content">
            
            <img src="{{ asset('Img/pizza-house.png') }}" alt="pizza house logo">
            <div class="title m-b-md">The North's best pizzas</div>
            <p class="msg">{{ session('mssg') }}</p>
            <a href="/create">Order a pizza</a>

        </div>
    @endsection