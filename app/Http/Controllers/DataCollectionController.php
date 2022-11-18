<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataCollectionController extends Controller
{
    //

    public function index()
    {
        
        return view('index');
    }

    public function InsertData(Request $req)
    {

$res = array_merge($req->toArray(),['test' => 'test']);
       return  $res;
    }
}
