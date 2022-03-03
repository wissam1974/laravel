<?php
  // "<pre>";      print_r ($pizza);
?>

@extends('HeaderFooter')
@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
 
  <form action="/onerecpza/{{ $pizza->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="/allpizza" class="back"><- Back to all pizzas</a>
@endsection 

