<?php

namespace App\Http\Controllers\HT30;

use App\Http\Controllers\Base\ResouceController;
use App\Http\Controllers\Controller;
use App\Services\HT30\TargetService;
use Illuminate\Http\Request;

class TargetController extends ResouceController
{
    function __construct(TargetService $service)
    {
        $this->middleware('auth');
        parent::__construct($service, array('active' => 'okrs'));
    }
    public function store(Request $request){
        return parent::storeRequest($request);
    }
}
