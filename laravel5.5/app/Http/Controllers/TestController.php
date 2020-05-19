<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\View\View;

class TestController extends Controller
{
    //
    public function test()
    {
        //查询数据
       $students =  DB::table('student')->where('id','>','20')
            ->get();
       $day=date('N');
       return View('test',compact('students','day'));
    }
}
