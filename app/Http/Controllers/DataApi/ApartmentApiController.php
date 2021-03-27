<?php

namespace App\Http\Controllers\DataApi;

use App\Models\HT00\CategoryApartment;
use App\Models\HT00\CategoryUser;
use App\Models\HT20\Apartment;
use App\Http\Controllers\Controller;
use App\Models\HT20\User;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ApartmentApiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function anyData(Request $request)
    {

        $data = Apartment::select('ht20_apartments.*')->where('status', 0)->get();

        // $products->user;
        return Datatables::of($data)
            ->addColumn('action', function ($dt) {
                return '<button type="button" class="btn btn-xs btn-warning"data-toggle="modal"
			onclick="getInfo(' . $dt['id'] . ')" href="#add-modal"><i class="fas fa-pencil-alt"
			aria-hidden="true"></i></button>
			<button type="button" class="btn btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')">
			<i class="fa fa-trash" aria-hidden="true"></i></button>
			';
            })
            ->editColumn('user_id', function ($dt) {
                $user = User::find($dt['user_id']);
                if ($user) {
                    return $user->name;
                } else return "";
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action'])
            ->make(true);
    }
    public function getListApartment(Request $request,$query=null){
        $listUser= (array)$request->input('apartments');
        if ($query==""||$query==null){
            return Apartment::select('name','id')->where('status',0)->whereNotIn('id',$listUser)->get();
        }
        return Apartment::select('name','id')->where('status',0)->whereNotIn('id',$listUser)->where('name','LIKE','%'.$query.'%')->get();
    }
    public function getListRoleApartment($id){
//        return $id;
        return CategoryApartment::join('ht20_apartments','ht20_apartments.id','=','ht00_category_apartment.apartment_id')
            ->where('category_id',$id)->get(['ht20_apartments.id','ht00_category_apartment.id as ca_id','ht20_apartments.name','ht00_category_apartment.role']);
    }
}
