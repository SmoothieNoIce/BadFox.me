<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
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
        return view('guest.search');
    }
    public function search(Request $request){
        if($request['parameter']!=null){
            $articles = Article::where('title', 'like', '%'.$request['parameter']. '%')->orderBy('date', 'desc')->paginate(10);
            return view("guest.search",[
                'parameter'=>$request['parameter'],'articles' => $articles ,
            ]);
        }else{
            return view("guest.search");
        }
    }
    public function searchTag(Request $request){
        
    }


}
