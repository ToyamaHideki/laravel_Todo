<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class realsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("reals") -> insert([
            ["date" => "2021-12-01", "real" => "67.00" , "protain" => "52", "calorie" => "2800"] ,
            ["date" => "2021-12-01", "real" => "66.80" , "protain" => "48", "calorie" => "2600"] ,
            ["date" => "2021-12-02", "real" => "66.60" , "protain" => "54", "calorie" => "2700"] ,
            ["date" => "2021-12-03", "real" => "66.70" , "protain" => "53", "calorie" => "2200"] ,
            ["date" => "2021-12-04", "real" => "66.80" , "protain" => "47", "calorie" => "2300"] ,
            ["date" => "2021-12-05", "real" => "66.50" , "protain" => "54", "calorie" => "2500"] ,
            ["date" => "2021-12-06", "real" => "66.60" , "protain" => "45", "calorie" => "2800"] ,
            ["date" => "2021-12-07", "real" => "66.80" , "protain" => "54", "calorie" => "2600"] ,
            ["date" => "2021-12-08", "real" => "66.70" , "protain" => "57", "calorie" => "2500"] ,
            ["date" => "2021-12-09", "real" => "66.80" , "protain" => "53", "calorie" => "2600"] ,
            ["date" => "2021-12-10", "real" => "66.50" , "protain" => "64", "calorie" => "2200"] ,
            ["date" => "2021-12-11", "real" => "66.40" , "protain" => "63", "calorie" => "2600"] ,
            ["date" => "2021-12-12", "real" => "66.60" , "protain" => "56", "calorie" => "2600"] ,
            ["date" => "2021-12-13", "real" => "66.80" , "protain" => "43", "calorie" => "2700"] ,
            ["date" => "2021-12-14", "real" => "66.70" , "protain" => "46", "calorie" => "2200"] ,
            ["date" => "2021-12-15", "real" => "66.40" , "protain" => "65", "calorie" => "2800"] ,
            ["date" => "2021-12-16", "real" => "66.30" , "protain" => "62", "calorie" => "2700"] ,
            ["date" => "2021-12-17", "real" => "66.80" , "protain" => "65", "calorie" => "2600"] ,
            ["date" => "2021-12-18", "real" => "66.60" , "protain" => "63", "calorie" => "2500"] ,
            ["date" => "2021-12-19", "real" => "66.80" , "protain" => "64", "calorie" => "2600"] ,
            ["date" => "2021-12-21", "real" => "66.60" , "protain" => "54", "calorie" => "2800"] ,
            ["date" => "2021-12-22", "real" => "66.80" , "protain" => "52", "calorie" => "2600"] ,
            ["date" => "2021-12-23", "real" => "66.70" , "protain" => "62", "calorie" => "2500"] ,
            ["date" => "2021-12-24", "real" => "66.80" , "protain" => "67", "calorie" => "2700"] ,
            ["date" => "2021-12-25", "real" => "66.80" , "protain" => "52", "calorie" => "2800"] ,
            ["date" => "2021-12-26", "real" => "66.90" , "protain" => "46", "calorie" => "2200"] ,
            ["date" => "2021-12-27", "real" => "66.80" , "protain" => "51", "calorie" => "2600"] ,
            ["date" => "2021-12-28", "real" => "66.70" , "protain" => "46", "calorie" => "2300"] ,
            ["date" => "2021-12-29", "real" => "66.60" , "protain" => "56", "calorie" => "2600"] ,
            ["date" => "2021-12-30", "real" => "66.80" , "protain" => "63", "calorie" => "2600"] ,
            ["date" => "2021-12-31", "real" => "66.50" , "protain" => "43", "calorie" => "2600"] ,



            ["date" => "2022-01-01", "real" => "66.70" , "protain" => "57", "calorie" => "2500"] ,
            ["date" => "2022-01-02", "real" => "66.80" , "protain" => "61", "calorie" => "2600"] ,
            ["date" => "2022-01-03", "real" => "66.50" , "protain" => "52", "calorie" => "2600"] ,
            ["date" => "2022-01-04", "real" => "66.80" , "protain" => "42", "calorie" => "2200"] ,
            ["date" => "2022-01-05", "real" => "66.70" , "protain" => "78", "calorie" => "2400"] ,
            ["date" => "2022-01-06", "real" => "66.60" , "protain" => "86", "calorie" => "2300"] ,
            ["date" => "2022-01-07", "real" => "66.40" , "protain" => "78", "calorie" => "2200"] ,
            ["date" => "2022-01-08", "real" => "66.60" , "protain" => "87", "calorie" => "1900"] ,
            ["date" => "2022-01-09", "real" => "66.50" , "protain" => "93", "calorie" => "1800"] ,
            ["date" => "2022-01-10", "real" => "66.40" , "protain" => "86", "calorie" => "1900"] ,
            ["date" => "2022-01-11", "real" => "66.40" , "protain" => "93", "calorie" => "1800"] ,
            ["date" => "2022-01-12", "real" => "66.50" , "protain" => "92", "calorie" => "1700"] ,
            ["date" => "2022-01-13", "real" => "66.60" , "protain" => "102", "calorie" => "1900"] ,
            ["date" => "2022-01-14", "real" => "66.30" , "protain" => "98", "calorie" => "1800"] ,
            ["date" => "2022-01-15", "real" => "66.40" , "protain" => "104", "calorie" => "1800"] ,
            ["date" => "2022-01-16", "real" => "66.30" , "protain" => "97", "calorie" => "1800"] ,
            ["date" => "2022-01-17", "real" => "66.10" , "protain" => "104", "calorie" => "1750"] ,
            ["date" => "2022-01-18", "real" => "66.00" , "protain" => "110", "calorie" => "1700"] ,
            ["date" => "2022-01-19", "real" => "65.80" , "protain" => "127", "calorie" => "1900"] ,
            ["date" => "2022-01-20", "real" => "65.80" , "protain" => "102", "calorie" => "2000"] ,
            ["date" => "2022-01-21", "real" => "65.50" , "protain" => "108", "calorie" => "1700"] ,
            ["date" => "2022-01-22", "real" => "65.30" , "protain" => "107", "calorie" => "1900"] ,
            ["date" => "2022-01-23", "real" => "65.50" , "protain" => "103", "calorie" => "1950"] ,
            ["date" => "2022-01-24", "real" => "65.30" , "protain" => "95", "calorie" => "1800"] ,
            ["date" => "2022-01-25", "real" => "65.20" , "protain" => "120", "calorie" => "1900"] ,
            ["date" => "2022-01-26", "real" => "65.30" , "protain" => "112", "calorie" => "1700"] ,

            ]) ;
    }
}
// date real protain calorie