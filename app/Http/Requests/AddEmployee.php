<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddEmployee extends Request {

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
			'fullname' => 'required|min:2|max:50',
            'address' => 'required|min:5|max:255',
            'phone' => 'required|min:10|max:11',
            'dob' => 'required|date_format:Y-m-d',
            'email' => 'required|email|unique:tbl_employees,email',
            'password' => 'required|min:8|max:40',
            're-password' => 'required|same:password',
            'level' => 'required'
		];
	}

	public function messages() {
		return [
            'fullname.required' => "Chưa nhập tên nhân viên.",
            'fullname.min' => "Tên nhân viên phải có độ dài từ 2 đến 50 ký tự.",
            'fullname.max' => "Tên nhân viên phải có độ dài từ 2 đến 50 ký tự.",
            'address.required' => 'Chưa nhập địa chỉ.',
            'address.min' => "Địa chỉ phải có độ dài từ 5 đến 255 ký tự.",
            'address.max' => "Địa chỉ phải có độ dài từ 5 đến 255 ký tự.",
            'phone.required' => "Chưa nhập số điện thoại.",
            'phone.min' => "Số điện thoại phải có độ dài từ 10 đến 11 chữ số.",
            'phone.max' => "Số điện thoại phải có độ dài từ 10 đến 11 chữ số.",
            'dob.required' => "Chưa nhập ngày sinh.",
            'dob.date_format' => "Ngày sinh phải theo định dạng dd-mm-yyyy.",
            'email.email' => "Nhập không đúng email.",
            'email.unique' => "Địa chỉ email đã được sử dụng.",
            'password.required' => "Chưa nhập mật khẩu.",
            'password.min' => "Mật khẩu phải có độ dài từ 8 đến 40 ký tự.",
            'password.max' => "Mật khẩu phải có độ dài từ 8 đến 40 ký tự.",
            're-password.required' => "Chưa xác nhận mật khẩu",
            're-password.same' => "Mật khẩu không khớp.",
            'level.required' => "Chưa chọn quyền nhân viên."
        ];
	}

}
