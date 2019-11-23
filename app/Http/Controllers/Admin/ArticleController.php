<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    { }
    /**
     * article列表view
     *
     * @return view with articles array 
     */
    public function index()
    {

        //以日期排序 倒敘取出 每十個一頁
        $articles = Article::orderBy('id', 'desc')->paginate(10);

        return view("admin.articleList", [
            'articles' => $articles
        ]);
    }
    /**
     * article編輯view
     *
     * @return view with article
     */
    public function editPost(Request $request)
    {
        //以ID取出
        $article = Article::where('id', '=', $request['id'])->first();
        $tags = $article->tags;
        return view("admin.editArticle", ['article' => $article, 'tags' => $tags]);
    }
    /**
     * article新增view
     *
     * @return view
     */
    public function newPost()
    {
        $tags = Tag::paginate(100);
        return view("admin.postNewArticle", ['tags' => $tags]);
    }

    public function preview(Request $request){
        $article = new Article();
        $article->title = $request['title'];
        $article->date = $request['date'];
        $article->thumbnail = $request['thumbnail'];
        $article->content = $request['content'];
        $tags = json_decode($request['tags'], true);
        return view("guest.article", [
            'article' => $article , 'tags'=> $tags, 'mode' => 1
        ]);
    }

    public function post(Request $request)
    {
        $article = new Article();
        $article->title = $request['title'];
        $article->date = $request['date'];
        $article->thumbnail = $request['thumbnail'];
        $article->content = $request['content'];
        $article->save();

        $tags = json_decode($request['tags']);

        for ($i = 0; $i < count($tags); $i++) {
             $text =  $tags[$i]->{'text'};
             $tag = Tag::where('name', '=', $text)->first();
            if ($tag === null) {
                $newTag=new Tag();
                $newTag->name=$text;
                $newTag->save();
                $article->tags()->attach($newTag->id);
            }else{
                $article->tags()->attach($tag->id);
            } 
        }
    }
    public function edit(Request $request)
    {

        $article =
        Article::where('id', '=', $request['id'])->first();
        $article->update([
            'title' => $request['title'],
            'date' => $request['date'],
            'thumbnail' => $request['thumbnail'],
            'content' => $request['content'],
        ]);

        $tags = json_decode($request['tags']);

        $databaseTags = $article->tags;
        for ($i = 0; $i < count($databaseTags); $i++) {
            $article->tags()->detach($databaseTags[$i]->id);
        }

        for ($i = 0; $i < count($tags); $i++) {
             $text =  $tags[$i]->{'text'};
             $tag = Tag::where('name', '=', $text)->first();
            if ($tag === null) {
                $newTag=new Tag();
                $newTag->name=$text;
                $newTag->save();
                $article->tags()->attach($newTag->id);
                //$article->tags();
            }else{
                $article->tags()->attach($tag->id);
                //$article->tags();
            } 
        }

    }
    public function delete(Request $request)
    {
        DB::table('articles')->where('id', '=', $request['id'])->delete();
        return redirect("admin/articleList");
    }
}
