<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inquiry;
use App\Models\User;

class Inquiry extends Model
{
    use HasFactory;

    protected $guarded = array('id', 'status',);

    public static $rules = array(
        'user_id' => 'required',
        'detail' => 'required',
    );

    // リレーション
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
