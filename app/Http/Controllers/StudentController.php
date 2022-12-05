<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    public function index()
    {
        return view('frontend.signin');
    }
    public function register()
    {
        return view('frontend.pagescontact');
    }
    public function registerstudent(Request $req)
    {
        //return $req->all();
        $status = DB::insert("insert into fypos values (?,?,?,?,?,?,?,?,?,?)", 
        [null,
        $req->fullname,
        $req->username,
        $req->password,
        $req->matricid,
        $req->email,
        $req->number,
        $req->intake,
        $req->programme,
        $req->major
    ]);
        if($status)
        {
            return view('frontend.signin');
        }
    }
}
