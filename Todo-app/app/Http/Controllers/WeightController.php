<?php

namespace App\Http\Controllers;

use App\Models\Real;
use Illuminate\Http\Request;
use App\Models\Ideal;

class WeightController extends Controller
{

    // 一覧表示
    public function show()
    {
        $real = new Real;
        $reallist = $real->all();
        $ideal = Ideal::first();

        foreach ($reallist as $list) {
            $real_weight[]  = $list->real;
            $real_date[]    = $list->date;
            $real_protain[] = $list->protain;
            $real_calorie[] = $list->calorie;
        }

        return view("weight", [
            "weight"  => $real_weight,
            "date"    => $real_date,
            "protain" => $real_protain,
            "calorie" => $real_calorie,
            "ideal"   => $ideal
        ]);
    }



    //  ===================================================== real Controller ================================================================-
    public function real(Request $request)
    {
        $real_w = new Real;

        // 取得データを変数に代入
        $date = $request->date;
        $real = $request->real;
        // 日付データが一致する値を取得
        $test = $real_w->where("date", $date)->first();

        if (isset($test) == false) {
            // 値が見つからなければ作成
            $real_w->date     = $date;
            $real_w->real     = $real;
            $real_w->save();
        } else {
            // 値があればアップデート
            Real::where("date", $date)->first()->update([
                'real' => $real,
            ]);
        }

        $real = new Real;
        $reallist = $real->all();
        $reals  = Real::oldest("date")->get();
        foreach ($reals as $real) {
            $real_date[] = $real->date;
        }
        foreach ($reallist as $list) {
            $real_weight[]  = $list->real;
            // $real_date[]    = $list->date;
            $real_protain[] = $list->protain;
            $real_calorie[] = $list->calorie;
        }

        return view("weight", [
            "weight"  => $real_weight,
            "date"    => $real_date,
            "protain" => $real_protain,
            "calorie" => $real_calorie
        ]);
    }
    //  ===================================================== ideal Controller ================================================================-

    public function ideal(Request $request)
    {

        $ideal_weight = new Ideal;

        $id = $request->id;
        $ideal = $request->ideal;
        $test = $ideal_weight->where("id", $id)->get();

        if (isset($test) == false) {

            $ideal_weight->ideal = $ideal;
            $ideal_weight->save();
        } else {
            $test->update([
                'ideal' => $ideal,
            ]);
        }

        $real = new Real;
        $reallist = $real->all();
        foreach ($reallist as $list) {
            $real_weight[]  = $list->real;
            $real_date[]    = $list->date;
            $real_protain[] = $list->protain;
            $real_calorie[] = $list->calorie;
        }

        return view("weight", [
            "weight"  => $real_weight,
            "date"    => $real_date,
            "protain" => $real_protain,
            "calorie" => $real_calorie
        ]);
    }

    //  ===================================================== calorie Controller ================================================================-

    public function calorie(Request $request)
    {

        $real_w = new Real;

        $date = $request->date;
        $calorie = $request->calorie;
        $test = $real_w->where("date", $date)->first();

        if (isset($test) == false) {

            $real_w->date        = $date;
            $real_w->calorie     = $calorie;
            $real_w->save();
        } else {
            $test->update([
                "calorie" => $test->calorie += $calorie
            ]);
        }


        $real = new Real;
        $reallist = $real->all();
        $reals  = Real::oldest("date")->get();
        foreach ($reallist as $list) {
            $real_weight[]  = $list->real;
            $real_date[]    = $list->date;
            $real_protain[] = $list->protain;
            $real_calorie[] = $list->calorie;
        }

        return view("weight", [
            "weight"  => $real_weight,
            "date"    => $real_date,
            "protain" => $real_protain,
            "calorie" => $real_calorie
        ]);
    }

//  ===================================================== calorie Controller ================================================================-

    function protein(Request $request)
    {

        $proteins = new Real;

        $date = $request->date;
        $protein = $request->protein;
        $test = $proteins->where("date", $date)->first();

        if (isset($test) == false) {

            $proteins->date     = $date;
            $proteins->protain  = $protein;
            $proteins->save();
        } else {
            $test->update([
                "protain" => $test->protain += $protein
            ]);
        }

        $real = new Real;
        $reallist = $real->all();
        $reals  = Real::oldest("date")->get();
        foreach ($reallist as $list) {
            $real_weight[]  = $list->real;
            $real_date[]    = $list->date;
            $real_protain[] = $list->protain;
            $real_calorie[] = $list->calorie;
        }

        return view("weight", [
            "weight"  => $real_weight,
            "date"    => $real_date,
            "protain" => $real_protain,
            "calorie" => $real_calorie
        ]);
    }
}


