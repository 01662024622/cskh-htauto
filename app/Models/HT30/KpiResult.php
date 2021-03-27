<?php

namespace App\Models\HT30;

use Illuminate\Database\Eloquent\Model;

class KpiResult extends Model
{

    protected $fillable = [
        'kpi_id', 'month', 'year','result', 'status','create_by','modify_by'
    ];
    protected $fillable_store = [
        'kpi_id', 'month', 'year','result'
    ];
    protected $fillable_update = [
        'result'
    ];
    public function resultDetails()
    {
        return $this->hasMany(Result::class,'kr_id','id')->where('ht30_results.status',0);
    }
    protected $table = "ht30_kpi_result";
}
