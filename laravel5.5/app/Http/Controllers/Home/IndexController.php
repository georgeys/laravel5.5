<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Input;
use DB;

class IndexController extends Controller
{
    //
    public function index()
    {
        //获取单个值
        echo Input::get('id','10086')."<br>";
        $all = Input::all();
        dd($all);
        //dd(Input::get('id'));
        //dd(Input::only(['id','age']));
        //dd(Input::except(['id']));
        //dd(Input::has('sex'));
    }
    public function add()
    {
       $db =  DB::table('student');
       $result = $db->insertGetId([
               'name'  => '是散',
               'sex'   => '男',
               'age'   => '55',
               'edu'   => '本科',
               'salary'=> '8000',
               'bonus' => '550',
               'city'  => '西安'
           ]);
       dd($result);
    }
    public function update()
    {
        $db = DB::table('student');
        $result = $db->where('id','32')
            ->update(['name'=>'袁帅','age'=>'18','salary'=>'10000']);
        dd($result);
    }

    public function select()
    {

//        $results =  DB::table('student')->where('id','>',"10")
//            ->where('age','<','30')->get();
//        foreach ($results as $result)
//        {
//            echo "姓名:{$result->name},年纪:{$result->age}<br>";
//        }
//        $results = DB::table('student')->where('id','5')
//            ->value('name');
        $results = DB::table('student')->where('id','>','5')
            ->limit(5)->offset(2)->get();
        dd($results);
    }
    public function del()
    {
        $result = DB::table('student')->where('id','33')->delete();
        dd($result);
    }
    public function show()
    {
        $date = date("Y-m-d H:i:s",time());
        $time = strtotime('+1 year');
        return View('home/show',compact('date','time'));
    }
}
