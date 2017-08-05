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
			return View::share('loginInfor', Auth::user());
		}
	}
}
