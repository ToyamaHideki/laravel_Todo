<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excution;


class ExcutionController extends Controller
{
   
    // 新規プロジェクトの作成
    public function store(Request $request){
       
        $excution = new Excution;
        // 個別の値を取得
        $yy = $request -> yy;
        $mm = $request -> mm;
        $dd = $request -> dd;
        // DATE型に変更
        $excute = $yy."-".$mm."-".$dd;
        $excution->excution = $excute;
        $excution ->save();

      return redirect("");

    } 
}
