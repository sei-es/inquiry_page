<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class T1_commentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => '1',
            'name' => 'かんりにん',
            'comment' => '画面下の投稿フォームより投稿すると、投稿順に上から投稿者と投稿コメントが表示されます。',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '1',
            'name' => 'かんりにん',
            'comment' => 'それぞれの板（いた）ごとに話題が分かれており、アプリにユーザ登録している人同士でその話題に関するコメントが投稿できます',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '1',
            'name' => 'たけだ',
            'comment' => 'もちろん投稿せずに他ユーザのやりとりを眺めているだけでも楽しいですよ(^^)/',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '2',
            'name' => 'こばやし',
            'comment' => 'そういえば、最近舞台とか見てないな～。積極的に外に出ていかないと💦',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '3',
            'name' => 'たけだ',
            'comment' => '好きなのはやっぱラーメンかな(^_-)-☆',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '4',
            'name' => '先生',
            'comment' => 'わるいごはいないがなぁ',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '8',
            'name' => 'スズキ',
            'comment' => '富士山にいつかのぼってみたい！',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '5',
            'name' => 'お調子もの',
            'comment' => '今日は昼から飲んでます。',
        ];
        DB::table('t1_comments')->insert($param);

        $param = [
            'user_id' => '10',
            'name' => 'mike',
            'comment' => 'Hi! My name is Mike.',
        ];
        DB::table('t1_comments')->insert($param);
    }
}
