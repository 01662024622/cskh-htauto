<?php

namespace App\Models\HT00;

use Illuminate\Database\Eloquent\Model;

class PostApartment extends Model
{
    protected $fillable = [
        'apartment_id', 'post_id','role', 'create_by', 'modify_by'
    ];
    protected $table = "ht00_post_apartment";
}
