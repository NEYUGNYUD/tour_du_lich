<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCustomer;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Employee;
use Auth;

class CustomerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	public function getLoginUser() {
		return view('pages.login');
	}
	public function postLoginUser(LoginRequest $request) {
		$infor = array(
			'email' => $request->email,
			'password' => $request->password,
			'locked' => NULL,
			'level' => 2
		);
		if(Auth::attempt($infor)) {
			return redirect()->route('index');
		} else {
			return redirect('user/login')->with('noti', 'Thông tin đăng nhập không đúng.');
		}
	}

	public function getRegistryUser() {
		return view('pages.registry');
	}
	public function postRegistryUser(AddCustomer $request) {
		$customer = new Employee();
		$customer->employee_name = trim($request->name);
		$customer->dob = $request->dob;
		// var_dump($customer->dob); die();
		$customer->level = 2;
		$customer->gender = $request->gender;
		$customer->email = trim($request->email);
		$customer->password = bcrypt($request->password);
		$customer->address = trim($request->address);
		$customer->created_at = date('Y-m-d H:i:s');
		$customer->updated_at = date('Y-m-d H:i:s');
		$customer->save();
		return redirect()->route('getLoginUser')->with('noti', 'Bạn đã đăng ký thành công tài khoản');
	}

	public function getLogoutUser() {
		Auth::logout();
		return redirect()->route('index');
	}
}
