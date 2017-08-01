<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditVehicle extends Request {

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
			'name' => 'required|min:3',
		];
	}

	public function messages() {
		return [
			'name.required' => "Chưa nhập tên phương tiện.",
            'name.min' => 'Tên phương tiện có độ dài tối thiểu 3 ký tự.',
		];
	}
}
