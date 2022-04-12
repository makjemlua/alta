<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin() {
		return view('auth.login');
	}

    public function getLogout() {
		\Auth::guard('admins')->logout();
		return redirect()->route('auth.login');
	}

    public function getForgotPassword() {
		return view('auth.forgot_password');
	}

    public function getResetPassword() {
		return view('auth.reset_password');
	}
}
