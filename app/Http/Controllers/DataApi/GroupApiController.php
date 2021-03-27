<?php

namespace App\Http\Controllers\DataApi;

use App\Http\Controllers\Controller;
use App\Models\HT00\CategoryGroup;
use App\Models\HT20\Group;
use App\Models\HT20\GroupUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class GroupApiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
    public function anyData(Request $request)
    {

        $data = Group::select(DB::raw("ht20_groups.id,ht20_groups.name,ht20_groups.description,GROUP_CONCAT(CONCAT('- ', ht20_users.name) SEPARATOR '<br>') as users"))
            ->leftjoin('ht20_group_user', 'ht20_group_user.group_id', '=', 'ht20_groups.id')
            ->leftjoin('ht20_users', 'ht20_users.id', '=', 'ht20_group_user.user_id')
            ->where('ht20_groups.status', 0)
            ->groupBy('ht20_groups.id')
            ->get();

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
            ->rawColumns(['action','users'])
            ->make(true);
    }
    public function getListGroup(Request $request,$query=null){
        $listGroup= (array)$request->input('apartments');
        if ($query==""||$query==null){
            return Group::select('name','id')->where('status',0)->whereNotIn('id',$listGroup)->get();
        }
        return Group::select('name','id')->where('status',0)->whereNotIn('id',$listGroup)->where('name','LIKE','%'.$query.'%')->get();
    }
    public function getListRoleGroup($id){
//        return $id;
        return CategoryGroup::join('ht20_groups','ht20_groups.id','=','ht00_category_group.group_id')
            ->where('category_id',$id)->where('ht00_category_group.role',0)->get(['ht20_groups.id','ht20_groups.name','ht00_category_group.role']);
    }
}
