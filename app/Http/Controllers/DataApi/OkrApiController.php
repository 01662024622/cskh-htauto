<?php

namespace App\Http\Controllers\DataApi;

use App\Http\Controllers\Controller;
use App\Models\HT30\Objects;
use App\Models\HT30\ObjectUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class OkrApiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function anyData(Request $request)
    {
        $data = ObjectUser::join('ht30_objects', 'ht30_object_user.object_id', '=', 'ht30_objects.id')
            ->leftJoin('ht30_keys',function($join)
            {
                $join->on('ht30_object_user.id', '=', 'ht30_keys.ou_id');
                $join->on('ht30_keys.status',DB::raw(0));
            })
            ->where('ht30_objects.status',0)
            ->where('ht30_object_user.status',0)
            ->where('ht30_object_user.user_id',$request->user_id)
            ->where('ht30_object_user.month_year',$request->month_year)
            ->orderBy('ht30_object_user.id')
            ->orderBy('ht30_keys.updated_at','DESC')
            ->get([ 'ht30_keys.*','ht30_object_user.percent as ob_percent','ht30_objects.id as ob_id','ht30_objects.name as object', 'ht30_object_user.id as id_obu']);
//        return $data->toSql();
        // $products->user;
        return DataTables::of($data)
            ->addColumn('action', function ($dt) {
                return '<button type="button" class="btn btn-xs btn-success"data-toggle="modal"
			onclick="checkResult(' . $dt['id'] . ')" href="#check-modal"><i class="fas fa-check"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-warning"data-toggle="modal"
			onclick="getInfo(' . $dt['id'] . ')" href="#add-modal"><i class="fas fa-pencil-alt"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
			';
            })
            ->addColumn('header', function ($dt) {
                return '<div class="container-fluid">
        <div id="ob-target-' . $dt['ob_id'] . '" class="float-left" style="    font-size: 14px;">
            ' . $dt['ob_percent'] . '% --- ' . $dt['object'] .'
        </div>
        <div class="float-right">
        <button type="button" class="btn btn-xs btn-info"data-toggle="modal" href="#add-modal" onclick="addKRs('.$dt['id_obu'].')">
        <i class="fas fa-plus" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-xs btn-warning"data-toggle="modal"
			onclick="getInfoOB(' . $dt['ob_id'] . ',' . $dt['ob_percent'] . ')">
			<i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDeleteOB(' . $dt['id_obu'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
        </div>
    </div>';
            })
            ->editColumn('result', function($dt) {
                if ($dt['result']){
                    return $dt['result'];
                }else return '_';
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'header'])
            ->make(true);
    }
    public function anyDataUser(Request $request)
    {
        $data = ObjectUser::join('ht30_objects', 'ht30_object_user.object_id', '=', 'ht30_objects.id')
            ->leftJoin('ht30_keys',function($join)
            {
                $join->on('ht30_object_user.id', '=', 'ht30_keys.ou_id');
                $join->on('ht30_keys.status',DB::raw(0));
            })
            ->where('ht30_objects.status',0)
            ->where('ht30_object_user.status',0)
            ->where('ht30_object_user.user_id',Auth::id())
            ->where('ht30_object_user.month_year',$request->month_year)
            ->orderBy('ht30_object_user.id')
            ->orderBy('ht30_keys.updated_at','DESC')
            ->get([ 'ht30_keys.*','ht30_object_user.percent as ob_percent','ht30_objects.id as ob_id','ht30_objects.name as object', 'ht30_object_user.id as id_obu']);
//        return $data->toSql();
        // $products->user;
        return DataTables::of($data)
            ->addColumn('action', function ($dt) {
                return '<button type="button" class="btn btn-xs btn-success"data-toggle="modal"
			onclick="checkResult(' . $dt['id'] . ')" href="#check-modal"><i class="fas fa-check"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-warning"data-toggle="modal"
			onclick="getInfo(' . $dt['id'] . ')" href="#add-modal"><i class="fas fa-pencil-alt"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
			';
            })
            ->addColumn('header', function ($dt) {
                return '<div class="container-fluid">
        <div id="ob-target-' . $dt['ob_id'] . '" class="float-left" style="    font-size: 14px;">
            ' . $dt['ob_percent'] . '% --- ' . $dt['object'] .'
        </div>
        <div class="float-right">
        <button type="button" class="btn btn-xs btn-info"data-toggle="modal" href="#add-modal" onclick="addKRs('.$dt['id_obu'].')">
        <i class="fas fa-plus" aria-hidden="true"></i></button>
        <button type="button" class="btn btn-xs btn-warning"data-toggle="modal"
			onclick="getInfoOB(' . $dt['ob_id'] . ',' . $dt['ob_percent'] . ')">
			<i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDeleteOB(' . $dt['id_obu'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
        </div>
    </div>';
            })
            ->editColumn('result', function($dt) {
                if ($dt['result']){
                    return $dt['result'];
                }else return '_';
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'header'])
            ->make(true);
    }
}
