<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
            $image = $request->file('input_img');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            //$this->save();

            return "ok";
        }else{
            return "failed";
        }
    }
}
