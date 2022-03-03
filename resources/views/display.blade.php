<?php
//echo "<pre>"; print_r ($record);
?>

@extends('HeaderFooter')
@section('content')
        <!-- @foreach($record as $rec)
            {{$rec->type}} <?php /* echo "<br>"; */ ?>
            {{$rec->base}} <?php /* echo "<br>"; */ ?>
            {{$rec->name}} <?php /* echo "<br>"; */ ?>
        @endforeach -->
        @foreach($record as $rec)
            {{$rec->type}}
            {{$rec->base}}
            {{$rec->name}}            
            <!-- <?php echo "<pre>"; print_r ($rec->toppings) ; ?>-->             
             @foreach($rec->toppings as $topping)
                <li>
                    {{$topping}}
                </li>
             @endforeach
            <!-- <?php echo "<br>"; ?> -->
        @endforeach    
@endsection

