<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllers extends Controller
{
    //
    public function sceadmin(){
        return view('admin.sceadmin');
    }

    public function consultancyadmin(){
        return view('admin.consultancyadmin');
    }

    public function procurementadmin(){
        return view('admin.procurementadmin');
    }

    public function remedialadmin(){
        return view('admin.remedialadmin');
    }

    public function mainadmin(){
        return view('admin.mainadmin');
    }
}
