<?php
//echo "<pre>"; print_r ($arrp);
?>

@extends('HeaderFooter')
@section('content')
        <!-- @foreach($arrp as $rec)
            {{$rec->type}} <?php /* echo "<br>"; */ ?>
            {{$rec->base}} <?php /* echo "<br>"; */ ?>
            {{$rec->name}} <?php /* echo "<br>"; */ ?>
        @endforeach -->
        @foreach($arrp as $rec)
            {{$rec->type}}
            {{$rec->base}}
            {{$rec->name}}            
            <!-- <?php echo "<pre>"; print_r ($rec->toppings) ; ?>-->           
            <ul>  
             @foreach($rec as $key=>$val)
                <li>
                    {{$val}}
                </li>
             @endforeach
            </ul>
            <!-- <?php echo "<br>"; ?> -->
        @endforeach    
@endsection

