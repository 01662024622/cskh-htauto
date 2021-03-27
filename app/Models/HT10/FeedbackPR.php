<?php

namespace App\Models\HT10;

use Illuminate\Database\Eloquent\Model;

class FeedbackPR extends Model
{
    protected $fillable = [
        'amount','create_by','modify_by'
    ];
    public $fillable_store = [
        'amount'
    ];
    public $fillable_update = [

    ];
    protected $table = "ht10_feedback_pr";
}
