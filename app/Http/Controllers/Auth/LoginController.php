<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() {
		return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        /**
         * @var $remember Request remember
         * @var $ipAddress Request ip address
         * @var $credentials Request email, password
         */
        $credentials = $request->only('name', 'password');

		if (\Auth::guard()->attempt($credentials)) {

            //Return view product
			return redirect()->route('home.index')->with('success', 'Bạn đã đăng nhập thành công');
		}
        //Return view login
        return redirect()->back()->with('danger', 'Sai mật khẩu hoặc tên đăng nhập');
    }

    public function logout()
    {
        Auth::guard()->logout();
		return redirect()->route('admin.login');
    }
}
