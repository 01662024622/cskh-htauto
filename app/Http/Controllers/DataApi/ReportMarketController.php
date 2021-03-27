<?php

namespace App\Http\Controllers\DataApi;

use App\Http\Controllers\Controller;
use App\Models\HT10\ReportMarket;
use App\Models\HT20\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\Datatables\Datatables;

class ReportMarketController extends Controller
{

    public function anyData(Request $request)
    {
        if (!Auth::check()) {
            if ($request->headers->has('Authorization')) {
                $header = $request->header('Authorization');
                $user = User::where('authentication', $header)->where("role",">",0)->where("status","0")->first();
                if (is_null($user)) {
                    return response()
                        ->json([
                            'code' => 400,
                            'message' => 'Quyền không hợp lệ!'
                        ], 400);
                }
            } else return response()
                ->json([
                    'code' => 400,
                    'message' => 'Quyền không hợp lệ!'
                ], 400);
        } else {
            $user = Auth::user();
        }


        $data = ReportMarket::select('report_markets.*', 'customers.name_follow', 'customers.supplies_phone_1', 'customers.code', 'customers.address')
            ->join('customers', 'report_markets.customer_id', '=', 'customers.id')->where('report_markets.status', 0);
        if ($user->role != 'admin') {
            $data = $data->where('report_markets.user_id', $user->id);
        }

        // $products->user;
        return Datatables::of($data)
            ->addColumn('action', function ($dt) {
                return '
			<button type="button" class="btn btn-xs btn-warning"data-toggle="modal" onclick="getInfo(' . $dt['id'] . ')" href="#add-modal"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')"><i class="fa fa-trash" aria-hidden="true"></i></button>
			';

            })
            ->editColumn('date_work', function ($dt) {
                return Carbon::parse($dt['date_work'])->format('d/m/Y');
            })
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action'])
            ->make(true);
    }

    public function status(Request $request, $id)
    {
        if (!in_array($request->role, $this->arrRole)) {
            return response()
                ->json([
                    'code' => 400,
                    'message' => 'Cấp quyền không hợp lệ!'
                ], 400);
        }
        $data = User::find($id)->update(array('role' => $request->role));
        return $data;
    }
}
