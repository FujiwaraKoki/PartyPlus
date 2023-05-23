<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;

use Illuminate\Support\Facades\DB;


class DBController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from events;');
        return view('hello.index', ['items'=>$items]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>'Test.']);
    }
}