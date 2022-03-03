<?php
// second step
//echo "<pre>"; print_r ($arraypiz2);
?>

@extends('HeaderFooter')
@section('content')
<p> This is a start page </p>
<!-- first step -->
    <?php /*echo $name . '--' . $type . '--' . $price ."<br>";*/ ?>
    {{$name}} -- {{$type}} -- {{$price}} <br>

<!-- second step -->
    <div>
        <?php
        /*  foreach($arraypiz2 as $key=>$val){
                echo $key . "//" . $val . "<br>";
            }*/
        ?>
    </div>                  
    <!-- @foreach($arraypiz2 as $k=>$v)
            {{$k}}
        @endforeach  -->

<!-- Third step -->
    <!-- @foreach($arraypiz3 as $arp)
        <div>
                {{$arp['name3']}} -- {{$arp['type3']}}
        </div>
        @endforeach -->
    @if ($price > 10)
    <p>This Pizza is very expensive</p>
    @elseif($price < 6)
    <p> This pizza is very cheap</p>
    @else
    <p>This pizza has a normal price</p>
    @endif
    <!-- @php
    $fname='wissam';
    echo $fname;
    @endphp -->        
@endsection