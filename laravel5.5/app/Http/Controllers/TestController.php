<?php

namespace App\Http\Controllers;

use App\Home\Article;
use Illuminate\Http\Request;
use DB;
use Illuminate\View\View;
use App\Home\Member;
use Illuminate\Support\Facades\Input;
use Session;
use Cache;

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
   public function see()
   {
       //添加一条
       Session::push('name','老王');
       //获取一个session
       Session::get('name');
       //获取如果变量不存在
       Session::get('name', 'laowang');
       Session::get('age', function (){return '18';});
       dd(Session::get('age'));
       //判断是否存在
       Session::has('age');
       //所有session
       Session::all();
       //删除Session 中的name
       Session::forget('name');
       //删除所有
       Session::flush();
   }
   //缓存
   public function  cache()
   {
       //添加缓存有则覆盖
        Cache::put('class','php2018',10);
        Cache::put('class','php2019',10);
        //添加有则不执行
        Cache::add('add','sssss',10);
        //添加永久
        Cache::forever('username','yuanshuai');
        //获取缓存
        Cache::get('username');
        //获取缓存如果没有则默认为default
        Cache::get('user','什么都没有');
        //获取后删除（一次性存储的数据）
        //$value = Cache::pull('user');
        //Cache::forget('username');//删除一项
        //Cache::flush();//删除所有
       //缓存计数器increment默认为1
       Cache::add('count', '0', 1440);
       //递增
       //dd(Cache::increment('count'));
       //递减
       //Cache::decrement('count');
       //设置默认时间100分钟更新一次
       $time = Cache::remember('time',100,function ()
       {
            return date('Y-m-d H:i:s',time());
       });
       dd($time);

   }
   public function sql()
   {
//       //SELECT t1.id,t1.article_name,t2.author_name
//        //FROM article AS t1  JOIN author AS t2 ON t1.author_id=t2.id
//       $data= DB::table('article as t1')
////           ->select(DB::raw('1.id,t1.article_name,t2.author_name'))
//           ->select('t1.id','t1.article_name','t2.author_name')
//           ->leftJoin('author as t2','t1.author_id','=','t2.id')
//           ->get();
//       dd($data);
    $data = Article::get();
    foreach ($data as $key => $val )
    {
        echo $val->id.$val->article_name.$val->author->author_name."<br>";
    }

   }


}
