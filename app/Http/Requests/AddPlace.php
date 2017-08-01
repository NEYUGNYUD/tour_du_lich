<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AddPlace extends Request {

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
			'name' => 'required|min:5',
            'name' => 'unique:tbl_places,place_name',
            'parentplace' => 'required',
		];
	}
	public function messages() {
		return [
			'name.required' => "Chưa nhập tên địa điểm.",
            'name.min' => "Độ dài tên địa điểm có độ dài tối thiểu 5 ký tự.",
            'name.unique' => "Tên địa điểm đã tồn tại trong cơ sở dữ liệu.",
            'parentplace.required' => "Chưa chọn khu vực của địa điểm.",
		];
	}
}
