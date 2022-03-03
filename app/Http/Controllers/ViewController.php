<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function welcome () {
        return view('welcome');
    }

    public function start(){
        //First step
        $arpizz= ['name'=>'veget', 'type'=>'classic', 'price'=>55];
        //return view('vstart', $arpizz);  

        //Second step
        $arpizz2= ['name2'=>'veget', 'type2'=>'classic', 'price2'=>20];
        $name = request ('name');
        //return view ('vstart', $arpizz, ['arraypiz2'=>$arpizz2  ,  'nm'=>$name]);

        //Third step
        $arpizz3=[        
            ['name3'=>'veget', 'type3'=>'classic', 'price3'=>5],
            ['name3'=>'chiken', 'type3'=>'chikentype', 'price3'=>20],
         ];
        $name = request ('name');

        return view ('vstart', $arpizz, ['arraypiz2'=>$arpizz2  ,  'nm'=>$name, 'arraypiz3'=>$arpizz3]);
    }
}
