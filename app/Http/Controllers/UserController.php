<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\Number;
use Illuminate\Support\Facades\Auth;
Use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::guard('web')->id();
        $user = User::find($id);
        $viewData = [
            'user' => $user,
        ];
        return view('info.index', $viewData);
    }

    public function listUser()
    {
        $users = User::whereRaw(1);
        $users = $users->paginate(10);
        $viewData = [
            'users' => $users,
        ];
        return view('account.index', $viewData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $viewData = [
            'roles'=> $roles
        ];
        return view('account.create', $viewData);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $roles = Role::all();
        $user = User::find($id);
        $viewData = [
            'user' => $user,
            'roles' => $roles
        ];
        return view('account.update', $viewData);
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
        return redirect()
            ->back()
            ->with('success', 'Cập nhập thành công');
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

    public function insertOrUpdate(Request $request, $id = '')
    {
        $user = new User();
        if ($id) {
            $user = User::find($id);
        }
        $user->username = $request->username; //Ho ten
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->group_role = $request->role;
        $roles = Role::all();
        $role = $request->role;
        $user->syncRoles([]);
        $user->assignRole($role);
        $user->name = $request->name; //Ten dang nhap
        $user->password = $request->password ? bcrypt($request->password) : $user->password;
        $user->active = $request->active;
        //dd($user);
        $user->save();
    }
    public function uploadAvatar(Request $request){
        $firstString = substr($request->product_name, 0, 1); // Lấy kí tự đầu
        $rand = substr(md5(microtime()), rand(0, 26), 9); // Mã hóa md5 thời gian hiện tại,vị trí bắt đầu là random từ 0-26, có độ dài 9 kí tự
        $rand = str_pad($rand, 9, '0', STR_PAD_LEFT); // Thêm vào chuỗi một chuỗi 9 phần tử, bỏ vào giá trị cuối

        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '_' . rand(0, 9999999) . '_' . md5(rand(0, 9999999)) . '.' . $file->getClientOriginalExtension();

            $file->move('img\upload', $fileName);
            $user->avatar = $fileName;
        }
        //dd($user);
        $user->save();
        return redirect()
            ->back()
            ->with('success', 'Update ảnh thành công');
    }
    public function number()
    {
        $service = Service::all();
        $number = Number::orderBy('id', 'desc')->first();
        $viewData = [
            'service' => $service,
            'number' => $number
        ];
        return view('user.index', $viewData);
    }

    public function numberStore(Request $request)
    {
        $device = Auth::check() ? 'Hệ thống' : 'Kiosk';
        $day = date("d");
        $day = (int)$day;
        $num = IdGenerator::generate(['table' => 'numbers', 'field' => 'num_number', 'length' => 6, 'prefix' => $day, 'reset_on_prefix_change' => true]);
        $number = new Number();
        $number->num_name = $request->username;
        $result_explode = explode('|', $request->num_service); // Tạo mảng
        $number->num_service = $result_explode[1]; //Tên dịch vụ
        $number->num_number = $num; //Số thứ tự
        $number->num_start_time = date("Y-m-d H:i:s"); //Thời gian cấp
        $number->num_end_time = date("Y-m-d 17:30:00"); //Hạn sử dụng
        $number->num_device = $device;
        $number->num_status = 1;
        $number->num_phone = $request->phone;
        $number->num_email = $request->email;
        $number->num_service_id = $result_explode[0]; //Mã dịch vụ
        //dd($number);
        $number->save();
        return redirect()->back()->with('number', 'ABC');
    }
}
