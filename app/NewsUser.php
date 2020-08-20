<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsUser extends Model
{
    protected $fillable = [
        'user_id', 'news_id'
    ];
}
