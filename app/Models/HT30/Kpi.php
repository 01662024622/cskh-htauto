<?php

namespace App\Models\HT30;

use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    protected $fillable = [
        'name','td_id', 'description', 'type','minus', 'level','time','status','create_by','modify_by'
    ];
    protected $fillable_store = [
       'name', 'td_id', 'description', 'level','time', 'minus','type'
    ];
    protected $fillable_update = [
        'name','td_id', 'description'
    ];
    public function results()
    {
        return $this->hasMany(KpiResult::class,'kpi_id','id')
            ->where('ht30_kpi_result.status',0);
    }

    protected $table = "ht30_kpis";
}
