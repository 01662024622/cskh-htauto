<?php

namespace App\Models\HT10;

use Illuminate\Database\Eloquent\Model;

class FeedbackWarehouse extends Model
{
    protected $fillable = [
        'type', 'code_product', 'amount','create_by','modify_by'
    ];
    public $fillable_store = [
        'type', 'code_product', 'amount'
    ];
    public $fillable_update = [

    ];
    protected $table = "ht10_feedback_warehouse";
}
