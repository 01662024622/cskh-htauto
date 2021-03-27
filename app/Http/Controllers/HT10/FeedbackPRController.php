<?php

namespace App\Http\Controllers\HT10;

use App\Http\Controllers\Base\ResouceController;
use App\Services\HT10\FeedbackPRService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackPRController extends ResouceController
{
    function __construct(FeedbackPRService $service)
    {
        $this->middleware('auth.api');
        parent::__construct($service, array('active' => 'report_feedback', 'group' => 'manager'));
    }

    public function store(Request $request)
    {
        $data = $request->only(['amount']);
        $data['user_id'] = Auth::id();
        return parent::storeRequest($request,$data);
    }
}
