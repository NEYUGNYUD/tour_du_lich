<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConfirmBookTour extends Request {

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
            'acceptPolice' => 'required',
            'paymethod' => 'required',
		];
	}

	public function messages()
    {
        return [
            'acceptPolice.required' => 'Bạn chưa đồng ý với điều khoản của chúng tôi',
            'paymethod.required' => 'Bạn chưa chọn phương thức thanh toán'
        ];
    }
}
