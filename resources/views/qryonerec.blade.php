<?php
//echo "<pre>"; print_r ($pizza);
?>


@extends('HeaderFooter')
@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $pizza[0]->name }}</h1>
  <p class="type">Type - {{ $pizza[0]->type }}</p>
  <p class="base">Base - {{ $pizza[0]->base }}</p>
 
  <form action="/onerecpza/{{ $pizza[0]->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="/allpizza" class="back"><- Back to all pizzas</a>
@endsection 







