<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddTour;
use App\Http\Requests\EditTour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddTourImage;
use App\TourImage;
use App\Tour;
use App\Discount;
use App\Vehicle;
use App\Place;

class TourController extends Controller {


	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$tours = Tour::all();
		// $discounts = DB::table('tbl_discount_codes')->select('discount_code_id', 'discount_code_name')->get();
		$discounts = DB::table('tbl_discount_codes')->select('discount_code_id', 'discount_code_name')->get();
		$vehicles = DB::table('tbl_vehicles')->select('vehicle_id', 'vehicle_name')->get();
		$places = DB::table('tbl_places')->select('place_id', 'place_name')->get();
		$services = DB::table('tbl_services')->select('service_id', 'service_name')->get();
		return view('admin.tour.list', compact('tours', 'discounts', 'vehicles', 'places', 'services'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		$discounts = DB::table('tbl_discount_codes')->select('discount_code_id', 'discount_code_name', 'money')->where('discount_code_id', '<>', 13)->get();
		$vehicles = DB::table('tbl_vehicles')->select('vehicle_id', 'vehicle_name')->get();
		$places = DB::table('tbl_places')->select('place_id', 'place_name', 'parent_id')->get();
		$services = DB::table('tbl_services')->select('service_id', 'service_name')->get();
		return view('admin.tour.add', compact('discounts', 'vehicles', 'places', 'services'));
	}

	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store(AddTour $request)
	{
		$tour = new Tour();
		$image = new TourImage();
		$tour->tour_name = $request->name;
		$tour->base_price = $request->basePrice;
		$tour->sale_price = $request->salePrice;
		$tour->discount_code_id = $request->discountCode;
		$tour->begin_time = $request->beginTime;
		$tour->duration = $request->duration;
		$tour->max_customer_number = $request->numberCustomer;
		$tour->start_place = mb_convert_case(trim($request->startPlace), MB_CASE_TITLE, 'UTF-8');
		$vehilceList = $request->vehicle;
		$tour->vehicle = implode('-', $vehilceList);
		$placeJourney= $request->journey;
		$tour->journey = implode('-', $placeJourney);
		$serviceList= $request->service;
		$tour->services = implode('-', $serviceList);
		// var_dump($tour->journey); die();
		$tour->schedule = $request->schedule;
		$tour->note = $request->note;
		$tour->overview = $request->overview;
		$tour->created_at = date('Y-m-d H:i:s');
		$tour->updated_at = date('Y-m-d H:i:s');
		$tour->save();
		$image->image = $request->image;
		$tourId = $tour->tour_id;
		$image->tour_id = $tourId;
		$image->created_at = date('Y-m-d H:i:s');
		$image->updated_at = date('Y-m-d H:i:s');
		$image->save();
		return redirect()->route('postAddTour')->with('noti', "Bạn đã thêm thành công tour du lịch");
	}

	/**
	* Display the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function show($id)
	{
		//
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  int  $id
	* @return Response
	*/
	public function edit($id)
	{
		$tour = Tour::find($id);
		$places = DB::table('tbl_places')->select('place_id', 'place_name', 'parent_id')->get();
		$discounts = DB::table('tbl_discount_codes')->select('discount_code_id', 'discount_code_name', 'money')->get();
		$vehicles = DB::table('tbl_vehicles')->select('vehicle_id', 'vehicle_name')->get();
		$services = DB::table('tbl_services')->select('service_id', 'service_name')->get();
		return view('admin.tour.edit', compact('tour','places', 'discounts', 'vehicles', 'services'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function update(EditTour $request)
	{
		$tour = Tour::find($request->id);
		$tour->tour_name = $request->name;
		$tour->base_price = $request->basePrice;
		$tour->sale_price = $request->salePrice;
		$tour->discount_code_id = $request->discountCode;
		$tour->begin_time = $request->beginTime;
		$tour->duration = $request->duration;
		$tour->max_customer_number = $request->numberCustomer;
		$tour->start_place = mb_convert_case(trim($request->startPlace), MB_CASE_TITLE, 'UTF-8');
		// var_dump($tour->journey); die();
		$tour->schedule = $request->schedule;
		$tour->note = $request->note;
		$tour->overview = $request->overview;
		$tour->updated_at = date('Y-m-d H:i:s');
		if($request->changeJourney == 'on') {
			$placeJourney= $request->journey;
			$tour->journey = implode('-', $placeJourney);
		}
		if($request->changeVehicle == 'on') {
			$vehicleList = $request->vehicle;
			$tour->vehicle = implode('-', $vehicleList);
		}
		$tour->save();
		return redirect()->route('getEditTour', ['id' => $request->id])->with('noti', "Bạn đã chỉnh sửa thành công tour du lịch");
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function destroy($id)
	{
		$tour = Tour::find($id);
		$tour->locked = 1;
		$tour->save();
		return redirect()->back();
	}

	public function getTourImage($id) {
		$tour = Tour::find($id);
		$tourImages = DB::table('tbl_tour_images')->select('image_id', 'image', 'created_at', 'updated_at')->where('tour_id', '=', $id)->get();
		return view('admin.tour_image.list', compact('tour', 'tourImages'));
	}

	public function postAddTourImage(AddTourImage $request) {
		$imageList = $request->imageTour;
		$imageTour = new TourImage();
		foreach($imageList as $img) {
			$imageTour->image = $img;
			$imageTour->tour_id = $request->idTour;
			$imageTour->created_at = date('Y-m-d H:i:s');
			$imageTour->updated_at = date('Y-m-d H:i:s');
			$imageTour->save();
		}
		return redirect()->route('listTourImage', ['id' => $request->idTour])->with('noti', 'Thêm thành công hình ảnh.');
	}

	public function deleteImage($imageId, $tourId) {
		$image = TourImage::find($imageId);
		$image->delete();
		return redirect()->route('listTourImage', ['id' => $tourId]);
	}


}
