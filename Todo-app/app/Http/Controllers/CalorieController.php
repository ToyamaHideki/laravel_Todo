<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calorie;

class CalorieController extends Controller
{
    public function calorie(Request $request){
        
        $calories = new Calorie;
        
        $date = $request -> date;
        $calorie = $request -> calorie;
        $test =$calories -> where("date",$date) ->first();

        if(isset($test) == false){

            $calories -> date        = $date;
            $calories -> calorie     = $calorie;
            $calories -> save();

        }else{
            $test ->update([
                "calorie" => $test ->calorie += $calorie
            ]);
        }

        return view("we");
    }
}
