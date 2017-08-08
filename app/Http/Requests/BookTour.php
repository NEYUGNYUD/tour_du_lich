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
			'adult' => 'required|numeric',
			'child' => 'required|numeric',
		];
	}

	public function messages() {
		return [
			'adult.required' => 'Chưa nhập số lượng khách lớn tuổi',
			'adult.numeric' => 'Không nhập đúng số lượng khách lớn tuổi',
			'child.required' => 'Chưa nhập số lượng khách từ 7 đến 14 tuổi',
			'child.numeric' => 'Không nhập đúng số lượng khách từ 7 đến 14 tuổi',
		];
	}
	
}
