<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;

use Illuminate\Support\Facades\DB;
use App\Models\party_plus;

use DateTime;


class PartyPlusController extends Controller
{
    public $TABLE_NAME_CUSTOMER = 'customers';
    public $TABLE_NAME_EVENT = 'events';
    public $BASE_DIR = "/PartyPlus";
    public $BASE_VIEW_DIR = "PartyPlus.";
    public $DIR_EVENT = "/Event";

    /////////////////// Customer ///////////////////
    public function index(Request $request){
        $items = DB::table($this->TABLE_NAME_CUSTOMER)
            ->orderBy('id', 'asc')
            ->get();  // asc or desc
        $view_dir = $this->BASE_VIEW_DIR . 'dispCustomers';
        return view($view_dir, ['items' => $items]);
    }

    public function post(Request $request){
        $items = DB::table($this->TABLE_NAME_CUSTOMER)
            ->orderBy('id', 'asc')
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'index';
        return view($view_dir, ['items' => $items]);
    }

    public function add(Request $request){
        $view_dir = $this->BASE_VIEW_DIR . 'add_customer';
        return view($view_dir);
    }

    public function insert(Request $request){
        $now = date('Y-m-d H:i:s');
        $param = [
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'last_name_fonetic' => $request->last_name_fonetic,
            'first_name_fonetic' => $request->first_name_fonetic,
            'age' => $request->age,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'postal_number' => $request->postal_number,
            'prefecture' => $request->prefecture,
            'city1' => $request->city1,
            'city2' => $request->city2,
            'building' => $request->building,
            'birth_year' => $request->birth_year,
            'work_style' => $request->work_style,
            'job' => $request->job,
            'reg_dt' => date('Y-m-d H:i:s', strtotime($now . ' 9 hour')),
            'update_dt' => date('Y-m-d H:i:s', strtotime($now . ' 9 hour')),
            'remarks' => $request->remarks,
            'person_type' => $request->person_type
        ];
        DB::table($this->TABLE_NAME_CUSTOMER)->insert($param);
        return redirect($this->BASE_DIR);
    }

    public function edit(Request $request){
        $item = DB::table($this->TABLE_NAME_CUSTOMER)
            ->where('id', $request->id)
            ->first();
        $view_dir = $this->BASE_VIEW_DIR . 'edit_customer';
        return view($view_dir, ['form' => $item]);
    }

    public function update(Request $request){
        $param = [
            'id' => $request->id,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'last_name_fonetic' => $request->last_name_fonetic,
            'first_name_fonetic' => $request->first_name_fonetic,
            'age' => $request->age,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'postal_number' => $request->postal_number,
            'prefecture' => $request->prefecture,
            'city1' => $request->city1,
            'city2' => $request->city2,
            'building' => $request->building,
            'birth_year' => $request->birth_year,
            'work_style' => $request->work_style,
            'job' => $request->job,
            'reg_dt' => $request->reg_dt,
            'update_dt' => $request->update_dt,
            'remarks' => $request->remarks,
            'person_type' => $request->person_type
        ];

        DB::table($this->TABLE_NAME_CUSTOMER)
            ->where('id', $request->id)
            ->update($param);

        return redirect($this->BASE_DIR);
    }

    public function del(Request $request){
        $item = DB::table($this->TABLE_NAME_CUSTOMER)
            ->where('id', $request->id)
            ->first();
        $view_dir = $this->BASE_VIEW_DIR . 'del_customer';
        return view($view_dir, ['form' => $item]);
    }

    public function remove(Request $request){
        DB::table($this->TABLE_NAME_CUSTOMER)
            ->where('id', $request->id)
            ->delete();
        return redirect($this->BASE_DIR);
    }

    public function show(Request $request){
        $id = $request->id;
        $items = DB::table($this->TABLE_NAME_CUSTOMER)
            ->where('id', '<=', $id)
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_customer';
        return view($view_dir, ['items' => $items]);
    }

    public function show_ofs_age(Request $request){
        $page = $request->page;
        $item = DB::table($this->TABLE_NAME_CUSTOMER)
            ->offset($page * 3)  // shift start line
            ->limit(3)  // disp line num
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_customer';
        return view($view_dir, ['items' => $items]);
    }

    public function show_by_name(Request $request){
        $name = $request->name;
        $items = DB::table($this->TABLE_NAME_CUSTOMER)
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('mail', 'like', '%' . $name . '%')
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_customer';
        return view($view_dir, ['items' => $items]);
    }

    // TODO
    public function show_by_age(Request $request){
        $min = $request->min;
        $max = $request->max;
        $items = DB::table($this->TABLE_NAME_CUSTOMER)
            ->whereRaw('? <= age and age <= ?', [$min, $max])
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_customer';
        return view($view_dir, ['items' => $items]);
    }
    /////////////////// Customer ///////////////////

    /////////////////// Event ///////////////////
    public function index_event(Request $request){
        $items = DB::table($this->TABLE_NAME_EVENT)
            ->orderBy('id', 'asc')
            ->get();  // asc or desc
        $view_dir = $this->BASE_VIEW_DIR . 'dispEvents';
        return view($view_dir, ['items' => $items]);
    }

    public function post_event(Request $request){
        $items = DB::table($this->TABLE_NAME_EVENT)
            ->orderBy('id', 'asc')
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'index';
        return view($view_dir, ['items' => $items]);
    }

    public function add_event(Request $request){
        $view_dir = $this->BASE_VIEW_DIR . 'add_event';
        return view($view_dir);
    }

    public function insert_event(Request $request){
        $now = date('Y-m-d H:i:s');
        $param = [
            'name' => $request->name,
            'site' => $request->site,
            'site_address' => $request->site_address,
            'site_url' => $request->site_url,
            'charge' => $request->charge,
            'payment_method' => $request->payment_method,
            'date' => $request->date,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
            'top_fig' => $request->top_fig,
            'info' => $request->info,
            'office' => $request->office,
            'group_name' => $request->group_name,
            'sponser_id' => $request->sponser_id,
            'reg_dt' => date('Y-m-d H:i:s', strtotime($now . ' 9 hour')),
            'update_dt' => date('Y-m-d H:i:s', strtotime($now . ' 9 hour')),
            'remarks' => $request->remarks,
        ];
        DB::table($this->TABLE_NAME_EVENT)->insert($param);
        return redirect($this->BASE_DIR . $this->DIR_EVENT);
    }

    public function edit_event(Request $request){
        $item = DB::table($this->TABLE_NAME_EVENT)
            ->where('id', $request->id)
            ->first();
        $view_dir = $this->BASE_VIEW_DIR . 'edit_event';
        return view($view_dir, ['form' => $item]);
    }

    public function update_event(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'site' => $request->site,
            'site_address' => $request->site_address,
            'site_url' => $request->site_url,
            'charge' => $request->charge,
            'payment_method' => $request->payment_method,
            'date' => $request->date,
            'time_start' => $request->time_start,
            'time_end' => $request->time_end,
            'top_fig' => $request->top_fig,
            'info' => $request->info,
            'office' => $request->office,
            'group_name' => $request->group_name,
            'sponser_id' => $request->sponser_id,
            'reg_dt' => $request->reg_dt,
            'update_dt' => $request->update_dt,
            'remarks' => $request->remarks,
        ];

        DB::table($this->TABLE_NAME_EVENT)
            ->where('id', $request->id)
            ->update($param);

        return redirect($this->BASE_DIR . $this->DIR_EVENT);
    }

    public function del_event(Request $request){
        $item = DB::table($this->TABLE_NAME_EVENT)
            ->where('id', $request->id)
            ->first();
        $view_dir = $this->BASE_VIEW_DIR . 'del_event';
        return view($view_dir, ['form' => $item]);
    }

    public function remove_event(Request $request){
        DB::table($this->TABLE_NAME_EVENT)
            ->where('id', $request->id)
            ->delete();
        return redirect($this->BASE_DIR . $this->DIR_EVENT);
    }

    public function show_event(Request $request){
        $id = $request->id;
        $items = DB::table($this->TABLE_NAME_EVENT)
            ->where('id', '<=', $id)
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_event';
        return view($view_dir, ['items' => $items]);
    }

    public function show_event_ofs_age(Request $request){
        $page = $request->page;
        $item = DB::table($this->TABLE_NAME_EVENT)
            ->offset($page * 3)  // shift start line
            ->limit(3)  // disp line num
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_event';
        return view($view_dir, ['items' => $items]);
    }

    public function show_event_by_name(Request $request){
        $name = $request->name;
        $items = DB::table($this->TABLE_NAME_EVENT)
            ->where('name', 'like', '%' . $name . '%')
            ->orWhere('office', 'like', '%' . $name . '%')
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_event';
        return view($view_dir, ['items' => $items]);
    }

    // TODO
    public function show_event_by_age(Request $request){
        $min = $request->min;
        $max = $request->max;
        $items = DB::table($this->TABLE_NAME_EVENT)
            ->whereRaw('? <= date and date <= ?', [$min, $max])
            ->get();
        $view_dir = $this->BASE_VIEW_DIR . 'show_event';
        return view($view_dir, ['items' => $items]);
    }
    /////////////////// Event ///////////////////
    
}
