<?php

namespace App\Http\Controllers\DataBaseApi;

use App\Http\Controllers\Controller;
use App\Models\HT11\Insurance;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataTableController extends Controller
{
    public function insurance(Request $request)
    {

        $data = Insurance::select('*')->where('status', 0)->get();

        // $products->user;
        return DataTables::of($data)
            ->addColumn('action', function ($dt) {
                return '<button type="button" class="btn btn-xs btn-warning"data-toggle="modal"
			onclick="getInfo(' . $dt['id'] . ')" href="#add-modal"><i class="fas fa-pencil-alt"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
			';
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action'])
            ->make(true);
    }
}
