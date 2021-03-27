<?php

namespace App\Http\Controllers\DataApi;

use App\Models\HT00\Category;
use App\Http\Controllers\Controller;
use App\Models\HT00\CategoryApartment;
use App\Models\HT20\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class CategoryApiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function anyData(Request $request)
    {

        $data = Category::select('ht00_categories.*')->where('status', 0);

        // $products->user;
        return Datatables::of($data)
            ->addColumn('action', function ($dt) {
                return '<button type="button" class="btn btn-xs btn-warning"data-toggle="modal"
			onclick="getInfo(' . $dt['id'] . ')" href="#add-modal"><i class="fas fa-pencil-alt"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-primary"data-toggle="modal"
			onclick="setRole(' . $dt['id'] . ')" href="#configuration"><i class="fas fa-cog"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>

			';
            })
            ->editColumn('parent_id', function ($dt) {
                $user = Category::find($dt['parent_id']);
                if ($user) {
                    return $user->name;
                } else return "Main Category";
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action'])
            ->make(true);
    }

    public function saveSort(Request $request)
    {
        if ($request->has('categories')) {
            $categories=$request->categories;
            foreach ($categories as $category) {
                $arr = explode("_", $category);
                $data['sort'] = (int)$arr[0];
                $data['modify_by'] = Auth::id();
                Category::find($arr[1])->update($data);
            }
            if ($request->has('removes')) {
                $removes=$request->removes;
                foreach ($removes as $remove){
                    Category::find($remove)->update(array('status'=>1));
                }
            }
            return true;
        }
        return response()
            ->json([
                'code' => 502,
                'message' => 'Dữ liệu không hợp lệ!',
            ], 502);
    }
}
