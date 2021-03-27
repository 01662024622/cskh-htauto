<?php

namespace App\Http\Controllers\HT50;

use App\Http\Controllers\Base\ResouceController;
use App\Models\HT50\HT01Customer;
use App\Models\HT50\InforCustomerSurvey;
use App\Services\HT50\InforCustomerSurveyService;
use Illuminate\Http\Request;

class InforCustomerSurveyController extends ResouceController
{
    function __construct(InforCustomerSurveyService $service)
    {
        parent::__construct($service, array('active' => 'survey', 'group' => 'manager'));
    }

    public function store(Request $request)
    {
        $customer =HT01Customer::where('code',$request->code)->first();
        if ($customer){
            $voucher =InforCustomerSurvey::where('code',$request->code)->first();
            if($voucher) return view('survey.notOver',['voucher'=>$customer->voucher]);
            parent::storeRequest($request);
            return view('survey.over',['voucher'=>$customer->voucher]);
        }
        return view('errors.404');
    }

    public function index()
    {
        return view('errors.404');
    }
    public function show($id)
    {
        if($id=='') return view('errors.404');
        $customer =HT01Customer::where('code',$id)->first();
        if ($customer){
            $voucher =InforCustomerSurvey::where('code',$id)->first();
            if($voucher) return view('survey.notOver',['voucher'=>$customer->voucher]);
            return view('survey.index',['code'=>$customer->code]);
        }
        return view('errors.404');
    }
}
