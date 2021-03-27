<?php

namespace App\Http\Controllers\HT30;

use App\Http\Controllers\Base\ResouceController;
use App\Http\Controllers\Controller;
use App\Services\HT30\ObjectService;
use Illuminate\Http\Request;

class ObjectController extends ResouceController
{
    function __construct(ObjectService $service)
    {
        $this->middleware('auth');
        parent::__construct($service, array('active' => 'okrs'));
    }
    public function store(Request $request){
        return parent::storeRequest($request);
    }
}
