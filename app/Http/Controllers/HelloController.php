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
        /*
        if (isset($request->id)){
            $param = ['id' => $request->id];
            $items = DB::select('select * from people where id = :id', $param);
        }
        else{
            $items = DB::select('select * from people');
        }
        */
        //$items = DB::table('people')->get();
        $items = DB::table('people')->orderBy('age', 'desc')->get();  // asc or desc
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request){
        # return view('hello.index', ['msg'=>'Input has complited!']);
        $items = DB::select('select * from people;');
        return view('hello.index', ['items' => $items]);
    }

    public function add(Request $request){
        return view('hello.add');
    }

    public function create(Request $request){
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        //DB::insert('insert into people (name, mail, age) values (:name, :mail, :age)', $param);
        DB::table('people')->insert($param);
        return redirect('/hello');
    }

    public function edit(Request $request){
        $param = ['id' => $request->id];
        //$item = DB::select('select * from people where id = :id', $param);
        //return view('hello.edit', ['form' => $item[0]]);
        $item = DB::table('people')
            ->where('id', $request->id)
            ->first();
        return view('hello.edit', ['form' => $item]);
    }

    public function update(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        //DB::update('update people set name = :name, mail = :mail, age = :age where id = :id', $param);
        DB::table('people')
            ->where('id', $request->id)
            ->update($param);
        return redirect('/hello');
    }

    public function del(Request $request){
        //$param = ['id' => $request->id];
        //$item = DB::select('select * from people where id = :id', $param);
        //return view('hello.del', ['form' => $item[0]]);
        $item = DB::table('people')
            ->where('id', $request->id)
            ->first();
        return view('hello.del', ['form' => $item]);
    }

    public function remove(Request $request){
        //$param = ['id' => $request->id];
        //$item = DB::delete('delete from people where id = :id', $param);
        DB::table('people')
            ->where('id', $request->id)
            ->delete();
        return redirect('/hello');
    }

    public function show(Request $request){
        $id = $request->id;
        $items = DB::table('people')->where('id', '<=', $id)->get();
        return view('hello.show', ['items' => $items]);
    }

    public function show_ofs_age(Request $request){
        $page = $request->page;
        $item = DB::table('people')
            ->offset($page * 3)  // shift start line
            ->limit(3)  // disp line num
            ->get();
        return view('hello.show', ['items' => $items]);
    }

    public function show_by_name(Request $request){
        $name = $request->name;
        $items = DB::table('people')
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('mail', 'like', '%' . $name . '%')
            ->get();
        return view('hello.show', ['items' => $items]);
    }

    // TODO
    public function show_by_age(Request $request){
        $min = $request->min;
        $max = $request->max;
        $items = DB::table('people')
            ->whereRaw('? <= age and age <= ?', [$min, $max])
            ->get();
        return view('hello.show', ['items' => $items]);
    }
}
