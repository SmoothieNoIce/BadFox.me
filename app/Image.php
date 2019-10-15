<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'id',
        'uploader_id',
        'date',
        'name',
        'path'
    ];
}
