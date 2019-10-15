<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;

class ImgController extends Controller
{
    public function index()
    {
        return view("admin.imgList");
    }
    public function upload(Request $request)
    {
        return "ok";
        $this->validate($request, [
            'input_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('input_img')) {
            $file = $request->file('image');

            $image = new Image();
            $image->uploader_id = $request('uploader_id');
            $image->date = $request('date');
            $image->name = time() . '.' . $file->getClientOriginalExtension();

            $destinationPath = public_path('/images');

            $image->move($destinationPath, $image->name);
            //$this->save();

            return "ok";
        } else {
            return "failed";
        }
    }
}
