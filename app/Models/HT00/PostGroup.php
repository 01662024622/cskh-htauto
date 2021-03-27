<?php

namespace App\Models\HT00;

use Illuminate\Database\Eloquent\Model;

class PostGroup extends Model
{
    protected $fillable = [
        'group_id', 'post_id', 'role', 'create_by', 'modify_by'
    ];
    protected $table = "ht00_post_group";
}
