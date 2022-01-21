<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protein;

class ProteinController extends Controller
{
    public function protein(Request $request){
        
        $proteins = new Protein;
        
        $date = $request -> date;
        $protein = $request -> protein;
        $test =$proteins -> where("date",$date) ->first();

        if(isset($test) == false){

            $proteins -> date     = $date;
            $proteins -> protain  = $protein;
            $proteins -> save();

        }else{
            
            $test ->update([
                "protain" => $test ->protain += $protein
            ]);
           
        }

        return view("we");
    }
}
