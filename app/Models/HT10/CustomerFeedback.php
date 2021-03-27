<?php

namespace App\Models\HT10;

use Illuminate\Database\Eloquent\Model;

class CustomerFeedback extends Model
{
    protected $fillable = [
        'customer_code','attitude', 'knowledge', 'time', 'cost', 'diversity', 'quality', 'note','create_by','modify_by','name','phone','email',
    ];
    public $fillable_store = [
        'customer_code','name','phone','email', 'attitude', 'knowledge', 'time', 'cost', 'diversity', 'quality', 'note'
    ];
    public $fillable_update = [

    ];
    protected $table = "ht10_customer_feedback";
}
