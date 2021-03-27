<?php

namespace App\Models\HT00;

use Illuminate\Database\Eloquent\Model;

class CategoryGroup extends Model
{
    protected $fillable = [
        'group_id', 'category_id', 'role', 'create_by', 'modify_by'
    ];
    protected $table = "ht00_category_group";
}
