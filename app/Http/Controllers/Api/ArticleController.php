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
