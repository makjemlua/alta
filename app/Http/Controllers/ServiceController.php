<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Number;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::whereRaw(1);
        $services = $services->paginate(10);
        $viewData = [
            'services' => $services,
        ];
        return view('service.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->insertOrUpdate($request);
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
        $service = Service::find($id);
        //$numbers = $service->with('number:id,num_name')->where('id', $id)->get();
        $numbers = Number::where('num_service_id', $id)->get();
        $viewData = [
            'service' => $service,
            'numbers' => $numbers
        ];
        return view('service.detail', $viewData);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $viewData = [
            'service' => $service,
        ];
        return view('service.update', $viewData);
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
        $this->insertOrUpdate($request, $id);
        return redirect()->back()->with('success', 'Cập nhập thành công');
    }

    public function insertOrUpdate(Request $request, $id = '')
    {
        $service = new Service();
        if ($id) {
            $service = Service::find($id);
        }
        $service->se_code = $request->se_code;
        $service->se_name = $request->se_name;
        $service->se_describe = $request->se_describe;
        $service->se_active = 1;
        //dd($service);
        $service->save();
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

    public function action($action, $id)
    {
        if ($action) {
            $service = Service::find($id);
            switch ($action) {
                case 'active':
                    $service->se_active = $service->se_active ? 0 : 1;
                    $service->save();
                    break;
            }
            return redirect()->back();
        }
    }
}
