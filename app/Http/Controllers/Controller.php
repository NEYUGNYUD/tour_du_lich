<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Place;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	public function __construct() {
		$placesOfMenu = DB::table('tbl_places')->select('place_id', 'place_name', 'image', 'parent_id', 'description')->get();
		View::share('placesOfMenu', $placesOfMenu);
		if(Auth::check()) {
			View::share('adminInfor', Auth::user());
		}
		$tourCouponsNewNumber = DB::table('tbl_tour_coupons')->where('status', '=', NULL)->count();
		View::share('tourCouponsNewNumber', $tourCouponsNewNumber);
	}
}
