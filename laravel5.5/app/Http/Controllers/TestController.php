<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\View\View;
use App\Home\Member;

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

    public function test1()
    {
        return view('test.index');
    }

    public function test2()
    {
        return view('test.test2');
    }
    public function test3()
    {
        return '提交成功';
    }
    //测试添加
    public function test4()
    {
        $member = new Member();
        $member -> name = '大熊';
        $member -> sex = '男';
        $member -> age = '19';
        $member -> edu = '本科';
        $member -> salary = '1000';
        $member -> bonus = '500';
        $member -> city = '倍京';
        $result = $member -> save();
        dd($result);
    }
    //添加页面
    public function test5()
    {
        return \view('test.test');
    }
    //添加逻辑
    protected function test6(Request $request)
    {
     $students = new Member();
     $result = $students->create($request->all());
     dd($request);
    }

}
