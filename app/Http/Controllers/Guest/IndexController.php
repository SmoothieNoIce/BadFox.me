<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\DB;

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
   /**
     * Get a article by id
     *
     * @return article
     */
    public function index(){
        $articles = Article::paginate(4);
        return view('guest.index',[
            'articles' => $articles
        ]);
    }
    public function getArticleByID($request){
        $article=DB::table('articles')->where('id','=',$request)->first();
        return view("guest.article",['article' => $article]);
    }
    public function getArticlesPyPage(){
        $articles = Article::paginate(3);
        //dd($todos);
        return view("guest.articleList",[
            'articles' => $articles
        ]);
    }
}
