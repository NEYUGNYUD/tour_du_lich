<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddCustomer extends Request {

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
			'name' => 'required|min:3|max:50',
			'address' => 'required|min:3|max:100',
			'dob' => 'required|date_format:Y-m-d',
			//không được dùng khoảng trăng trong unique
			'email' => 'required|email|unique:tbl_employees,email',
			'password' => 'required|min:8|max:50',
			're-password' => 'required|same:password',
		];
	}

	public function messages() {
		return [
			'name.required' => 'Chưa nhập tên người dùng.',
			'name.min' => 'Tên người dùng có chiều dài từ 3 đến 50 ký tự',
			'name.max' => 'Tên người dùng có chiều dài từ 3 đến 50 ký tự',
			'address.required' => 'Chưa nhập địa chỉ.',
			'address.min' => 'Địa chỉ có chiều dài từ 3 đến 100 ký tự',
			'address.max' => 'Địa chỉ có chiều dài từ 3 đến 100 ký tự',
			'dob.required' => 'Chưa nhập ngày sinh',
			'dob.date_format' => 'Chưa nhập đúng định dạng ngày',
			'email.required' => 'Chưa nhập email',
			'email.email' => 'Email không đúng định dạng',
			'email.unique' => 'Địa chỉ email đã bị trùng',
			'password.required' => 'Chưa nhập mật khẩu',
			'password.min' => 'Mật khẩu phải có độ dài từ 8 đến 50 ký tự',
			'password.max' => 'Mật khẩu phải có độ dài từ 8 đến 50 ký tự',
			're-password.required' => 'Chưa xác nhận mật khẩu',
			're-password.same' => 'Mật khẩu không khớp',

		];
	}
}
