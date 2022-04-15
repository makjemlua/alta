<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function resetPassword(RequestResetPassword $request) {
		$code = $request->code;
		$email = $request->email;

		$checkUser = User::where([
			'code' => $code,
			'email' => $email,
		])->first();

		if (!$checkUser) {
			return redirect('/')->with('danger', 'Xin lỗi, không đúng đường dẫn lấy lại mật khẩu');
		}
		return view('auth.passwords.reset');
	}
	public function SaveResetPassword(RequestResetPassword $requestResetPassword) {
		$code = $requestResetPassword->code;
		$email = $requestResetPassword->email;

		$checkUser = User::where([
			'code' => $code,
			'email' => $email,
		])->first();

		if (!$checkUser) {
			return redirect('/')->with('danger', 'Xin lỗi, không đúng đường dẫn lấy lại mật khẩu');
		}
		$checkUser->password = md5($requestResetPassword->password);
		$checkUser->save();

		return redirect()->route('get.login')->with('success', 'Mật khẩu đã được đổi thành công');
	}
}
