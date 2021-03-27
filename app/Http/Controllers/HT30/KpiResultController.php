<?php

namespace App\Http\Controllers\HT30;

use App\Http\Controllers\Base\ResouceController;
use App\Models\HT30\KpiResult;
use App\Services\HT30\KpiResultService;
use Illuminate\Http\Request;

class KpiResultController extends ResouceController
{
    function __construct(KpiResultService $service)
    {
        $this->middleware('auth');
        parent::__construct($service, array('active' => 'okrs'), '.key');
    }

    public function show($id)
    {
        return KpiResult::with('results')->find($id);
    }

    public function store(Request $request)
    {
        return parent::storeRequest($request);
    }
    public function create(Request $request){

    }

}
