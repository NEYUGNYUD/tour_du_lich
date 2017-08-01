<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditTour extends Request {

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
		if($this->changeVehicle == 'on') {
			if($this->changeJourney == 'on') {
				return [
					'name' => 'required|min:3|max:200|unique:tbl_tours,tour_name',
					'basePrice' => 'required|numeric',
					'salePrice' => 'required|numeric',
					'beginTime' => 'required|min:3',
					'duration' => 'required|min:5',
					'numberCustomer' => 'required|integer',
					'startPlace' => 'required|min:5',
					'vehicle' => 'required',
					'journey' => 'required',
					'schedule' => 'required|min:10',
					'note' => 'min:10',
					'overview' => 'required|min:10'
				];
			} else {
				return [
					'name' => 'required|min:3|max:200|unique:tbl_tours,tour_name',
					'basePrice' => 'required|numeric',
					'salePrice' => 'required|numeric',
					'beginTime' => 'required|min:3',
					'duration' => 'required|min:5',
					'numberCustomer' => 'required|integer',
					'startPlace' => 'required|min:5',
					'vehicle' => 'required',
					'schedule' => 'required|min:10',
					'note' => 'min:10',
					'overview' => 'required|min:10'
				];
			}
		} else {
			if($this->changeJourney == 'on') {
				return [
					'name' => 'required|min:3|max:200|unique:tbl_tours,tour_name',
					'basePrice' => 'required|numeric',
					'salePrice' => 'required|numeric',
					'beginTime' => 'required|min:3',
					'duration' => 'required|min:5',
					'numberCustomer' => 'required|integer',
					'startPlace' => 'required|min:5',
					'journey' => 'required',
					'schedule' => 'required|min:10',
					'note' => 'min:10',
					'overview' => 'required|min:10'
				];
			} else {
				return [
					'name' => 'required|min:3|max:200|unique:tbl_tours,tour_name',
					'basePrice' => 'required|numeric',
					'salePrice' => 'required|numeric',
					'beginTime' => 'required|min:3',
					'duration' => 'required|min:5',
					'numberCustomer' => 'required|integer',
					'startPlace' => 'required|min:5',
					'schedule' => 'required|min:10',
					'note' => 'min:10',
					'overview' => 'required|min:10'
				];
			}
		}

	}

	public function messages() {
		if($this->changeVehicle == 'on') {
			if($this->changeJourney == 'on') {
				return [
					'name.required' => 'Chưa nhập tên tour du lịch.',
					'name.min' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.max' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.unique' => 'Tên tour du lịch bị trùng.',
					'basePrice.required' => 'Chưa nhập giá tour cơ bản',
					'basePrice.numeric' => 'Giá tour cơ bản không đúng định dạng.',
					'salePrice.numeric' => 'Giá tour khuyến mại không đúng định dạng.',
					'salePrice.required' => 'Chưa nhập giá khuyến mại tour.',
					'beginTime.required' => 'Chưa nhập thời gian bắt đầu tour.',
					'beginTime.min' => 'Thời gian bắt đầu tour có độ dài tối thiểu 3 ký tự.',
					'duration.required' => 'Chưa nhập khoảng thời gian tour diễn ra trong bao lâu.',
					'duration.min' => 'Thời gian tour diễn ra phải có độ dài tối thiểu 5 ký tự.',
					'numberCustomer.required' => 'Chưa nhập số lượng khách du lịch tối đa của tour.',
					'numberCustomer.integer' => 'Số lượng khách hàng tối đa phải là số nguyên.',
					'startPlace.required' => 'Chưa nhập địa điểm đón khách',
					'startPlace.min' => 'Địa điểm đón khách phải có độ dài tối thiểu là 5 ký tự.',
					'vehicle.required' => 'Chưa chọn phương tiện đi kèm tour.',
					'journey.required' => 'Chưa nhập hành trình tour du lịch.',
					'schedule.required' => 'Chưa nhập lịch trình chi tiết của tour du lịch.',
					'schedule.min' => 'Lịch trình chi tiết tour có độ dài tối thiểu 10 ký tự.',
					'note.min' => 'Lưu ý tour du lịch có độ dài tối thiểu 10 ký tự.',
					'overview.required' => 'Chưa nhập tổng quát tour du lịch.',
					'overview.min' => 'Tổng quát tour du lịch có độ dài tối thiểu 10 ký tự.'
				];
			} else {
				return [
					'name.required' => 'Chưa nhập tên tour du lịch.',
					'name.min' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.max' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.unique' => 'Tên tour du lịch bị trùng.',
					'basePrice.required' => 'Chưa nhập giá tour cơ bản',
					'basePrice.numeric' => 'Giá tour cơ bản không đúng định dạng.',
					'salePrice.numeric' => 'Giá tour khuyến mại không đúng định dạng.',
					'salePrice.required' => 'Chưa nhập giá khuyến mại tour.',
					'beginTime.required' => 'Chưa nhập thời gian bắt đầu tour.',
					'beginTime.min' => 'Thời gian bắt đầu tour có độ dài tối thiểu 3 ký tự.',
					'duration.required' => 'Chưa nhập khoảng thời gian tour diễn ra trong bao lâu.',
					'duration.min' => 'Thời gian tour diễn ra phải có độ dài tối thiểu 5 ký tự.',
					'numberCustomer.required' => 'Chưa nhập số lượng khách du lịch tối đa của tour.',
					'numberCustomer.integer' => 'Số lượng khách hàng tối đa phải là số nguyên.',
					'startPlace.required' => 'Chưa nhập địa điểm đón khách',
					'startPlace.min' => 'Địa điểm đón khách phải có độ dài tối thiểu là 5 ký tự.',
					'vehicle.required' => 'Chưa chọn phương tiện đi kèm tour.',
					'schedule.required' => 'Chưa nhập lịch trình chi tiết của tour du lịch.',
					'schedule.min' => 'Lịch trình chi tiết tour có độ dài tối thiểu 10 ký tự.',
					'note.min' => 'Lưu ý tour du lịch có độ dài tối thiểu 10 ký tự.',
					'overview.required' => 'Chưa nhập tổng quát tour du lịch.',
					'overview.min' => 'Tổng quát tour du lịch có độ dài tối thiểu 10 ký tự.'
				];
			}
		} else {
			if($this->changeJourney == 'on') {
				return [
					'name.required' => 'Chưa nhập tên tour du lịch.',
					'name.min' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.max' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.unique' => 'Tên tour du lịch bị trùng.',
					'basePrice.required' => 'Chưa nhập giá tour cơ bản',
					'basePrice.numeric' => 'Giá tour cơ bản không đúng định dạng.',
					'salePrice.numeric' => 'Giá tour khuyến mại không đúng định dạng.',
					'salePrice.required' => 'Chưa nhập giá khuyến mại tour.',
					'beginTime.required' => 'Chưa nhập thời gian bắt đầu tour.',
					'beginTime.min' => 'Thời gian bắt đầu tour có độ dài tối thiểu 3 ký tự.',
					'duration.required' => 'Chưa nhập khoảng thời gian tour diễn ra trong bao lâu.',
					'duration.min' => 'Thời gian tour diễn ra phải có độ dài tối thiểu 5 ký tự.',
					'numberCustomer.required' => 'Chưa nhập số lượng khách du lịch tối đa của tour.',
					'numberCustomer.integer' => 'Số lượng khách hàng tối đa phải là số nguyên.',
					'startPlace.required' => 'Chưa nhập địa điểm đón khách',
					'startPlace.min' => 'Địa điểm đón khách phải có độ dài tối thiểu là 5 ký tự.',
					'journey.required' => 'Chưa nhập hành trình tour du lịch.',
					'schedule.required' => 'Chưa nhập lịch trình chi tiết của tour du lịch.',
					'schedule.min' => 'Lịch trình chi tiết tour có độ dài tối thiểu 10 ký tự.',
					'note.min' => 'Lưu ý tour du lịch có độ dài tối thiểu 10 ký tự.',
					'overview.required' => 'Chưa nhập tổng quát tour du lịch.',
					'overview.min' => 'Tổng quát tour du lịch có độ dài tối thiểu 10 ký tự.'
				];
			} else {
				return [
					'name.required' => 'Chưa nhập tên tour du lịch.',
					'name.min' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.max' => 'Tên tour du lịch có độ dài từ 3 đến 200 ký tự',
					'name.unique' => 'Tên tour du lịch bị trùng.',
					'basePrice.required' => 'Chưa nhập giá tour cơ bản',
					'basePrice.numeric' => 'Giá tour cơ bản không đúng định dạng.',
					'salePrice.numeric' => 'Giá tour khuyến mại không đúng định dạng.',
					'salePrice.required' => 'Chưa nhập giá khuyến mại tour.',
					'beginTime.required' => 'Chưa nhập thời gian bắt đầu tour.',
					'beginTime.min' => 'Thời gian bắt đầu tour có độ dài tối thiểu 3 ký tự.',
					'duration.required' => 'Chưa nhập khoảng thời gian tour diễn ra trong bao lâu.',
					'duration.min' => 'Thời gian tour diễn ra phải có độ dài tối thiểu 5 ký tự.',
					'numberCustomer.required' => 'Chưa nhập số lượng khách du lịch tối đa của tour.',
					'numberCustomer.integer' => 'Số lượng khách hàng tối đa phải là số nguyên.',
					'startPlace.required' => 'Chưa nhập địa điểm đón khách',
					'startPlace.min' => 'Địa điểm đón khách phải có độ dài tối thiểu là 5 ký tự.',
					'schedule.required' => 'Chưa nhập lịch trình chi tiết của tour du lịch.',
					'schedule.min' => 'Lịch trình chi tiết tour có độ dài tối thiểu 10 ký tự.',
					'note.min' => 'Lưu ý tour du lịch có độ dài tối thiểu 10 ký tự.',
					'overview.required' => 'Chưa nhập tổng quát tour du lịch.',
					'overview.min' => 'Tổng quát tour du lịch có độ dài tối thiểu 10 ký tự.'
				];
			}
		}
	}
}
