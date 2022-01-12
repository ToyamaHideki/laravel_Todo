<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ExcutionController;
use App\Http\Controllers\GenruController;
use App\Http\Controllers\TaskController;

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
Route::get('/newproject', [ExcutionController::class,"store"])->name("newproject");

//新規タスクの作成
Route::get('/newtask', [TaskController::class,"store"])->name("newtask");




// プロジェクト詳細ボタン