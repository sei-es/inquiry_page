<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\BoardsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Board;

class BoardsController extends Controller
{
    public function get(Request $request)
    {
        $key = $request->input('key_search');

        $query = Board::query();

        if (!empty($key)) {
            $query->where('title', 'Like', "%{$key}%")
                ->orWhere('story', 'Like', "%{$key}%");
        }

        $boards = $query->get();

        return view('boards.boards', [
            'boards' => $boards,
        ]);
    }

    public function post(BoardsRequest $request)
    {

        $user = Auth::user();
        $param = [
            'user_id' => $user->id,
            'name' => $user->name,
            'title' => $request->title,
            'story' => $request->story,
        ];
        DB::table('boards')->insert($param);

        $new_board = DB::table('boards')->orderBy('id', 'desc')->first();

        // 新しい板のDBテーブルを作成
        $new_table = 't' . $new_board->id . '_comments';
        Schema::create($new_table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->string('comment');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });

        $boards = DB::table('boards')->get();

        return view('boards.boards', [
            'message' => '新しい板が作成されました！',
            'boards' => $boards,
        ]);
    }
}
