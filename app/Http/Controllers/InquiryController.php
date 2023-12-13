<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\InquiryRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Inquiry;
use App\Models\User;

class InquiryController extends Controller
{
    public function get()
    {
        $user = Auth::user();
        $email = $user->email;
        return view('inquiry.inquiry', [
            'email' => $email,
        ]);
    }

    public function post(InquiryRequest $request)
    {
        if ($request->t0()) {
            return view('t0.t0', [
                'inquiries'=>[
                'detail' => '',
                ]
            ]);

        } else {
            $user = Auth::user();
            $name = $user->name;
            $email = $user->email;
            $param = [
                'user_id' => $user->id,
                'name' => $name,
                'email' => $user->email,
                'detail' => $request->detail,
            ];
            DB::table('inquiries')->insert($param);

            return view('inquiry.inquiry', [
                'ok_msg' => $name . ' 様のお問い合わせを受け付けました',
                'email' => $email,
            ]);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
