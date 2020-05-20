<?php

namespace App\Home;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //定义模型关联数据表（一个模型只操作一个表）必选
    protected $table = 'student';
    //定义主键(如果为id可不写)可选
    protected $primaryKey = 'id';
    //定义时间禁止操作可选
    public $timestamps = false;
    //设置允许写入的数据字段可选(create时需要设置)
    protected $fillable = ['id','name','age','sex','edu','salary','bonus','city'];


}
