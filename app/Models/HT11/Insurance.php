<?php

namespace App\Models\HT11;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = [
        'name', 'content', 'link', 'status', 'type', 'create_by', 'modify_by'
    ];
    protected $fillable_store = [
        'name', 'content', 'link', 'type'
    ];
    protected $fillable_update = ['name', 'content', 'link', 'type'];
    protected $table = "ht11_insurance";
}
