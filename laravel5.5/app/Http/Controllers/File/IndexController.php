<?php

namespace App\Http\Controllers\File;

use App\Home\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    //上传文件并添加到数据库
    public function index(Request $request)
    {
        if (Input::method() == 'POST')
        {
            $this->validate($request,[
               'name'=>'required|unique:student|min:2|max:20',
                'age'=>'required|integer|min:1|max:200',
                'sex'=>'required',
                'edu'=>'required',
                'salary'=>'required',
                'city'=>'required',
                'avatar'=>'required',
                'captcha'=>'required|captcha',
            ]);
            //hasFile判断是否存在文件 isvalid判断上传是否出错
            if ($request -> hasFile('avatar') && $request->file('avatar')
            ->isValid()){
             $avatar=$request->file('avatar');
             //设置上传后的文件名
             $path = md5(time().rand(1000,9999)).".".$avatar->getClientOriginalExtension();
             //进行上传工作
             $avatar->move('./uploads/img',$path);
             //获取全部数据
             $data = $request->all();
             //将文件完整路径放入数组·
             $data['avatar'] = './uploads/img/'.$path;
             $result = Member::create($data);
            }
        }else
        {
            return view('file.index');
        }
    }
    public function show()
    {
        $data = Member::paginate(2);
        return view('file.show',compact('data'));
    }
}
