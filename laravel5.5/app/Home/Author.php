<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'author';

//    public function articles()
//    {
//        return $this->hasMany(Article::class);
//    }

//    public function author()
//    {
//        return $this->hasOne('App\Home\article','id','author_id');
//    }
}
