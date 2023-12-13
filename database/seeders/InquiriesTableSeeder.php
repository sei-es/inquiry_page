<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InquiriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => '1',
            'name' => 'かんりにん',
            'email' => 'kanri@mail.com',
            'detail' => 'テストの問い合わせです',
        ];
        DB::table('inquiries')->insert($param);

        $param = [
            'user_id' => '2',
            'name' => 'こばやし',
            'email' => 'kobayashi@mail.com',
            'detail' => 'このアプリは誰でもできますか？',
        ];
        DB::table('inquiries')->insert($param);

        $param = [
            'user_id' => '4',
            'name' => '先生',
            'email' => 'sensei@mail.com',
            'detail' => 'わるいこがいます。困っています。対応できますか？',
        ];
        DB::table('inquiries')->insert($param);

        $param = [
            'user_id' => '10',
            'name' => 'mike',
            'email' => 'mike@mail.com',
            'detail' => 'ちょっと使い方がわからない所があります。',
        ];
        DB::table('inquiries')->insert($param);

        $param = [
            'user_id' => '6',
            'name' => 'さくら',
            'email' => 'sakura@mail.com',
            'detail' => '私の名前を変更することはできますか？',
        ];
        DB::table('inquiries')->insert($param);

        $param = [
            'user_id' => '2',
            'name' => 'こばやし',
            'email' => 'kobayashi@mail.com',
            'detail' => 'メールアドレスを変更したいです。可能でしょうか？',
        ];
        DB::table('inquiries')->insert($param);
    }
}
