<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'article';

    public function author()
    {
     return $this->hasOne('App\Home\Author','id','author_id');
     //return $this->belongsTo('App\Home\Author','author_id');
    }

}
