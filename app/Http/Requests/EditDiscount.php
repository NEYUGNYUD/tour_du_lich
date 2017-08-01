<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditDiscount extends Request {

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
			'name' => 'required|min:5|max:15',
            'start_time' => 'required',
            'start_date' => 'required|date',
            'end_time' => 'required',
            'end_date' => 'required|date|after:start_date',
            'money' => 'required|min:4'
		];
	}

	public function messages() {
		return [
			'name.required' => 'Chưa nhập mã giảm giá.',
            'name.min' => 'Mã giảm giá có độ dài từ 5 đến 15 ký tự.',
            'name.max' => 'Mã giảm giá có độ dài từ 5 đến 15 ký tự.',
//            'name.unique' => 'Mã giảm giá bị trùng',
            'start_time.required' => 'Chưa nhập thời giản bắt đầu mã giảm giá.',
            'start_date.required' => 'Chưa nhập ngày bắt đầu mã giảm giá',
            'start_date.date' => 'Ngày bắt đầu định dạng không đúng',
            'end_time.required' => 'Chưa nhập thời gian kết thúc mã giảm giá',
            'end_date.required' => 'Chưa nhập ngày kết thúc mã giảm giá.',
            'end_date.date' => 'Ngày kết thúc định dạng không đúng',
            'end_date.after' => 'Ngày kết thúc phải có giá trị sau ngày bắt đầu mã giảm giá.',
            'money.required' => 'Chưa nhập trị giá của mã giảm giá.',
            'money.min' => 'Trị giá mã giảm giá phải chứa ít nhất 4 chữ số.'
		];
	}
}
