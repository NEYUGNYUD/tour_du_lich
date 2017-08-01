<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddService extends Request {

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
			// 'detail' => 'required|min:10',
		];
	}

	public function messages() {
		return [
			'name.required' => "Chưa nhập tên dịch vụ.",
			'name.min' => 'Tên dịch vụ có độ dài tối thiểu 3 ký tự.',
			// 'detail.required' => 'Chưa nhập mô tả chi tiết dịch vụ.',
			// 'detail.min' => 'Mô tả chi tiết dịch vụ có độ dài tối thiểu 10 ký tự.'
		];
	}
}
