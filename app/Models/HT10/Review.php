<?php

namespace App\Models\HT10;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name', 'type', 'apartment_id', 'user_id', 'create_by', 'content', 'image', 'confirm', 'status', 'user_status',
        'task_id', 'browser_task_id', 'modify_by'
    ];
    protected $fillable_store = [
        'name', 'type', 'apartment_id', 'user_id', 'content', 'image', 'confirm', 'status', 'user_status'
    ];
    protected $fillable_update = [
        'name', 'type', 'apartment_id', 'user_id', 'content', 'image', 'confirm', 'user_status'
    ];
    protected $table = "ht10_reviews";
}
