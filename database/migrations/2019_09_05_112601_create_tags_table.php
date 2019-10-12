<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();   
            $table->string('description')->nullable();   
            $table->timestamps();
        });
         // 另外還要一個中介的 table 名稱是這兩個 model 名稱中間加一個底線 英文字母排前面的放前面 ( a 排在 t 前面 所以 article 放前面)
         Schema::create('article_tag', function(Blueprint $table)
         {
             // 數字 正數 同時也要設 index
             $table->bigInteger('article_id')->unsigned()->index();
               // 同 article_id
             $table->bigInteger('tag_id')->unsigned()->index();

             // 刪除 article 的時候同時也要刪除這個中介用的資料 所以要設定 foreign           
             $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
             $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
  
             // created_at, updated_at 會自動處理
             $table->timestamps();
         });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('article_tag');
    }
}
