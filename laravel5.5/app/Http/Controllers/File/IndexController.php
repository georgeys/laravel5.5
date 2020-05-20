<?php

namespace App\Http\Controllers\File;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    //
    public function index()
    {
        if (Input::method() == 'POST')
        {

        }else
        {
            return view('file.index');
        }
    }
}
