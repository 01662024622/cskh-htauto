<?php

namespace App\Http\Controllers\DataApi;

use App\Http\Controllers\Controller;
use App\Models\HT00\CategoryUser;
use App\Models\HT00\PostUser;
use App\Models\HT20\Apartment;
use App\Models\HT20\User;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class UserApiController extends Controller
{

    private $arrRole = array(0 => 'Khóa', 50 =>'Nhân viên', 100 => 'Quản lý');
    private $arrKeyRole = array(0 , 50 , 100);

    function __construct()
    {
        $this->middleware('auth');
    }

    public function anyData(Request $request)
    {
        $data = User::where('status', 0)->where('role', '<', 200)->orderBy('created_at','DESC')->get();
        // $products->user;
        return Datatables::of($data)
            ->addColumn('action', function ($dt) {
                return '
			<button type="button" class="btn btn-table btn-xs btn-primary" onclick="getAuthen(`http://crm.htauto.vn/report/user/' . $dt['authentication'] . '`)" href="#add-modal"><i class="fa fa-eye" aria-hidden="true"></i></button>
			<button type="button" class="btn btn-table btn-xs btn-warning"data-toggle="modal" onclick="getInfo(' . $dt['id'] . ')" href="#add-modal"><i class="fas fa-pencil-alt" aria-hidden="true"></i></button>
			<button type="button" class="btn btn-table btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')"><i class="fa fa-trash" aria-hidden="true"></i></button>';
            })
            ->editColumn('role', function ($dt) {
                $html = '<select class="form-control form-control-table" id="role_' . $dt['id'] . '" onchange="changeStatus(' . $dt['id'] . ')">';
                foreach ($this->arrRole as $key => $role) {
                    if ($dt['role'] == $key) {
                        $html .= '<option value="' . $key . '" selected>' . $role . '</option>';
                    } else {

                        $html .= '<option value="' . $key . '">' . $role . '</option>';
                    }
                }

                $html .= '</select>';
                return $html;

            })
            ->editColumn('birth_day', function ($dt) {
                return Carbon::parse($dt['birth_day'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'birth_day', 'role'])
            ->make(true);
    }

    public function status(Request $request, $id)
    {
        if (!in_array($request->role, $this->arrKeyRole)) {
            return response()
                ->json([
                    'code' => 400,
                    'message' => 'Cấp quyền không hợp lệ!'
                ], 400);
        }
        $data = User::find($id)->update(array('role' => $request->role));
        return $data;
    }
    public function getListUser(Request $request,$query=null){
        $listUser= (array)$request->input('users');
        if ($query==""||$query==null){
            return User::select('name','id')->where('status',0)->whereNotIn('id',$listUser)->get();
        }
        return User::select('name','id')->where('status',0)->whereNotIn('id',$listUser)->where('name','LIKE','%'.$query.'%')->get();
    }
    public function getListRoleUser($id){
        return CategoryUser::join('ht20_users','ht20_users.id','=','ht00_category_user.user_id')
            ->where('category_id',$id)->get(['ht20_users.id','ht00_category_user.id as ca_id','ht20_users.name','ht00_category_user.role']);
    }

}
