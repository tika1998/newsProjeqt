<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'category_id', 'title', 'short_description', 'long_description', 'image',
    ];


    public function category()
    {
        return $this->belongsTo('App\Category')->orderBy('asc');
    }

    public function users() {
        return $this->belongsToMany('App\User', 'news_user');
    }
}
