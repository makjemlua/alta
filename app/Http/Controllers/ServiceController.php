<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Number;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $start = '';
        $end = '';
        $services = Service::whereRaw(1);
        if ($request->active) {
            $services->where('se_active', $request->active);
        }
        if ($request->search_name) {
            $services->where('se_name', 'like', '%' . $request->search_name . '%');
        }
        if ($request->time_start && $request->time_end) {
            $start = $request->time_start;
            $end = $request->time_end;
            $services->whereBetween('created_at', [$request->time_start, $request->time_end]);
        }
        $services = $services->paginate(10);
        $viewData = [
            'start' => $start,
            'end' => $end,
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

        $name = Auth::user()->name;
        $notification = new Notification();
        $notification->no_name = $name;
        $notification->no_ip = $request->ip();
        $notification->no_describe = 'Thêm mới dịch vụ '.$request->se_name;
        $notification->save();

        return redirect()
            ->back()
            ->with('success', 'Thêm mới thành công');
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
            'numbers' => $numbers,
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

        //update notification
        $name = Auth::user()->name;
        $notification = new Notification();
        $notification->no_name = $name;
        $notification->no_ip = $request->ip();
        $notification->no_describe = 'Cập nhập thông tin dịch vụ '.$request->se_name;
        $notification->save();
        
        return redirect()
            ->back()
            ->with('success', 'Cập nhập thành công');
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

        //Check number start
        if($request->has('check_se_num')){
            Number::where('num_service_id', $id)->delete();
            $service->se_start_num = $request->se_start_num;
            $service->se_end_num = $request->se_end_num;
        }
        else{
            $service->se_start_num = null;
            $service->se_end_num = null;
            Number::where('num_service_id', $id)->delete();
        }

        //Check prefix
        if($request->has('check_se_prefix')){
            $service->se_prefix = $request->se_prefix;
        }
        else{
            $service->se_prefix = null;
        }

        //Check suffix
        if($request->has('check_se_suffix')){
            $service->se_surfix = $request->se_surfix;
        }
        else{
            $service->se_surfix = null;
        }
        if($request->has('check_reset')){
            $service->se_reset_num = 1;
        }
        else{
            $service->se_reset_num = 0;
        }   
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
                    if($service->se_active == 1){
                        $service->se_active = 2;
                    }
                    elseif($service->se_active == 2){
                        $service->se_active = 1;
                    }
                    $service->save();
                    break;
            }
            return redirect()->back();
        }
    }
}
