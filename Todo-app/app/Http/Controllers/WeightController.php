<?php
namespace App\Http\Controllers;
use App\Models\Real;

class WeightController extends Controller
{

public function show(){
    $weight_log =[];

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