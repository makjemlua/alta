<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        return view('user.index', $viewData);
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
        return view('account.create');
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
    public function edit($id)
    {
        $user = User::find($id);
        $viewData = [
            'user' => $user,
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
        $user->group_role = $request->group_role;
        $user->name = $request->name; //Ten dang nhap
        if($request->password !== ''){
                $user->password = bcrypt($request->password);
            }
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
}
