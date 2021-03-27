<?php

namespace App\Models\HT10;

use Illuminate\Database\Eloquent\Model;

class Improve360 extends Model
{
    protected $fillable = [
        'content'
    ];
    public $fillable_store = [
        'content'
    ];
    public $fillable_update = [

    ];
    protected $table = "ht10_improve_360";
}
