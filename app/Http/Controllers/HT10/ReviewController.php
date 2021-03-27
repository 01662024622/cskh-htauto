<?php

namespace App\Http\Controllers\HT10;

use App\Models\HT20\Apartment;
use App\Http\Controllers\Base\ResouceController;
use App\Models\HT10\Review;
use App\ReviewIprove360;
use App\Services\HT10\ReviewService;
use App\Models\HT20\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ReviewController extends ResouceController
{
    function __construct(ReviewService $service)
    {
        $this->middleware('auth');
        parent::__construct($service, array('active' => 'report_review', 'group' => 'reports'));
        View::share("apartments", Apartment::where("status", 0)->get());
    }


    public function show($id)
    {
        $data = User::where('apartment_id', $id)->where('role', '<>', 'block')->where('status', 0)->where('id','<>',Auth::id())->get();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data["create_by"] = Auth::id();
        if ($request->hasFile('image')) {
            $name = time() . "-" . $data['create_by'] . "." . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('storage'), $name);
            $data['image'] = '/public/storage/' . $name;
        }
        if ($data['user_id'] > 0) {
            $data_post = $this->getBody($data['user_id'], "http://crm.htauto.vn/review/feedback/auth/",
                "Đã có feedback về  cá nhân bạn");
            $result=$this->createTaskFW($data_post);
            $data['task_id']=$result;
        } else {
            $apartment = Apartment::find($data['apartment_id']);
            $data_post = $this->getBody($apartment['user_id'], "http://crm.htauto.vn/review/feedback/apartment/auth/",
                "Đã có feedback về  phòng ban mà bạn quản lý");
            $result=$this->createTaskFW($data_post);
            $data['task_id']=$result;
        }
        return parent::storeRequest($request,$data);
    }

    public function edit($id, Request $request)
    {
        $review = Review::where("id", $id)->where("user_status", 0)->first();
        $this->createTaskFW('{"status": "Hoàn thành"}',
            'https://work.fastwork.vn:6014/Job/'.$review->task_id.'/WorkProgress/5efef3dd5a51cf1c10fab0e4',
            'PUT');
        if ($request->has("confirm")) {
            $data = $request->only("confirm");
            $data['user_status'] = -1;
            $data_post = $this->getBody(47, "http://crm.htauto.vn/review/feedback/browser/",
                "Đã có nhân sự/TP phản đối feedback về bản thân/Phòng ban mình");
            $data["browser_task_id"]=$this->createTaskFW($data_post);
            $result = $review->update($data);
            return $result;
        } else {
            $data['user_status'] = 1;
            $result = $review->update($data);
            return $result;
        }
    }

    public function destroy($id)
    {
        return null;
    }

    private function getBody($id, $url, $string)
    {
        $user = User::find($id);
        $time = explode(" ", microtime())[1];
        $long = $time + 172800;
//        if (($time%604800>64800)&&($time%604800<237600)){
//            $long=$long+86400;
//        }

        return '{"worktype":{},
            "score":0,
            "name":"BC 360/' . $user->name . '/' . Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y') . '",
            "description":"' . $string . ' \n Click vào đường link bên dưới để xác nhận:\n ' . $url . $user->authentication . '",
            "assignTo":[{"email":"' . $user->email_htauto . '","name":"' . $user->name . '","avatar":""}],
            "followers":[],
            "priority":"Trung bình",
            "customers":[],
            "contacts":[],
            "forms":[],
            "project":{},
            "checklists":[],
            "parent":"",
            "start":"",
            "start_date":"' . ($time * 1000) . '",
            "end_date":"' . ($long * 1000) . '",
            "start_type":"no",
            "deadline":"",
            "deadline_type":"auto",
            "members":[{"email":"assignTo","name":"Người thực hiện"}],
            "danh_gia":false,
            "viewMode":"protected",
            "urgent":false}';
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
