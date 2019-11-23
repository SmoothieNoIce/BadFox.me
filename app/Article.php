<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id',
        'date',
        'thumbnail',
        'title',
        'content',
        'tags'
    ];

    public function tags()
    {
        // 因為可以有很多 tags 所以是 belongsToMany
        // withTimeStamps() 是因為要讓 created_at updated_at 欄位會自動處理
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }

}