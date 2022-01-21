<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Real;

class RealController extends Controller
{
    public function real(Request $request){
        
        $real_w = new Real;
        
        $date = $request -> date;
        $real = $request -> real;
        $test =$real_w -> where("date",$date) ->first();

        if(isset($test) == false){

            $real_w -> date     = $date;
            $real_w -> real     = $real;
            $real_w -> save();

        }else{
            Real::where("date",$date) ->first() ->update([
               'real' => $real,
            ]);    
        }

        // =====================================================================================================---
        $real = new Real;
        $reallist = $real -> all();
    
        foreach($reallist as $list){
            $real_weight[] = $list-> real; 
            
            // 誤表示年しかでない
            $real_date[]   = $list -> date;
        }
    
        return view("we",["real"=>$real_weight, "date" => $real_date]);
    }
}
