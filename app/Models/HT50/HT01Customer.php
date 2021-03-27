<?php

namespace App\Models\HT50;

use Illuminate\Database\Eloquent\Model;

class HT01Customer extends Model
{
    protected $fillable=[
        'code','name','voucher','user_older','user'
    ];
    protected $fillable_store = [
        'code','name','voucher','user_older','user'
    ];
    protected $fillable_update = [

    ];

    protected $table = "ht50_ht01_customer";
}
