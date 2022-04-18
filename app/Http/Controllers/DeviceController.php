<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Service;
use App\Http\Requests\RequestDevice;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $devices = Device::whereRaw(1);
        if ($request->search) {
            $devices->where('de_name', 'like', '%' . $request->search . '%');
        }
        if ($request->active) {
            $devices->where('de_active', $request->active);
        }
        if ($request->connect) {
            $devices->where('de_connect', $request->connect);
        }
        $devices = $devices->paginate(5);
        $viewData = [
            'devices' => $devices,
        ];
        return view('device.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Service::get()->pluck('se_name')->toarray();
        $viewData = [
            'services' => $services,
        ];
        return view('device.create', $viewData);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestDevice $requestDevice)
    {
        $this->insertOrUpdate($requestDevice);
        return redirect()->back()->with('success', 'Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $device = Device::find($id);
        $viewData = [
            'device' => $device,
        ];
        return view('device.detail', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $device = Device::find($id);
        $services = Service::get()->pluck('se_name')->toarray();
        $viewData = [
            'device' => $device,
            'services' => $services
        ];
        return view('device.update', $viewData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $requestDevice, $id)
    {
        $this->insertOrUpdate($requestDevice, $id);
        return redirect()->back()->with('success', 'Cập nhập thành công');
    }

    public function insertOrUpdate($requestDevice, $id = '')
    {
        $device = new Device();
        if ($id) {
            $device = Device::find($id);
        }
        $device->de_code = $requestDevice->de_code;
        $device->de_name = $requestDevice->de_name;
        $device->de_ip = $requestDevice->de_ip;
        $device->de_type = $requestDevice->de_type;
        $device->de_username = $requestDevice->de_username;
        $device->de_password = $requestDevice->de_password;
        $device->de_service = $requestDevice->de_service;
        //dd($device);
        $device->save();
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
