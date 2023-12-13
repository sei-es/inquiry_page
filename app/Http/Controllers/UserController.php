<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Inquiry;

class UserController extends Controller
{

    public function get()
    {
        


        //$inquiries = User::with('inquiries')->get();
        //return view('t0.t0_inquiries', [
          //  'inquiries' => $inquiries,
        //]);
    }

    public function post(Request $request)
    {
        $inquiries = User::with('inquiries')->get();
        return view('t0.t0_inquiries', ['inquiries' => $inquiries]);
    }
}
