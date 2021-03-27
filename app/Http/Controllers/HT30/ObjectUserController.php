<?php

namespace App\Http\Controllers\HT30;

use App\Http\Controllers\Base\ResouceController;
use App\Http\Controllers\Controller;
use App\Services\HT30\ObjectUserService;
use Illuminate\Http\Request;

class ObjectUserController extends ResouceController
{
    function __construct(ObjectUserService $service)
    {
        $this->middleware('auth');
        parent::__construct($service, array('active' => 'okrs'),'.key');
    }
    public function store(Request $request){
        return parent::storeRequest($request);
    }
}
