<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class genrusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $columns = collect(['genru_id',"genru", 'genru_name', ]);
        $values = collect([
            [null, '上腕二頭筋']
        ]);

       

        DB::table("genrus") -> insert([
            // 胸部
            ["genru_id" => null ,"genru" => "大胸筋","genru_name" => "上部：鎖骨の内側～上腕骨"],
            ["genru_id" => null ,"genru" => "大胸筋","genru_name" => "中部：胸骨～上腕骨"],
            ["genru_id" => null ,"genru" => "大胸筋","genru_name" => "下部：腹直筋鞘前葉～上腕骨"],
            // 僧帽筋
            ["genru_id" => null ,"genru" => "僧帽筋","genru_name" => "上部：首の根元付近"],
            ["genru_id" => null ,"genru" => "僧帽筋","genru_name" => "中部：肩甲骨周り(上部)"],
            ["genru_id" => null ,"genru" => "僧帽筋","genru_name" => "下部：肩甲骨周り(下部)"],
            // 広背筋
            ["genru_id" => null ,"genru" => "背中","genru_name" => "広背筋(中央部から脇の下)"],
            ["genru_id" => null ,"genru" => "背中","genru_name" => "大円筋(脇の下部分)"],
            ["genru_id" => null ,"genru" => "背中","genru_name" => "脊柱起立筋(頭蓋骨の下~背骨の両脇,骨盤付近)"],
            // 腹部
            ["genru_id" => null ,"genru" => "腹部","genru_name" => "腹直筋(前面)"],
            ["genru_id" => null ,"genru" => "腹部","genru_name" => "腹斜筋（外側）"],
            ["genru_id" => null ,"genru" => "腹部","genru_name" => "腹横筋(インナーマッスル)"],

            // 腕
            ["genru_id" => null ,"genru" => "腕部","genru_name" => "三角筋(肩)"],
            ["genru_id" => null ,"genru" => "腕部","genru_name" => "上腕二頭筋(前側)"],
            ["genru_id" => null ,"genru" => "腕部","genru_name" => "上腕三頭筋(二の腕)"],
            ["genru_id" => null ,"genru" => "腕部","genru_name" => "前腕伸筋群"],
            ["genru_id" => null ,"genru" => "腕部","genru_name" => "前腕屈筋群"],
            //足
            ["genru_id" => null ,"genru" => "脚部","genru_name" => "大腿四頭筋(太もも前部)"],
            ["genru_id" => null ,"genru" => "脚部","genru_name" => "大腿二頭筋(太もも後部)"],
            ["genru_id" => null ,"genru" => "脚部","genru_name" => "大体三頭筋(ふくらはぎ)"],
        ]) ;

        
    }
}

// 上部
// 大胸筋
//     胸板が厚くなりかっこよく、美しく見える
//     代謝が上がりやすくなる
//     日常動作のパワーアップ
//     女性はバストアップも期待できる
//     トレーニングのモチベーションが上がる


// 僧帽筋
//     肩こりの改善につながる
//     背中に厚みが出る
//     姿勢が良くなる

// 広背筋
//     姿勢改善
//     肩こりや腰痛の予防
//     基礎代謝の向上

// 腕
// 健康的な印象を与える
// 腕力がつく
// 握力も鍛えられる

// 腹部



// 腕
//     三角筋
//     上腕二頭筋
//     上腕三頭筋
//     前腕

// 足
// 大腿四頭筋
// 大腿二頭筋
// 大体三頭筋

