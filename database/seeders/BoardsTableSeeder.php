<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'user_id' => '1',
            'name' => 'かんりにん',
            'title' => 'はじめまして！',
            'story' => 'まずはお試し感覚で気軽にあいさつなどを投稿してみましょう！',
        ];
        DB::table('boards')->insert($param);
    }
}
