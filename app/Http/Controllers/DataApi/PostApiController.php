<?php

namespace App\Http\Controllers\DataApi;

use App\Http\Controllers\Controller;
use App\Models\HT00\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostApiController extends Controller
{
    private $arrRole = array(0 => 'Công khai', 2 =>'Khóa chọn', 3 => 'Tạm lưu');
    function __construct()
    {
        $this->middleware('auth');
    }
    public function anyData(Request $request)
    {
        $data = Post::where('status', 0)->orderBy('updated_at','DESC')->get();
        return DataTables::of($data)
            ->addColumn('action', function ($dt) {
                return '
			<a target="_blank" rel="noopener noreferrer" class="btn btn-table btn-xs btn-primary" href="/posts/'.$dt['id'].'"><i class="fa fa-eye" aria-hidden="true"></i></a>
			<a class="btn btn-table btn-xs btn-warning" href="/posts/'.$dt['id'].'/edit"><i class="fas fa-pencil-alt" aria-hidden="true"></i></a>
			<button type="button" class="btn btn-table btn-xs btn-danger" onclick="alDelete(' . $dt['id'] . ')"><i class="fa fa-trash" aria-hidden="true"></i></button>';
            })
            ->editColumn('role', function ($dt) {
                foreach ($this->arrRole as $key => $role) {
                    if ($dt['role'] == $key) return $role ;
                }
            })
            ->editColumn('avata', function ($dt) {
                return '<img id="upload-data-avata" src="' . $dt['avata'] . '" alt="avata" style="width:100px;height:auto">';
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'avata', 'role'])
            ->make(true);
    }
}
