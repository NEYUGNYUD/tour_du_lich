<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BookTour extends Request {

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
			'phone' => 'required|min:10|max:11',
			'address' => 'required|min:5|max:50',
			'adult' => 'required|numeric',
			'child' => 'required|numeric',
		];
	}

	public function messages() {
		return [
			'phone.required' => 'Chưa nhập số điện thoại.',
			'phone.min' => 'Số điện thoại có chiều dài từ 10 đến 11 chữ số.',
			'phone.max' => 'Số điện thoại có chiều dài từ 10 đến 11 chữ số.',
			'address.required' => 'Chưa nhập địa chỉ',
			'address.min' => 'Địa chỉ có chiều dài từ 5 đến 50 ký tự',
			'address.max' => 'Địa chỉ có chiều dài từ 5 đến 50 ký tự',
			'adult.required' => 'Chưa nhập số lượng khách lớn tuổi',
			'adult.numeric' => 'Không nhập đúng số lượng khách lớn tuổi',
			'child.required' => 'Chưa nhập số lượng khách từ 7 đến 14 tuổi',
			'child.numeric' => 'Không nhập đúng số lượng khách từ 7 đến 14 tuổi',
		];
	}
	
}
