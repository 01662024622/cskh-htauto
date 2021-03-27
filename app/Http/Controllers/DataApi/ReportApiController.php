<?php

namespace App\Http\Controllers\DataApi;

use App\Models\HT20\Apartment;
use App\Models\HT10\Feedback;
use App\Models\HT10\FeedbackPR;
use App\Models\HT10\FeedbackWarehouse;
use App\Http\Controllers\Controller;
use App\Models\HT10\Review;
use App\ReviewIprove360;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class ReportApiController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function reviewData()
    {
        $data = Review::select("ht10_reviews.*", "ht20_apartments.name as apartment", "ht20_users.name as user")
            ->leftJoin('ht20_users', 'ht20_users.id', '=', 'ht10_reviews.user_id')
            ->join('ht20_apartments', 'ht10_reviews.apartment_id', '=', 'ht20_apartments.id')
            ->orderBy('ht10_reviews.updated_at', 'desc')
            ->where('ht10_reviews.create_by', Auth::id());

        // $products->user;
        return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('user', function ($dt) {
                if ($dt['user'] == null) {
                    return "Feedback Phòng ban";
                } else {
                    return $dt['user'];
                }
            })
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->editColumn('image', function ($dt) {
                return '<img class="image-report" src="' . $dt['image'] . '">';
            })

//            ->editColumn('confirm', function ($dt) {
//                return '<img class="image-report" src="' . $dt['image'] . '">';
//            })
            ->setRowId('data-{{$id}}')
            ->rawColumns(['content', 'image'])
            ->make(true);
    }

    public function feedbackMeData()
    {
        $date = Carbon::now()->subDay(2);
        $data = Review::select("ht10_reviews.*",
            DB::raw("(CASE WHEN `ht10_reviews`.user_status = 1 THEN 1 WHEN `ht10_reviews`.created_at < '" . $date . "' THEN 2 WHEN `ht10_reviews`.user_status = -1 THEN -1 ELSE 0 END) as role"))
            ->orderBy('ht10_reviews.updated_at', 'desc')
            ->where('ht10_reviews.user_id', Auth::id());
//        ->where('ht10-reviews.created_at',">",$date);
        // $products->user;
        return Datatables::of($data)
            ->addColumn('action', function ($dt) {
                if ($dt['role'] == 0) {
                    return '<select class="form-control" id="feedback_'.$dt["id"].'" onchange="setStatus('.$dt["id"].')" name="sellist1">
                                <option value="0" selected disabled>Chưa duyệt</option>
                                <option class="bg-warning" value="1">Chấp thuận</option>
                                <option class="bg-info" value="-1">Bác bỏ</option>
                              </select>';
                }
                if ($dt['role']==1){
                    return "Đã chấp thuận";
                }
                if ($dt['role']==-1){
                    return "Đã phản hồi";
                }
                if ($dt['role']==2){
                    return "Tự động ghi nhận";
                }
            })
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->editColumn('image', function ($dt) {
                return '<img class="image-report" src="' . $dt['image'] . '">';
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function feedbackApartmentData()
    {
        $date = Carbon::now()->subDay(2);
        $data = Review::select("ht10_reviews.*", "ht20_apartments.name as apartment", "ht20_users.name as user",
            DB::raw("(CASE WHEN `ht10_reviews`.user_status = 1 THEN 1 WHEN `ht10_reviews`.created_at < '" . $date . "' THEN 2 WHEN `ht10_reviews`.user_status = -1 THEN -1 ELSE 0 END) as role"))
            ->join('ht20_apartments', 'ht10_reviews.apartment_id', '=', 'ht20_apartments.id')
            ->leftJoin('ht20_users', 'ht20_users.id', '=', 'ht10_reviews.user_id')
            ->orderBy('ht10_reviews.updated_at', 'desc')
            ->where("ht20_apartments.user_id", Auth::id());
        return Datatables::of($data)
            ->addColumn('action', function ($dt) {
                if ($dt['role'] == 0) {
                    return '<select class="form-control" id="feedback_'.$dt["id"].'" onchange="setStatus('.$dt["id"].')" name="sellist1">
                                <option value="0" selected disabled>Chưa duyệt</option>
                                <option class="bg-warning" value="1">Chấp thuận</option>
                                <option class="bg-info" value="-1">Bác bỏ</option>
                              </select>';
                }
                if ($dt['role']==1){
                    return "Đã chấp thuận";
                }
                if ($dt['role']==-1){
                    return "Đã phản hồi";
                }
                if ($dt['role']==2){
                    return "Tự động ghi nhận";
                }
            })
            ->editColumn('image', function ($dt) {
                return '<img class="image-report" src="' . $dt['image'] . '">';
            })
            ->editColumn('name', function ($dt) {
                if ($dt['name'] == null) {
                    return "Feedback Phòng ban";
                } else {
                    return $dt['name'];
                }
            })
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function feedbackBrowserData()
    {
        $data = Review::select("ht10_reviews.*", "ht20_apartments.name as apartment", "ht20_users.name as user")
            ->join('ht20_apartments', 'ht10_reviews.apartment_id', '=', 'ht20_apartments.id')
            ->leftJoin('ht20_users', 'ht20_users.id', '=', 'ht10_reviews.user_id')
            ->orderBy('ht10_reviews.created_at', 'desc')
            ->where('ht10_reviews.user_status', '<',0);
        return Datatables::of($data)
            ->addColumn('action', function ($dt) {
                $html = '<select class="form-control" id="role_' . $dt['id'] . '" onchange="changeStatus(' . $dt['id'] . ')"';
                if ($dt['status'] == 1) {
                    $html .= 'disabled><option value="0" disabled>Chưa Duyệt</option><option value="1" selected style="background-color: #F46D66">Ghi Nhận</option><option value="-1" style="background-color: #57E999">Bác Bỏ</option>';
                } elseif ($dt['status'] == 0) {
                    $html .= '><option value="0" disabled selected>Chưa Duyệt</option><option value="1" style="background-color: #F46D66">Ghi Nhận</option><option value="-1" style="background-color: #57E999">Bác Bỏ</option>';
                } else {
                    $html .= 'disabled><option value="0" disabled>Chưa Duyệt</option><option value="1" style="background-color: #F46D66">Ghi Nhận</option><option value="-1" style="background-color: #57E999" selected>Bác Bỏ</option>';
                }

                $html .= '</select>';
                return $html;

            })
            ->editColumn('name', function ($dt) {
                if ($dt['name'] == null) {
                    return "Feedback Phòng ban";
                } else {
                    return $dt['name'];
                }
            })
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->editColumn('image', function ($dt) {
                return '<img class="image-report" src="' . $dt['image'] . '">';
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'image'])
            ->make(true);
    }


    public function feedbackWarehouseData()
    {
        $data = FeedbackWarehouse::select(DB::raw("ht10_feedback_warehouse.id,ht10_feedback_warehouse.amount,ht10_feedback_warehouse.code_product,ht10_feedback_warehouse.type,GROUP_CONCAT(CONCAT('- ', ht10_improve_360.content) SEPARATOR '<br>') as content"))
            ->leftjoin('ht10_feedback_warehouse_improve', 'ht10_feedback_warehouse.id', '=', 'ht10_feedback_warehouse_improve.feedback_warehouse_id')
            ->leftjoin('ht10_improve_360', 'ht10_improve_360.id', '=', 'ht10_feedback_warehouse_improve.improve_360_id')
            ->leftjoin('ht20_users', 'ht20_users.id', '=', 'ht10_feedback_warehouse.create_by')
            ->orderBy('ht10_feedback_warehouse.updated_at', 'desc')
            ->groupBy("ht10_feedback_warehouse.id", "ht10_feedback_warehouse.code_product", "ht10_feedback_warehouse.amount", "ht10_feedback_warehouse.type", "ht10_feedback_warehouse.created_at")
            ->where("ht10_feedback_warehouse.create_by", Auth::id());

        return Datatables::of($data)
            ->editColumn('type', function ($dt) {
                if ($dt['type'] == 'CC') {
                    return "Chạy cửa";
                } elseif ($dt['type'] == 'BT') {
                    return "Bỏ toa";
                } elseif ($dt['type'] == 'SKU') {
                    return "SKU";
                } else {
                    return "Chất lượng";
                }
            })
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'apartment_id', 'content'])
            ->make(true);
    }

    public function feedbackWarehouseDataManager()
    {
        $data = FeedbackWarehouse::select(DB::raw("ht10_feedback_warehouse.id,ht10_feedback_warehouse.amount,ht10_feedback_warehouse.code_product,ht10_feedback_warehouse.type,ht10_feedback_warehouse.created_at,GROUP_CONCAT(CONCAT('- ', ht10_improve_360.content) SEPARATOR '<br>') as content"))
            ->leftjoin('ht10_feedback_warehouse_improve', 'ht10_feedback_warehouse.id', '=', 'ht10_feedback_warehouse_improve.feedback_warehouse_id')
            ->leftjoin('ht10_improve_360', 'ht10_improve_360.id', '=', 'ht10_feedback_warehouse_improve.improve_360_id')
            ->leftjoin('ht20_users', 'ht20_users.id', '=', 'ht10_feedback_warehouse.create_by')
            ->orderBy('ht10_feedback_warehouse.updated_at', 'desc')
            ->groupBy("id", "amount", "type", "code_product", "ht10_feedback_warehouse.created_at");

        return Datatables::of($data)
            ->editColumn('type', function ($dt) {
                if ($dt['type'] == 'CC') {
                    return "Chạy cửa";
                } elseif ($dt['type'] == 'BT') {
                    return "Bỏ toa";
                } elseif ($dt['type'] == 'SKU') {
                    return "SKU";
                } else {
                    return "Chất lượng";
                }
            })
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->rawColumns(['action', 'apartment_id', 'content'])
            ->make(true);
    }

    public function feedbackPRData()
    {
        $data = FeedbackPR::where("create_by", Auth::id())->orderBy('updated_at', 'desc')->get();

        return Datatables::of($data)
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->make(true);
    }

    public function feedbackPRDataManager()
    {
        $data = FeedbackPR::orderBy('updated_at', 'desc')->get();

        return Datatables::of($data)
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->make(true);
    }

    public function feedbackCustomerData()
    {
        $data = Feedback::where("create_by", Auth::id())->orderBy('updated_at', 'desc')->get();

        return Datatables::of($data)
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->make(true);
    }

    public function feedbackCustomerDataManager()
    {
        $data = Feedback::select("ht10_feedbacks.*", "ht20_users.name")
            ->join("ht20_users", "ht10_feedbacks.user_id", "=", "ht20_users.id")
            ->orderBy('updated_at', 'desc')->get();

        return Datatables::of($data)
            ->editColumn('created_at', function ($dt) {
                return Carbon::parse($dt['created_at'])->format('d/m/Y');
            })
            ->addIndexColumn()
            ->setRowId('data-{{$id}}')
            ->make(true);
    }

    public function status(Request $request, $id)
    {
        $data = Review::find($id);
        $this->createTaskFW('{"status": "Hoàn thành"}',
            'https://work.fastwork.vn:6014/Job/'.$data->browser_task_id.'/WorkProgress/5efef3dd5a51cf1c10fab0e4',
            'PUT');
        $data->update(array('status' => $request->status,'modify_by'=>Auth::id()));
        return $data;
    }
    private function createTaskFW($data,$url='https://work.fastwork.vn:6014/Task/5efef3dd5a51cf1c10fab0e4',$method="POST")
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, true);
        curl_setopt($curl, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Accept: */*',
            'Authorization: Basic dGhhbmd2dUBodGF1dG86N2Q1NzQ0YTI1NjM1MDE2Zjk4MzEyNjE1YWQyZWQzMzI=',
            'Content-Length: ' . strlen($data),
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.125 Safari/537.36',
            'Accept-Language: en-US,en;q=0.9,vi;q=0.8',
            'Referer: https://app.fastwork.vn',
            'Origin: https://app.fastwork.vn',
            'Host: work.fastwork.vn:6014',
            'Connection: keep-alive',
            'Accept-Encoding: gzip, deflate, br',
            'Content-Type: application/json',
            'x-fw: ' . (explode(" ", microtime())[1] * 1000),
            'Sec-Fetch-Dest: empty',
            'Sec-Fetch-Mode: cors',
            'Sec-Fetch-Site: same-site',
        ));
        $response = curl_exec($curl);
        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $body = substr($response, $header_size);
        curl_close($curl);
        if (json_decode($body)->result&&$method=='POST'){
            return json_decode($body)->task[0]->_id;
        }else return null;
    }
}
