<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    protected $guarded =['id','create_at'];
    use HasFactory;
    use SoftDeletes;
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