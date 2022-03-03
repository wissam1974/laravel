<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
//use DB;

class PizzaController extends Controller{
    public function formInsert(){
        return view("01_form_insert");
    }

    public function insert(){
            $objp  = new Pizza();
            $objp -> name = request('name');
            $objp -> type = request ('type');
            $objp -> base = request('base');
            
            //step 1: 
               /* <fieldset>
                <label> Extra toppings</label>
                <input type="checkbox" name="toppings[]" value="mushrooms"> Mushrooms <br>
                <input type="checkbox" name="toppings[]" value="peppers"> Peppers <br>
                <input type="checkbox" name="toppings[]" value="garlic"> Garlic <br>
                <input type="checkbox" name="toppings[]" value="olives"> Olives <br>
                </fieldset>*/

            //step 2: add column to create_pizza_table
               /* $table->id();
                $table->timestamps();
                $table->string('type');
                $table->string('base');
                $table->string('name');
                $table->json('toppings');*/

            //step 3: php artisan migrate:refresh

            //step 4: Model Pizz.php:     public $casts=['toppings'=>'array'];

            //step 5: Display.blade.php: 
                /*@foreach($record as $rec)
                {{$rec->type}}
                {{$rec->base}}
                {{$rec->name}}                    
                    <?php print_r ($rec->toppings) ; ?>
                <?php echo "<br>"; ?>
                @endforeach*/  

            //step 6:onepizza.blade.php
                /*h1>Order for {{ $pizza->name }}</h1>
                <p class="type">Type - {{ $pizza->type }}</p>
                <p class="base">Base - {{ $pizza->base }}</p>
                <p class="base"><?php print_r ($pizza->toppings) ; ?></p>*/

            $objp -> toppings = request('toppings');

            $objp -> save();
            return ('record well inserted');        
    }

    public function all(){
        //1
       // $arrPizza = Pizza::all();
        //echo "<pre>"; print_r ($arrPizza);
        $rec = Pizza::OrderBy('name','desc')->get();
        //$arrPizza = Pizza::where('name','wissam')->get();
       return view ('display', ['record'=>$rec]);
    }

    public function show($id){
        //$recPizza = Pizza::find($id);
        $recPizza = Pizza::findOrFail($id);
       return view ('onepizza', ['pizza'=>$recPizza]);
       
    }

    public function getRec($id){
        $recPizza = Pizza::where('id', $id)
               ->orderBy('id')
               ->get();        
       return view ('qryonerec', ['pizza'=>$recPizza]);
    }

    public function formUpdate(){
        return view("02_form_update");
    }

    public function update(){
        $objp  = new Pizza();
        $objp -> id = request('id');
        $objp -> name = request('name');         
        $objp -> type = request ('type');
        $objp -> base = request('base');
        //initialize VARs
        $id = $objp -> id;
        $name = $objp -> name;
        $type = $objp -> type;
        $base = $objp -> base;
        $objp = Pizza::where("id", $id)->update(["name" => $name, "type" => $type, "base" => $base]);        
        return redirect('/allpizza');
    }

    public function selectAll(){
      $objp  = new Pizza();        
      $objp  =  Pizza::all();
      //echo "<pre>" ;print_r ($objp);
      return view ('selectALL', ['record'=>$objp]);      

    }

    ///////////////////////////////////////////////////////////////////////
    //use DB;
    public function indexp(){
        
        $pz = \DB::table('pizza')->get();
        //echo "<pre>" ;print_r ($pz);

        return view('displayDB', ['arrp' => $pz]);
       //return ('uuuuu');

    }

    public function formDelete(){
        return view("delete");
    }

    public function delete(){
        /*
        $objp  = new Pizza();
        $objp -> id = request('id');
        $objp = Pizza::find($objp -> id);
        $objp->delete();
        return ("delete????");
        */
            //OR
        
        $id = request('id');
        $deleted = Pizza::where('id', $id)->delete();
        return ("delete????");
    }
}
