<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excution;
use App\Models\Genru;
use App\Models\Task;

class IndexController extends Controller
{
    // トップページ読み込み時
    public function index(){
        $excutions = Excution::all();
        $genrus    = Genru::all();
        

        return view("index",["excutions"=>$excutions,"genrus"=>$genrus]);
    }
}
