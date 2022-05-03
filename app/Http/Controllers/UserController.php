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
        $user->password = $request->password;
        $user->active = $request->active;
        //dd($user);
        $user->save();
    }
}
