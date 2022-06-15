<?php

namespace App\Http\Controllers;
use App\DataUser;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function profile()
    {
        return view ('profile');
    }
    public function datauser ()
    {
        $datauser = DataUser::paginate(10);
        return view ('user',['data'=>$datauser]);
    }
}
