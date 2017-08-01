<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\View;
use App\Place;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;
	public function __construct() {
		if(Auth::check()) {
			return View::share('loginInfor', Auth::user());
		}
	}
}
