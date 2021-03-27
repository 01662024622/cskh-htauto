<?php

namespace App\Http\Controllers\DataApi;

use App\Http\Controllers\Controller;
use App\Models\HT30\Kpi;
use App\Models\HT30\Target;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class KpiApiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function anyData(Request $request)
    {
        $data = Kpi::where('td_id',$request->td_id)->orderBy('name')->get();

        // $products->user;
        return DataTables::of($data)
            ->addColumn('levelEdit', function ($dt) {
                if ($dt['level'] == 2) return '<i class="fa fa-square" style="color: green" aria-hidden="true"></i>';
                elseif ($dt['level'] == 4) return '<i class="fa fa-square" style="color: yellow" aria-hidden="true"></i>';
                elseif ($dt['level'] == 6) return '<i class="fa fa-square" style="color: orange" aria-hidden="true"></i>';
                else return '<i class="fa fa-square" style="color: red" aria-hidden="true"></i>';
            })
            ->addColumn('typeEdit', function ($dt) {
                if ($dt['type'] == 0) return '%đạt';
                else return 'trừ'.$dt['minus'].'%/lỗi';
            })
            ->addIndexColumn()
            ->setRowId('target-{{$id}}')
            ->rawColumns(['typeEdit', 'levelEdit'])
            ->make(true);
    }
}
