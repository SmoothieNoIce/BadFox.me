<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name','description'];

    public function articles()
    {
        return $this->belongsToMany('App\Article');
     
        // 如果要自己設定中介 table 的名稱 可以加在第二個參數 這邊示範即是設定成 tags_pivot
        // 如果要自己另外設定 article_id 則是加在第三個參數 這邊示範設定成 article_identifier
        //return $this->belongsToMany('App\Article', 'tags_pivot', 'article_identifier');
    }

}
