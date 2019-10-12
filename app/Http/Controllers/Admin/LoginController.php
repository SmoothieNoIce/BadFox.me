<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index(){
        if(session('admin')!=null){
           return redirect('admin/home');
        }
        return view('admin/login');
    }
    public function login(Request $request){
        $result= DB::table('admins') ->where('email', '=',  $request['email'])->get();

        if(count($result)>0){
            if(Crypt::decrypt($result[0]->password)==$request['password']){
                $admin=Admin::where('email', '=',  $request['email'])->get();
                echo('驗證成功');
                session(['admin'=>$admin[0]]);
                return redirect('admin/home');
            }else{
                echo('驗證失敗');
            }
        }else{
            echo('無此帳號');
        }
        //return redirect('admin/home');
    }
    public function logout(){
        session(['admin'=>null]);
        return redirect('admin/login');
    }


}
