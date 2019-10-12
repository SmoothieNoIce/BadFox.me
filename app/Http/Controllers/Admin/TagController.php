<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TagController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    /**
     *
     *
     * @return view 
     */
    public function index(){
        $tags = Tag::paginate(100);
        return view("admin.tagList",[
            'tags' => $tags
        ]);
    }
    public function allTag(Request $request){
        $tags = Tag::get();;
        $count= count($tags);
        $result=['resultCount'=> $count,'tags'=>$tags];
        return json_encode($result);
    }
    public function searchTag(Request $request){
        if($request['term']!=null){
            $tags = Tag::where('name', 'like', '%'.$request['term']. '%')->get();;
            $count= count($tags);
            $result=['resultCount'=> $count,'tags'=>$tags];
            return json_encode($result);
        }else{
            return "null";
        }
    }
    public function add(Request $request){
        $tag=new Tag();
        $tag->name=$request['name'];
        $tag->description=$request['description'];
        $tag->save();
        return redirect("admin/tagList");
    }
}
