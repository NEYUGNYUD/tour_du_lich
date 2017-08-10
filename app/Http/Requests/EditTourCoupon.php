<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditTourCoupon extends Request {

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
            'child' => 'required|numeric',
            'adult' => 'required|min:1|numeric',
            'note' => 'required|min:5'
        ];
	}

	public function messages() {
	    return [
            'child.required' => 'Chưa nhập số trẻ em',
            'child.numeric' => 'Số trẻ em không đúng',
            'adult.required' => 'Chưa nhập số người lớn',
            'adult.numeric' => 'Số người lớn không đúng',
            'note.required' => 'Chưa nhập ghi chú',
            'note.min' => 'Ghi chú phải có chiều dài tối đa 5 ký tự'
        ];
    }
}
