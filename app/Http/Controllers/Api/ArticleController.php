<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\DB;
use Response;

class ArticleController extends Controller
{
    public function getFirst4Article(){
        $articles = Article::all()->take(4);
        for($i = 0 ; $i < count($articles) ; $i++){
            $articles[$i]["tags"] = $articles[$i]->tags;
        }
        $result = [
            "status"=>"200"
        ];
        $req = [
            "result" => $result,
            "data" => $articles

        ];
        return response()->json($req);
    }
}
