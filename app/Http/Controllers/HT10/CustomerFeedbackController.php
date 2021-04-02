<?php

namespace App\Http\Controllers\HT10;

use App\Models\HT10\CustomerFeedback;
use App\Models\HT20\B20Customer;
use App\Http\Controllers\Base\ResouceController;
use App\Services\HT10\CustomerFeedbackService;
use Illuminate\Http\Request;

class CustomerFeedbackController extends ResouceController
{
    function __construct(CustomerFeedbackService $service)
    {
        parent::__construct($service, array('active' => 'feedback', 'group' => 'feedback'));
    }

    public function store(Request $request)
    {
//        return $request;
        return parent::storeRequest($request);
    }

    public function destroy($id)
    {
    }
    public function show($id)
    {
        return view("feedback.customerFeedback",['code'=>$id]);
    }

    public function create(){
        return view('feedback.success');
    }

}
