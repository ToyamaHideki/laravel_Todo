<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ExcutionController;
use App\Http\Controllers\GenruController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\IdealController;
use App\Http\Controllers\WeightController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// トップページ
Route::get('/', [indexController::class,'index'])->name("home");


// プロジェクト新規作成
Route::post('/newproject', [ExcutionController::class,"store"])->name("newproject");
// プロジェクトの検索
Route::get("/searchproject",[ExcutionController::class , "search"])->name("search");



//新規タスクの作成
Route::post('/newtask', [TaskController::class,"store"])->name("newtask");
//タスク一覧の表示
Route::get('/showtask',[TaskController::class,"taskshow"])->name("showtask");
// タスクの削除
Route::get('/delete',[TaskController::class,"delete"])->name("delete");
// タスク完了
Route::post("/clear",[TaskController::class,"clear"])-> name("clear");
// タスク編集画面表示
Route::get("/edit",[TaskController::class,"edit"]) -> name("edit");
// タスク更新
Route::get("/update",[TaskController::class,"update"]) -> name("update");
// 未完了に戻す　(ミスタップのため)
Route::get("/return",[TaskController::class,"return"]) -> name("return");


Route::get("/weight",[WeightController::class,"show"]) -> name("weight");


// 理想体重を登録
Route::post("/ideal",[WeightController::class,"ideal"]) -> name("ideal");
// 現在体重表示
Route::post("/real",[WeightController::class,"real"]) -> name("real");
//　摂取蛋白質登録
Route::post("/protein",[WeightController::class,"protein"]) -> name("protein");
//　カロリー登録
Route::post("/calorie",[WeightController::class,"calorie"]) -> name("calorie");
