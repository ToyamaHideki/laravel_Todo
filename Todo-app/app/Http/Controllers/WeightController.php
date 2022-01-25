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
        $real     = new Real;
        $reallist = $real->all();
        $ideal    = Ideal::first();
        $real     = $real::latest()->first();


        foreach ($reallist as $list) {
            $real_weight[]  = $list->real;
            $real_date[]    = $list->date;
            $real_protain[] = $list->protain;
            $real_calorie[] = $list->calorie;
        }

        return view("weight", [
            "weight"    => $real_weight,
            "date"      => $real_date,
            "protain"   => $real_protain,
            "calorie"   => $real_calorie,
            // 最新データを取得
            "ideal"     => $ideal,
            "real"      => $real
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

        if ($date == null || $real == null) {
            return $this->show();
        } else {
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
            return $this->show();
        }
    }
    //  ===================================================== ideal Controller ================================================================-

    public function ideal(Request $request)
    {

        $ideal_weight = new Ideal;

        $id = $request->id;
        $ideal = $request->ideal;
        $test = $ideal_weight->where("id", $id)->first();
        if ($ideal == null) {

            return $this->show();
        } else {

            if (isset($test) == false) {

                $ideal_weight->ideal = $ideal;
                $ideal_weight->save();
            } else {
                $test->update([
                    'ideal' => $ideal,
                ]);
            }

            return $this->show();
        }
    }

    //  ===================================================== calorie Controller ================================================================-

    public function calorie(Request $request)
    {

        $real_w = new Real;

        $date = $request->date;
        $calorie = $request->calorie;
        $test = $real_w->where("date", $date)->first();

        if ($date == null || $calorie == null) {
            return $this->show();
        } else {


            if (isset($test) == false) {

                $real_w->date        = $date;
                $real_w->calorie     = $calorie;
                $real_w->save();
            } else {
                $test->update([
                    "calorie" => $test->calorie += $calorie
                ]);
            }

            return $this->show();
        }
    }

    //  ===================================================== protain Controller ================================================================-

    function protein(Request $request)
    {

        $proteins = new Real;

        $date = $request->date;
        $protein = $request->protein;
        $test = $proteins->where("date", $date)->first();

        if ($date == null || $protein == null) {
            return $this->show();
        } else {

            if (isset($test) == false) {

                $proteins->date     = $date;
                $proteins->protain  = $protein;
                $proteins->save();
            } else {
                $test->update([
                    "protain" => $test->protain += $protein
                ]);
            }
            return $this->show();
        }
    }
}
