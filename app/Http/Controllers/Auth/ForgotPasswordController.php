<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function getFormResetPassword() {
		return view('auth.forgot_password');
	}
	public function sendCodeResetPassword(Request $request) {
		$email = $request->email;
		$checkUser = User::where('email', $email)->first();
		if (!$checkUser) {
			return redirect()->back()->with('danger', 'Email không tồn tại');
		}
		$code = md5(time() . $email);

		$checkUser->code = $code;
		$checkUser->time_code = Carbon::now();
		$checkUser->save();

		$url = route('admin.resetPassword', ['code' => $checkUser->code, 'email' => $email]);

		$data = [
			'route' => $url,
		];

		Mail::send('auth.reset_password', $data, function ($message) use ($checkUser) {
			$message->to($checkUser->email, 'Visitor')->subject('Lấy lại mật khẩu!');
		});

		return redirect()->back()->with('success', 'Link lấy lại mật khẩu đã được gửi vào email của bạn');
	}
}
