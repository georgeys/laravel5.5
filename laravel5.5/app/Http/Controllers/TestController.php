<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\View\View;
use App\Home\Member;
use Illuminate\Support\Facades\Input;

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
    //查询
    public function test7()
    {
        $data = Member::find(8)->toarray();
        dd($data);
    }
    //ar模式修改

    public function test8()
    {
        $data = Member::find(7);
        $data -> name  = 'laowang';
        $data ->save();
     $result=Member::where('id','8')->update(['name'=>'老王']);
     dd($result);
    }
    //自动验证(Input::method()获取请求类型)
   public function test9(Request $request)
   {
       //如果是post进行此逻辑
       if (Input::method() == "POST")
       {
           $this->validate($request,[
               'name' => 'required|unique:student|min:2|max:50',
               'age'  => 'required|integer|min:1|max:200'
               //.....resources\lang...
           ]);
           //如果信息符合则下一步不通过的话在返回
           echo '111';
       }else
       {
            return \view('test.test9');
       }
   }
}
