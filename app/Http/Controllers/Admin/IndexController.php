<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    public function home(){
        return view('admin.home');
    }
    public function contentSetting(){
        return view('admin.contentSetting');
    }
    public function fullSetting(){
        return view('admin.fullSetting');
    }

}
