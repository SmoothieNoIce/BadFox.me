<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

//訪客路由
Route::get('/','Guest\IndexController@index');
Route::get('/index','Guest\IndexController@index');
Route::get('/search','Guest\SearchController@search');
Route::get('/about','Guest\AboutController@index');
Route::get('/articleList','Guest\ArticleController@getArticlesPyPage');

Route::get('/tag/search','Admin\TagController@searchTag');
Route::get('/tag/all','Admin\TagController@allTag');
//文章路由
Route::get('/article/{id?}','Guest\ArticleController@getArticleByID')
        ->where('id', '[0-9]+');
//Route::get('/articleList/{page?}','Guest\ArticleController@getArticlesPyPage')
       // ->where('page', '[0-9]+');

//管理員登入處理
Route::get('admin/login','Admin\LoginController@index');
Route::post('admin/login','Admin\LoginController@login');
Route::group(['prefix' => 'admin','middleware' => ['web']], function () {
         //view路由
        Route::get('/login','Admin\LoginController@index');
        Route::get('/logout','Admin\LoginController@logout');
        //表單路由
        Route::post('/login','Admin\LoginController@login');
        Route::post('/logout','Admin\LoginController@logout');
});
//管理員操作
Route::group(['prefix' => 'admin','middleware' => ['web','admin.login']], function () {
        //view路由
        Route::get('/home','Admin\IndexController@home');
        Route::get('/articleList','Admin\ArticleController@index');
        Route::get('/tagList','Admin\TagController@index');
        Route::get('/contentSetting','Admin\IndexController@contentSetting');
        Route::get('/fullSetting','Admin\IndexController@fullSetting');
        //文章操作路由
        Route::get('/article/new','Admin\ArticleController@newPost');
        Route::get('/article/edit/{id}','Admin\ArticleController@editPost')->where('id', '[0-9]+')->name('editPost');
        //表單路由
        Route::post('/article/post','Admin\ArticleController@post');
        Route::get('/article/preview','Admin\ArticleController@preview');
        Route::post('/article/edit/{id}','Admin\ArticleController@edit')->where('id', '[0-9]+')->name('edit');
        Route::post('/article/delete/{id}','Admin\ArticleController@delete')->where('id', '[0-9]+')->name('delete');
        Route::post('/tag/add','Admin\TagController@add');

        Route::post('/logout','Admin\LoginController@logout');
});