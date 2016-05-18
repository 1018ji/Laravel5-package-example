<?php

namespace App\Http\Controllers;

use ok;

class myController extends Controller
{
    public function TestLocalView()
    {
        //laravle-rescources-views 下
        return view('okview',['flag'=>ok::printOKname().' 1:LocalView']);
    }

    public function TestPackagesView()
    {
        //laravle-rescources-views 下
        return view('test::okview',['flag'=>ok::printOKname().' 2:PackagesView']);
    }
}