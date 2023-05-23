<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;

use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
    //public function index(){
    //    return view('hello.index', ['message'=>'Hello!']);
    //}
    //public function index(Request $request){
    //    return view('hello.index', ['data'=>$request->data]);
    //}
    public function index(Request $request){
        # return view('hello.index', ['msg'=>'Please input Form.']);
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function post(HelloRequest $request){
        return view('hello.index', ['msg'=>'Input has complited!']);
    }
}
