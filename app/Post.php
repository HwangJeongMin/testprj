<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // 팅커콘솔로 인서트
    protected $fillable = ['title','description'];
}
