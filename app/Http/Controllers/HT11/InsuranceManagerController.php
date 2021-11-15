<?php

namespace App\Http\Controllers\HT11;

use App\Http\Controllers\Base\ResouceController;
use App\Models\HT11\Insurance;
use App\Services\HT11\InsuranceService;
use Illuminate\Http\Request;


class InsuranceManagerController extends ResouceController
{
    function __construct(InsuranceService $service)
    {
        parent::__construct($service, array('active' => 'insurance', 'group' => 'feedback'), $blade = '.indexManager');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('public/images/' . $fileName);
            $msg = 'succes';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','$msg')</script>";
            @header('Content-type: text/html; chasert=utf8');
            return $response;
        }
        return "";
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if ($request->has('type')) {
            Insurance::updateOrCreate([
                'id' => $request->id
            ], [
                'name' => $input['name'],
                'link' => $input['link'],
                'type' => $input['type'],
                'content' => $input['content-ckeditor']
            ]);
        } else {
            Insurance::updateOrCreate([
                'id' => $request->id
            ], [
                'name' => $input['name'],
                'link' => $input['link'],
                'content' => $input['content-ckeditor']
            ]);
        }
        return response('Success', 200);
    }

}
