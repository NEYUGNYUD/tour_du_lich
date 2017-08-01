<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Tour;
use App\Place;
use App\Customer;
use App\Http\Requests\AddCustomer;
class PageController extends Controller {

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	function __construct() {
		$places = DB::table('tbl_places')->orderBy('place_name', 'asc')->get();
		View::share('places', $places);

		$placesOfMenu = DB::table('tbl_places')->select('place_id', 'place_name', 'image', 'parent_id', 'description')->get();
		View::share('placesOfMenu', $placesOfMenu);

		$startPlaces = DB::table('tbl_tours')->select('start_place')->distinct()->orderBy('start_place', 'asc')->get();
		View::share('startPlaces', $startPlaces);

		$tourServices = DB::table('tbl_services')->select('service_id', 'service_name')->distinct('service_name')->get();
		View::share('tourServices', $tourServices);

		$startTimeTours = DB::table('tbl_tours')->select('begin_time')->distinct()->orderBy('begin_time', 'asc')->get();
		View::share('startTimeTours', $startTimeTours);

		$tourImages = DB::table('tbl_tour_images')->get();
		View::share('tourImages', $tourImages);

		$tourVehicles = DB::table('tbl_vehicles')->select('vehicle_id', 'class_name')->get();
		View::share('tourVehicles', $tourVehicles);

		// if(Auth::guard('customer')->checked()){
		// 	View::share('customer', Auth::guard('customer'));
		// }
	}

	public function index()
	{
		$listTours = DB::table('tbl_tours')->where('locked', '=', NULL)->paginate(8);
		return view('pages.index', compact('listTours'));

	}

	public function getLoginUser() {
		return view('pages.login');
	}

	public function postLoginUser(LoginRequest $request) {
		$customerInfor = array(
			'email' => $request->email,
			'password' => $request->password
		);

		if(Auth::attempt($customerInfor)) {
			return redirect()->route('index');
		}
		return view('pages.login')->with('noti', 'Thông tin đăng nhập không chính xác.');
	}
	public function getRegistryUser() {
		return view('pages.registry');
	}

	public function postRegistryUser(AddCustomer $request) {
		$customer = new Customer();
		$customer->customer_name = trim($request->name);
		$customer->dob = $request->dob;
		// var_dump($customer->dob); die();
		$customer->gender = $request->gender;
		$customer->email = trim($request->email);
		$customer->password = bcrypt($request->password);
		$customer->passport = trim($request->passport);
		$customer->address = trim($request->address);
		$customer->created_at = date('Y-m-d H:i:s');
		$customer->updated_at = date('Y-m-d H:i:s');
		$customer->save();
		return redirect()->route('getLoginUser')->with('noti', 'Bạn đã đăng ký thành công tài khoản');
	}

	public function getDetailTour($idTour) {
		$tour = Tour::find($idTour);
		$journeyTour = $tour->journey;
		$placeList = explode('-', $journeyTour);
		$relativeTours = DB::table('tbl_tours')
			->select('tour_id', 'tour_name', 'base_price', 'sale_price')
			->where('locked', '=', NULL)
			->take(3)->get();
		// dd($relativeTours);
		return view('pages.detailTour', compact('tour', 'relativeTours'));
	}

	public function postSearchTour(Request $request) {
		$destinationPlace = $request->destinationPlace;
		// dd($destinationPlace);
		$startPlace = $request->startPlace;
		$startTimeTour = $request->startTimeTour;
		$resultTour = DB::table('tbl_tours')
			->where('journey', 'like', "%$destinationPlace%")
			->where('start_place', '=', $startPlace)
			->where('begin_time', '=', $startTimeTour)
			->where('locked', '=', NULL)
			->paginate(10);
		return view('pages.listtour', compact('resultTour'));
	}

	public function getContact() {
		return view('pages.contact');
	}

	public function getListTour($idPlace) {
		$resultTour = DB::table('tbl_tours')
			->where('journey', 'like', "%$idPlace%")
			->where('locked', '=', NULL)
			->paginate(8);
		return view('pages.listtour', compact('resultTour'));
	}

	public function getBookTour($tourId) {
		$tour = Tour::find($tourId);
		$relativeTours = DB::table('tbl_tours')
			->select('tour_id', 'tour_name', 'base_price', 'sale_price')
			->where('locked', '=', NULL)
			->take(3)->get();
		return view('pages.booktour', compact('tour', 'relativeTours'));
	}
}
