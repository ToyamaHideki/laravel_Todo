<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Ideal;

class IdealController extends Controller
{
    public function ideal(Request $request){
        
        $ideal_weight = new Ideal;
        
        $date = $request -> date;
        $ideal = $request -> ideal;
        $test =$ideal_weight -> where("date",$date) ->first();

        if(isset($test) == false){

            $ideal_weight -> date     = $date;
            $ideal_weight -> ideal     = $ideal;
            $ideal_weight -> save();

        }else{
            Ideal::where("date",$date) ->first() ->update([
               'ideal' => $ideal,
            ]);    
        }

        return view("we");
    }
}
