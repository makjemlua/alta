<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Device;
use App\Models\Number;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $numbers = Number::whereRaw(1);
        $services = Service::all();
        if ($request->select_service) {
            $services->where('id', $request->select_service);
        }
        if ($request->select_status) {
            $numbers->where('num_status', $request->select_status);
        }
        if ($request->select_system) {
            $numbers->where('num_device', $request->select_system);
        }
        if ($request->search_name) {
            $numbers->where('num_name', 'like', '%' . $request->search_name . '%');
        }
        $numbers = $numbers->paginate(10);
        
        $viewData = [
            'numbers' => $numbers,
            'services' => $services
        ];
        return view('numbers.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Service::all();
        $number = Number::orderBy('id', 'desc')->first();
        $viewData = [
            'service' => $service,
            'number' => $number
        ];
        return view('numbers.create', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $device = Auth::check() ? 'Hệ thống' : 'Kiosk';
        
        $number = new Number();
        $number->num_name = $user->username;
        $result_explode = explode('|', $request->num_service); // Tạo mảng
        $number->num_service = $result_explode[1]; //Tên dịch vụ
        $number->num_start_time = date("Y-m-d H:i:s"); //Thời gian cấp
        $number->num_end_time = date("Y-m-d 17:30:00"); //Hạn sử dụng
        $number->num_device = $device;
        $number->num_status = 1;
        $number->num_phone = $user->phone;
        $number->num_email = $user->email;
        $number->num_service_id = $result_explode[0]; //Mã dịch vụ
        $id_service = $number->num_service_id;
        $start_num = Service::where('id', $id_service)->first()->se_start_num;
        $start_num = $start_num - 1;
        $end_num = Service::where('id', $id_service)->first()->se_end_num;
        $prefix = Service::where('id', $id_service)->first()->se_prefix;
        $surfix = Service::where('id', $id_service)->first()->se_surfix;
        $reset_num = Service::where('id', $id_service)->first()->se_reset_num;
        if($reset_num == 1){
            $reset_num = true;
        }
        elseif($reset_num == 0){
            $reset_num = false;
        }
        //Cap so
        $day = date("d");
        $day = (int)$day;
        //$num = IdGenerator::generate(['table' => 'numbers', 'field' => 'num_number', 'length' => 6, 'prefix' => $prefix, 'reset_on_prefix_change' => $reset_num]);
        //$number->num_number = $num.$surfix; //Số thứ tự
        //$num_old = $start_num;
        $num_old = Number::where('num_service_id', $id_service)->latest()->first();
        if($num_old == null){
            $num_old = $start_num;
        }
        else{
            $num_old = $num_old->num_number;
            $num_old = preg_split('/(_)/i', $num_old);
            $num_old = $num_old[1];
        }
        $num_new = (int)$num_old + 1;
            //dd($num_new);
        $number->num_number = $prefix."_".$num_new."_".$surfix;
        

        //dd($number);
        $number->save();
        return redirect()->back()->with('number','ABC');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $number = Number::find($id);
        //$a = $number->with('service:id,se_code,se_name')->where('id', $id)->get();
        $viewData = [
            'number' => $number
        ];
        return view('numbers.detail', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function action(Request $request, $action, $id)
    {
        if ($action) {
            $number = Number::find($id);
            switch ($action) {
                case 'status':
                    if($number->num_status == 1){
                        $number->num_status = 2;
                    }
                    elseif($number->num_status == 2){
                        $number->num_status = 3;
                    }
                    $number->save();
                    break;
            }
            return redirect()->back();
        }
    }
}
