<?php

namespace App\Models\HT00;

use Illuminate\Database\Eloquent\Model;

class CategoryApartment extends Model
{
    protected $fillable = [
        'apartment_id', 'category_id', 'role', 'create_by', 'modify_by'
    ];
    protected $table = "ht00_category_apartment";
}
