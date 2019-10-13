<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
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
        return view('guest.index');
    }
    public function getArticleByID($request){
        $article=Article::where('id','=',$request)->first();
        $tags = $article->tags;
        return view("guest.article",['article' => $article,'tags' => $tags,'mode'=> 0]);
    }
    public function getArticlesPyPage(){
        //$articles=DB::table('articles')->get();
        $articles = Article::orderBy('date', 'desc')->paginate(20);
        //dd($todos);
        return view("guest.articleList",[
            'articles' => $articles 
        ]);
    }
}
