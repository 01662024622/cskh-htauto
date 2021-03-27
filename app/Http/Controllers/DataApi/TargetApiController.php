<?php

namespace App\Http\Controllers\DataApi;

use App\Http\Controllers\Controller;
use App\Models\HT20\User;
use App\Models\HT30\Kpi;
use App\Models\HT30\Target;
use App\Models\HT30\TargetKpi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class TargetApiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function anyData(Request $request)
    {
        $data = Target::leftJoin('ht30_target_kpi', function ($join) use ($request) {
            $join->on('ht30_target_kpi.target_id', '=', 'ht30_targets.id')
                ->where('ht30_target_kpi.user_id', $request->user_id)
                ->where('ht30_target_kpi.status', 0)
                ->where('ht30_target_kpi.year', $request->year);
        })
            ->select(['ht30_targets.name', 'ht30_targets.id', 'ht30_targets.level', 'ht30_target_kpi.user_id', 'ht30_target_kpi.id as td_id'])->where('ht30_targets.status', 0)
            ->where('ht30_targets.create_by', Auth::id())
            ->where('ht30_targets.status', 0)
            ->orderBy('ht30_targets.name')->get();

        // $products->user;
        return DataTables::of($data)
            ->addColumn('action', function ($dt) {
                return '
			<button type="button" class="btn btn-xs btn-danger" onclick="alDeleteTarget(' . $dt['id'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
			';
            })
            ->addColumn('levelEdit', function ($dt) {
                return '<div class="level-box color-lv-' . $dt['level'] . '" aria-hidden="true">' . ($dt['level'] * 2.5) . '</div>';
            })
            ->addIndexColumn()
            ->setRowId('target-{{$id}}')
            ->rawColumns(['action', 'levelEdit'])
            ->with('user', User::find($request->user_id))
            ->make(true);
    }

    public function anyDataUser(Request $request)
    {
        $data = Target::join('ht30_target_kpi', function ($join) use ($request) {
            $join->on('ht30_target_kpi.target_id', '=', 'ht30_targets.id')
                ->where('ht30_target_kpi.user_id', Auth::id())
                ->where('ht30_target_kpi.status', 0)
                ->where('ht30_target_kpi.year', $request->year);
        })
            ->select(['ht30_targets.name', 'ht30_targets.id', 'ht30_targets.level', 'ht30_target_kpi.user_id', 'ht30_target_kpi.id as td_id'])->where('ht30_targets.status', 0)
            ->where('ht30_targets.status', 0)
            ->orderBy('ht30_targets.name')->get();

        // $products->user;
        return DataTables::of($data)
            ->addColumn('action', function ($dt) {
                return '
			<button type="button" class="btn btn-xs btn-danger" onclick="alDeleteTarget(' . $dt['id'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
			';
            })
            ->addColumn('levelEdit', function ($dt) {
                return '<div class="level-box color-lv-' . $dt['level'] . '" aria-hidden="true">' . ($dt['level'] * 2.5) . '</div>';
            })
            ->addIndexColumn()
            ->setRowId('target-{{$id}}')
            ->rawColumns(['action', 'levelEdit', 'timeEdit'])
            ->make(true);
    }

    public function anyDataResult(Request $request)
    {
        if (!$request->has('kpis')) return null;
        $data = Kpi::with('results')
            ->where('status', 0)
            ->whereIn('td_id', $request->kpis)
            ->orderBy('updated_at')->get();
        $detail = Kpi::join('ht30_kpi_result', 'ht30_kpi_result.kpi_id', 'ht30_kpis.id')
            ->where('ht30_kpi_result.status', 0)
            ->where('ht30_kpis.status', 0)
            ->where('ht30_kpi_result.month', $request->month)
            ->where('ht30_kpi_result.year', $request->year)
            ->whereIn('ht30_kpis.td_id', $request->kpis)
            ->get(['ht30_kpis.name', 'ht30_kpis.level', 'ht30_kpis.time', 'ht30_kpi_result.result', 'ht30_kpis.td_id']);
        foreach ($detail as $key => $element) {
            $detail[$key]['levelEdit'] = '<div class="level-box color-lv-' . $element['level'] . '" aria-hidden="true">' . ($element['level'] * 2.5) . '</div>';
            $detail[$key]['timeEdit'] = '<div class="level-box color-lv-' . $element['time'] . '" aria-hidden="true">' . ($element['time'] * 2.5) . '</div>';
            $detail[$key]['resultEdit'] = '<div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="' . $element['result'] . '" aria-valuemin="0" aria-valuemax="100" style="width:' . $element['result'] . '%; background-color:rgba(0, 0, 102, '.($element['result']/100).');">
                              ' . $element['result'] . '%
                            </div>
                          </div>';
        }
        // $products->user;
        return DataTables::of($data)
            ->addColumn('levelEdit', function ($dt) {
                return '<div class="level-box color-lv-' . $dt['level'] . '" aria-hidden="true">' . ($dt['level'] * 2.5) . '</div>';
            })
            ->addColumn('timeEdit', function ($dt) {
                return '<div class="level-box color-lv-' . $dt['time'] . '" aria-hidden="true">' . ($dt['time'] * 2.5) . '</div>';
            })
            ->editColumn('type', function ($dt) {
                if ($dt['type'] == 0) return '% đạt';
                else return 'trừ ' . $dt['minus'] . '%/lỗi';
            })
            ->with('detail', $detail)
            ->addIndexColumn()
            ->setRowId('kpi-{{$id}}')
            ->rawColumns(['action', 'levelEdit', 'timeEdit'])
            ->make(true);
    }
    public function analystic(Request $request){
        $kpis= Kpi::with('results')->join('ht30_target_kpi', 'ht30_kpis.td_id', 'ht30_target_kpi.id')
            ->join('ht20_users', 'ht30_target_kpi.user_id', 'ht20_users.id')
            ->join('ht30_targets', 'ht30_target_kpi.target_id', 'ht30_targets.id')
            ->where('ht20_users.apartment_id',Auth::user()->apartment_id)
            ->where('ht20_users.status',0)
            ->where('ht30_targets.status',0)
            ->where('ht30_target_kpi.status',0)
            ->where('ht30_kpis.status',0)
            ->where('ht30_target_kpi.year',$request->year)
            ->orderBy('ht20_users.name')
            ->get(['ht30_kpis.name as kpi','ht30_kpis.id','ht30_kpis.level as kpi_level','ht30_kpis.time as kpi_time','ht20_users.apartment_id','ht30_targets.name as target','ht30_targets.level as target_level','ht20_users.name']);
        foreach ($kpis as $key => $element) {
            $kpis[$key]['target_level_edit'] = '<div class="level-box color-lv-' . $element['target_level'] . '" aria-hidden="true">' . ($element['target_level'] * 2.5) . '</div>';
            $kpis[$key]['kpi_level_edit'] = '<div class="level-box color-lv-' . $element['kpi_level'] . '" aria-hidden="true">' . ($element['kpi_level'] * 2.5) . '</div>';
            $kpis[$key]['kpi_time_edit'] = '<div class="level-box color-lv-' . $element['kpi_time'] . '" aria-hidden="true">' . ($element['kpi_time'] * 2.5) . '</div>';
        }
        return $kpis;
    }
}
