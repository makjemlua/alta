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
    public function index()
    {
        $numbers = Number::whereRaw(1);
        $numbers = $numbers->paginate(10);
        $viewData = [
            'numbers' => $numbers
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
        $day = date("d");
        $day = (int)$day;
        $num = IdGenerator::generate(['table' => 'numbers', 'field' => 'num_number', 'length' => 6, 'prefix' => $day, 'reset_on_prefix_change' => true]);
        $number = new Number();
        $number->num_name = $user->username;
        $num_service = $number->where('num_service_id', $request->num_service)->first(); //Tên dịch vụ
        $number->num_service = $num_service->num_service;
        $number->num_number = $num; //Số thứ tự
        $number->num_start_time = date("Y-m-d H:i:s"); //Thời gian cấp
        $number->num_end_time = date("Y-m-d 17:30:00"); //Hạn sử dụng
        $number->num_device = $device;
        $number->num_status = 1;
        $number->num_phone = $user->phone;
        $number->num_email = $user->email;
        $number->num_service_id = $request->num_service; //Mã dịch vụ
        //dd($number);
        $number->save();
        return redirect()->back()->with('number', 'ABC');
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
}
