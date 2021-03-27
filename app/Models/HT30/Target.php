<?php

namespace App\Models\HT30;

use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    protected $fillable = [
        'name', 'description','level','status','create_by','modify_by'
    ];
    protected $fillable_store = [
        'name', 'description','level'
    ];
    protected $fillable_update = [
        'name', 'description'
    ];
    public function targetKpi()
    {
        return $this->hasMany(TargetKpi::class,'target_id','id')->where('ht30_target_kpi.status',0);
    }
    protected $table = "ht30_targets";
}
