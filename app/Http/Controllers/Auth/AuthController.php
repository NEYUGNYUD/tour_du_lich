<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests\LoginRequest;
class AuthController extends Controller {

	use AuthenticatesAndRegistersUsers;

	// public function __construct(Guard $auth, Registrar $registrar)
	public function __construct() {
		// $this->auth = $auth;
		// $this->registrar = $registrar;
		// // $this->middleware('guest', ['except' => 'getLogout']);
		// // $this->middleware('guest');
	}

	public function getLogin() {

	}
	public function postLogin(LoginRequest $request){
	}
}
