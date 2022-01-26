<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excution;
use App\Models\Task;
use App\Models\Genru;

class ExcutionController extends Controller
{
  // 新規プロジェクトの作成
  public function store(Request $request)
  {
    // 値がなければリダイレクト
    if ($request->excution == null) {
      return redirect("");
    }
    // 既存プロジェクトでリダイレクト
    if (Excution::where("excution", $request->excution) != null) {
      $excution = new Excution;
      $excute = $request->excution;
      $excution->excution = $excute;
      $excution->save();     
      return redirect("");
    } else {
      return redirect("");
    }
  }

  // 検索機能
  public function search(Request $request){


    
    $excute = $request -> excution;

    $excutions = new Excution;
    $excutions = $excutions ->where("excution","like",$excute."%")->get();

    $tasks = new Task;
    $tasks = $tasks ->where("deadline" , "like",$excute."%") ->get();
    $genrus     = Genru::all();


    return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);


  }







}
