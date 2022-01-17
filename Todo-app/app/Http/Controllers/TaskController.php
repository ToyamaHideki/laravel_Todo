<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excution;
use App\Models\Genru;
use App\Models\Task;


class TaskController extends Controller
{
    // タスクの新規作成
    public function store(Request $request){
        
        $task = new Task;
        $excute = $request -> excution;
        // $task -> id           = "自動採番"
        $task -> name         = $request ->name;
        $task -> status       = 0;
        // $task -> delete_at = null;
        // $task -> achivement   =null;
        $task -> deadline     = $excute;
        $task -> setcount     = $request ->setcount;
        $task -> count        = $request ->count;
        $task -> genru        = $request ->genru;
        $task -> detail       = $request ->detail;

        $task -> save();

        // 値を保持してindexに変換
        $excutions  = Excution::latest("excution","desc") ->get();
        $genrus     = Genru::all();
        $tasks      = $task -> where("deadline",$excute)->get();

        return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);
    
        }





    // タスク一覧表示
    public function taskShow(Request $request){

        $task = new Task;

        $excute     = $request -> excution;
        $tasks      = $task -> where("deadline",$excute) -> get();
       
        $excutions  = Excution::latest("excution","desc") ->get();
        $genrus     = Genru::all();
      

       return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);
    }

    // タスクの削除　論理削除
    public function delete(Request $request){

        $task = new Task;
        
        // リクエストでid取得 から削除
        $id = $request -> id;
        $task ->where("id",$id) -> delete();

        // 値を保持してindexに変換
        $excute     = $request -> excution;
        $tasks      = $task -> where("deadline",$excute)->get();
        $excutions  = Excution::latest("excution","desc") ->get();
        $genrus     = Genru::all();

        return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);
    }


    // タスク完了
    public function clear(Request $request){
        
        $task = new Task;
        
        $id = $request -> id;
        // $name = $request -> name;
        // dd($id);
        $task -> where("id",$id) ->update([
            "status" => $request -> status,
             "achivement" => now()
        ]);
        // 値を保持してindexに変換
        $excute     = $request -> excution;
        $tasks      = $task -> where("deadline",$excute)->get();
        $excutions  = Excution::latest("excution","desc") ->get();
        $genrus     = Genru::all();

        return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);

    }

    // タスク未完了に戻す
    public function return(Request $request){
        
        $task = new Task;
        
        $id = $request -> id;
        // $name = $request -> name;
        // dd($id);
        $task -> where("id",$id) ->update([
            "status" => $request -> status,
             "achivement" => NULL
        ]);

        



        // 値を保持してindexに変換
        $excute     = $request -> excution;
        $tasks      = $task -> where("deadline",$excute)->get();
        $excutions  = Excution::latest("excution","desc") ->get();
        $genrus     = Genru::all();

        return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);

    }


    // タスク編集
    public function edit(Request $request){
        $id = $request -> id;

        $tasks = Task::where("id",$id) ->get();

        // 値を保持してindexに変換
        $excute     = $request -> excution;
        $excutions  = Excution::latest("excution","desc") ->get();
        $genrus     = Genru::all();

        return view("edit",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);

    }

    public function update(Request $request){

        
        
        $tk = new Task;
        $tk = $tk -> where("id",$request -> id) ->update([
            "name"       =>	$request -> name,
            "status"     =>	$request -> status,
            "deadline"   =>	$request -> excution,
            "setcount"   =>	$request -> setcount,
            "count"	     =>	$request -> count,
            "genru"	     =>	$request -> genru,
            "detail"	 =>	$request -> detail
            
        ]);

        $task = new Task;


        // 値を保持してindexに変換
        $excutions  = Excution::latest("excution","desc") ->get();
        $genrus     = Genru::all();
        $tasks      = $task -> where("deadline",$request -> excution)->get();

        return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);


    }

}