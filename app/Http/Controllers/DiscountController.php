<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Discount;
use App\Http\Requests\AddDiscount;
use App\Http\Requests\EditDiscount;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DiscountController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$discounts = Discount::all();
		return view('admin.discount.list', compact('discounts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.discount.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AddDiscount $request)
	{
		$discountCode = new Discount();
        $discountCode->discount_code_name = trim($request->name);
        //biến lấy thời gian bắt đầu thưc hiện mã giảm giá
        $time = $request->start_date." ".$request->start_time;
        $time = date('Y-m-d H:i:s', strtotime($time));
        $discountCode->start_date = $time;
        //biến lấy thời gian kết thúc thưc hiện mã giảm giá
        $time = $request->end_date." ".$request->end_time;
        $time = date('Y-m-d H:i:s', strtotime($time));
        $discountCode->end_date = $time;
        $discountCode->money = $request->money;
        $discountCode->description = $request->description;
        $discountCode->created_at = date('Y-m-d h:i:s');
        $discountCode->updated_at = date('Y-m-d h:i:s');
        $discountCode->save();
        return redirect('admin/discount/add')->with('noti','Bạn đã thêm thành công mã giảm giá.');
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
		$discountcode = Discount::find($id);
        return view('admin.discount.edit',['discountcode' => $discountcode]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditDiscount $request)
	{
		$discountCode = Discount::find($request->id);
        $discountCode->discount_code_name = trim($request->name);
        //biến lấy thời gian bắt đầu thưc hiện mã giảm giá
        $time = $request->start_date." ".$request->start_time;
        $time = date('Y-m-d H:i:s', strtotime($time));
        $discountCode->start_date = $time;
        //biến lấy thời gian kết thúc thưc hiện mã giảm giá
        $time = $request->end_date." ".$request->end_time;
        $time = date('Y-m-d H:i:s', strtotime($time));
        $discountCode->end_date = $time;
        $discountCode->money = $request->money;
        $discountCode->description = $request->description;
        $discountCode->created_at = date('Y-m-d h:i:s');
        $discountCode->updated_at = date('Y-m-d h:i:s');
        $discountCode->save();
        return redirect('admin/discount/edit/'.$request->id)->with('noti','Bạn đã chỉnh sửa thành công mã giảm giá.');
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

}
