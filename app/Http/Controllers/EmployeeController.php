<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddEmployee;
use App\Http\Requests\EditEmployee;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller {

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$employees = Employee::all();
		return view('admin.employee.list', compact('employees'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		return view('admin.employee.add');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store(AddEmployee $request)
	{
		$employee = new Employee();
		$employee->email = mb_strtolower(trim($request->email), 'UTF-8');
		$employee->password = bcrypt(trim($request->password));
		$employee->level = mb_strtolower($request->level, 'UTF-8');
		$tempDob = $request->dob;
		$employee->dob = date('y-m-d', strtotime($tempDob));
		$employee->gender = $request->gender;
		$employee->phone_number = trim($request->phone);
		$employee->address = mb_strtolower(trim($request->address), 'UTF-8');
		$employee->employee_name = mb_strtolower(trim($request->fullname), 'UTF-8');
		$employee->avatar = $request->avatar;
		$employee->created_at = date('Y-m-d H:i:s');
		$employee->updated_at = date('Y-m-d H:i:s');
		$employee->save();
		return redirect('admin/employee/add')->with('noti', "Bạn đã thêm thành công nhân viên mới.");
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
		// echo "edit"; die();
		$employee = Employee::find($id);
		return view('admin.employee.edit', compact('employee'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function update(EditEmployee $request)
	{
		//hàm mb_strtolower() chuyển toàn bộ tiếng việt sang chữ thường.
		$employee = Employee::find($request->id);
		$employee->employee_name = mb_strtolower(trim($request->fullname), 'UTF-8');
		$employee->level = mb_strtolower($request->level, 'UTF-8');
		$tempDob = trim($request->dob);
		//chuyển dổi định dạng ngày sinh
		$employee->dob = date('Y-m-d', strtotime($tempDob));
		$employee->gender = $request->gender;
		$employee->phone_number = trim($request->phone);
		$employee->address = mb_strtolower(trim($request->address), 'UTF-8');
		$employee->avatar = $request->avatar;
		$employee->updated_at = date('Y-m-d H:i:s');
		//var_dump($employee->updated_at); die();
		if ($request->changePassword == 'on') {
			$employee->password = bcrypt($request->password);
		}
		$employee->save();
		return redirect('admin/employee/edit/'.$request->id)->with('noti', "Bạn đã sửa thành công thông tin nhân viên mới.");
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

	function getLogin() {
		return view('admin.login');
	}

	function postLogin(LoginRequest $request) {
		$infor = array(
			'email' => $request->email,
			'password' => $request->password,
			'locked' => NULL
		);
		if(Auth::attempt($infor)) {
			if(Auth::user()->level == 1) {
				return redirect()->intended('admin/employee/list');
			} else {
				return redirect()->intended('admin/place/list');
			}
		} else {
			return redirect('admin/login')->with('noti', 'Thông tin đăng nhập không đúng.');
		}
	}

	function logoutAdmin() {
		Auth::logout();
		return redirect('admin/login');
	}
}
