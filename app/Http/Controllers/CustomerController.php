<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCustomer;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\EditCustomer;
use Illuminate\Http\Request;
use App\Employee;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller {

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditCustomer $request)
	{
        //hàm mb_strtolower() chuyển toàn bộ tiếng việt sang chữ thường.
        $customer = Employee::find($request->id);
        $customer->employee_name = mb_strtolower(trim($request->fullname), 'UTF-8');
        $tempDob = trim($request->dob);
        //chuyển dổi định dạng ngày sinh
        $customer->dob = date('Y-m-d', strtotime($tempDob));
        $customer->gender = $request->gender;
        $customer->phone_number = trim($request->phone);
        $customer->address = mb_strtolower(trim($request->address), 'UTF-8');
        $customer->updated_at = date('Y-m-d H:i:s');
        if ($request->changePassword == 'on') {
            $customer->password = bcrypt($request->password);
        }
        $customer->save();
        return redirect()->back()->with('noti', "Bạn đã sửa thành công thông tin nhân viên mới.");
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

    public function getEditAccountCustomer($customerId) {
        $customerInfor = Employee::find($customerId);
        return view('pages.editaccount', compact('customerInfor'));
    }
}
