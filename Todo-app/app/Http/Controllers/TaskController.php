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
        $yy = $request -> yy;
        $mm = $request -> mm;
        $dd = $request -> dd;
        // DATE型に変更
        $excute = $yy."-".$mm."-".$dd;

        $task = new Task;

        // $task -> id           = "自動採番"
        $task -> name         = $request ->name;
        $task -> status       = 1;
        // $task -> delete_at = null;
        // $task -> achivement   =null;
        $task -> deadline     = $excute;
        $task -> setcount     = $request ->setcount;
        $task -> count        = $request ->count;
        $task -> genru        = $request ->genru;
        $task -> detail       = $request ->detail;

        $task -> save();

        return redirect("");
    
        }





    // タスク一覧表示
    public function taskShow(Request $request){

        $task = new Task;

        $excute     = $request -> excution;
        $tasks      = $task -> where("deadline",$excute)->get();
       
        $excutions  = Excution::all();
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
        $excutions  = Excution::all();
        $genrus     = Genru::all();

        return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);
    }


    // タスク完了
    public function clear(Request $request){
        
        $task = new Task;
        
        $id = $request -> id;
        $status = $request -> status;
        $task -> where("id",$id) -> get();
        $task -> status = 1;
        $task -> achivement = 
        $task -> save();


        // 値を保持してindexに変換
        $excute     = $request -> excution;
        $tasks      = $task -> where("deadline",$excute)->get();
        $excutions  = Excution::all();
        $genrus     = Genru::all();

        return view("index",["tasks"=>$tasks ,"excutions"=>$excutions, "genrus"=>$genrus]);

    }




}
// id	自動採番
// name	タスク名　
// status　ステータス　完了0 未完了1 期限切れ2
// created_at	save()メソッドで自動挿入
// updated_at	save()メソッドで自動挿入
// delete_at	タスクを削除した時に日付挿入　null
// achivement   完了を押したときに挿入　　　　null
// deadline　　  完了期限 excutionとココを比較
// setcount	　　セット数
// count	　　回数
// genru	　　ジャンル
// detail	　　詳細　　　　　　　　　　　　　null
// delete_flg   true設定