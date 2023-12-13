<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BoardRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Board;

class BoardController extends Controller
{
    public function get(Request $request)
    {
        // URLパラ＝板id取得してそのテーブルdataを取得
        $board_id = $_GET['id'];
        $board = DB::table('boards')->where('id', $board_id)->first();

        // その板のコメントtableを取得
        $table_name = 't' . $board_id . '_comments';
        $comments = DB::table($table_name)->get();

        return view('boards.board', [
            'board' => $board,
            'comments' => $comments,
        ]);
    }

    public function post(BoardRequest $request)
    {

        $board_id = $_GET['id'];
        $user = Auth::user();
        $param = [
            'user_id' => $user->id,
            'name' => $user->name,
            'comment' => $request->comment,
        ];

        $table_name = 't' . $board_id . '_comments';
        DB::table($table_name)->insert($param);

        $board = DB::table('boards')->where('id', $board_id)->first();
        $comments = DB::table($table_name)->get();

        return view('boards.board', [
            'comments' => $comments, // コメント中身表示用
            'board' => $board, // 板のタイトル表示用
            //'user' => $user, // {{ $user }}を任意の場所に設置してAuth::userの取得状態を確認
        ]);
    }
}
