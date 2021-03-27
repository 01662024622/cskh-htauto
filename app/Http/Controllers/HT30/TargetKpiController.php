<?php

namespace App\Http\Controllers\HT30;

use App\Http\Controllers\Base\ResouceController;
use App\Models\HT30\TargetKpi;
use App\Services\HT30\TargetKpiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TargetKpiController extends ResouceController
{
    function __construct(TargetKpiService $service)
    {
        $this->middleware('auth');
        parent::__construct($service, array('active' => 'okrs'));
    }

    public function store(Request $request)
    {
        TargetKpi::where('user_id', $request->user_id)
            ->where('year', $request->year)->update(array('status'=> 1));
        $data = $request->data;
        foreach ($data as $ele) {
            TargetKpi::updateOrCreate(
                ['user_id' => $request->user_id, 'year' => $request->year, 'target_id' => $ele],
                ['modify_by' => Auth::id(), 'status' => 0]
            );
        }
        return true;
    }
}
