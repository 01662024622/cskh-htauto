<?php

namespace App\Models\HT30;

use Illuminate\Database\Eloquent\Model;

class TargetKpi extends Model
{
    protected $fillable = [
        'target_id','user_id','year','status','create_by','modify_by'
    ];
    protected $fillable_store = [
        'target_id','user_id','year',
    ];
    protected $fillable_update = [
        'target_id','user_id','year',
    ];
    public function kpis()
    {
        return $this->hasMany(Kpi::class,'td_id','id')->where('ht30_kpis.status',0);
    }
    protected $table = "ht30_target_kpi";
}
