<?php
//echo "<pre>"; print_r ($arrPizza);
?>
@extends('HeaderFooter')
@section('content')

        <!-- @foreach($record as $rec)
            {{$rec->type}} <?php /* echo "<br>"; */ ?>
            {{$rec->base}} <?php /* echo "<br>"; */ ?>
            {{$rec->name}} <?php /* echo "<br>"; */ ?>
        @endforeach -->

        @foreach($record as $rec)
            {{$rec->type}} --
            {{$rec->base}} --
            {{$rec->name}} --
            <?php echo "<br>"; ?>
        @endforeach
   
@endsection
 
