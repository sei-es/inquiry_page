<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class T2_commentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => '6',
            'name' => 'さくら',
            'comment' => 'みなさんこんにちは☀',
        ];
        DB::table('t2_comments')->insert($param);

        $param = [
            'user_id' => '7',
            'name' => 'ゲン',
            'comment' => 'こっちの板は大人な雰囲気ですね。ぼくに合ってるかも',
        ];
        DB::table('t2_comments')->insert($param);

        $param = [
            'user_id' => '8',
            'name' => 'スズキ',
            'comment' => 'まったりながめてま～す',
        ];
        DB::table('t2_comments')->insert($param);

        $param = [
            'user_id' => '10',
            'name' => 'mike',
            'comment' => '本当は日本語しゃべれます。ちょっと方言入るっちゃけどw',
        ];
        DB::table('t2_comments')->insert($param);

        $param = [
            'user_id' => '9',
            'name' => 'K.M.',
            'comment' => 'いいなあ、今日は晴だったから気分がいいや',
        ];
        DB::table('t2_comments')->insert($param);
    }
}
