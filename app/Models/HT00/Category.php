<?php

namespace App\Models\HT00;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $fillable = [
        'title', 'parent_id', 'status', 'slug', 'type', 'url', 'icon', 'header', 'sort', 'role', 'create_by', 'modify_by'
    ];
    public $fillable_store = [
        'title', 'parent_id', 'type', 'url', 'role', 'icon', 'header'
    ];
    public $fillable_update = [
        'title', 'parent_id', 'type', 'url', 'role', 'icon', 'header'
    ];
    protected $table = "ht00_categories";

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->where('status', 0)->orderBy('sort');
    }
}
