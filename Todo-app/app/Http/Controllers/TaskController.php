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

        
        $task = new task;

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
        $task -> delete_flg   = true;

        $task -> save();

        return redirect("");
    
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