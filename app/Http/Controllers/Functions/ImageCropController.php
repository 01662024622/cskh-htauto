<?php

namespace App\Http\Controllers\Functions;

use App\Http\Controllers\Controller;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageCropController extends Controller
{
    function upload(Request $request)
    {
        if ($request->has('image')) {
            $image_data = $request->image;
            $image_array_1 = explode(";", $image_data);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $image_name = time() . '.png';
            $data->move(public_path('storage'), $image_name);
            return response()->json(['path'=>'/public/storage/'.$image_name]);
        }
    }

    function save(Request $request)
    {
        if ($request->hasFile('avata')) {
            $name = time() . "." . $request->avata->getClientOriginalExtension();
            $request->avata->move(public_path('storage'), $name);
            $data['avata'] = '/public/storage/' . $name;
        }
    }
}
