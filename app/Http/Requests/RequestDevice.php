<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestDevice extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'de_code'    => 'required|max:20',
            'de_name'    => 'required|max:30',
            'de_ip'      => 'required|max:20',
            'de_username'=> 'required|min:2|max:20',
            'de_password'=> 'required|min:2|max:20',
            'de_service' => 'required|max:100',
        ];
    }
    public function messages() {
		return [
			'de_code.required' => 'Vui lòng nhập mã sản phẩm',
            'de_code.max' => 'Mã sản phẩm phải nhỏ hơn 20 ký tự',
			'de_name.required' => 'Tên sản phẩm không được để trống',
			'de_name.max' => 'Tên sản phẩm phải nhỏ hơn 30 ký tự',
            'de_ip.required' => 'Địa chỉ IP không được để trống',
            'de_ip.max' => 'Địa chỉ IP phải nhỏ hơn 20 kí tự',
			'de_username.required' => 'Tên đăng nhập không được để trống',
            'de_username.min' => 'Tên đăng nhập phải lớn hơn 5 ký tự.',
            'de_username.max' => 'Tên đăng nhập phải nhỏ hơn 20 ký tự.',
            'de_password.required' => 'Mật khẩu không được để trống',
            'de_password.min' => 'Mật khẩu phải lớn hơn 5 ký tự.',
            'de_password.max' => 'Mật khẩu phải nhỏ hơn 20 ký tự.',
            'de_service.required' => 'Dịch vụ sử dụng không được để trống',
            'de_service.max' => 'Tối đa 100 kí tự',
		];
	}
}
