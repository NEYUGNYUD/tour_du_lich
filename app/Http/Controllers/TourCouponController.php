<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TourCoupon;
use App\History;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EditTourCoupon;
use Illuminate\Http\Request;
use function redirect;

class TourCouponController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $newTourCoupons = DB::table('tbl_tour_coupons')
            ->join('tbl_tours', 'tbl_tour_coupons.tour_id', '=', 'tbl_tours.tour_id')
            ->join('tbl_employees', 'tbl_tour_coupons.employee_id', '=', 'tbl_employees.employee_id')
            ->select('tbl_tour_coupons.*', 'tbl_tours.tour_name', 'tbl_tours.begin_time', 'tbl_employees.email')
            ->get();
        return view('admin.tour_coupon.judge', compact('newTourCoupons'));

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.tour_coupon.add');
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
	public function edit($tourCouponId)
	{
	    $tourList = DB::table('tbl_tours')->select('tour_id', 'tour_name')->get();
	    $tourCoupon = TourCoupon::find($tourCouponId);
		$tourCoupon = DB::table('tbl_tour_coupons')
            ->join('tbl_tours', 'tbl_tour_coupons.tour_id', '=', 'tbl_tours.tour_id')
            ->join('tbl_employees', 'tbl_tour_coupons.employee_id', '=', 'tbl_employees.employee_id')
            ->select('tbl_tour_coupons.*', 'tbl_tours.tour_name', 'tbl_tours.tour_id', 'tbl_tours.begin_time', 'tbl_employees.email')->where('tbl_tour_coupons.tour_coupon_id', '=', $tourCoupon->tour_coupon_id)
            ->get();
//		var_dump($tourCoupon[0]->tour_coupon_id); die();
		return view('admin.tour_coupon.edit', compact('tourCoupon', 'tourList'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditTourCoupon $request)
	{   $couponHistory = new History();
        $updatedTourCoupon = new TourCoupon();
        $updatedTourCoupon = TourCoupon::find($request->id);
        $updatedTourCoupon->status = $request->status;
        $updatedTourCoupon->employee_id = $request->customerId;
        $updatedTourCoupon->children_number = $request->child;
        $updatedTourCoupon->adult_number = $request->adult;
        $updatedTourCoupon->updated_at = date('Y-m-d H:i:s');
        //lưu bảng lịch sử
        $couponHistory->action = $request->note;
        $couponHistory->tour_coupon_id = $request->id;
        $couponHistory->employee_id = $request->employeeId;
        $couponHistory->updated_at = date('Y-m-d H:i:s');
        $updatedTourCoupon->save();
        $couponHistory->save();
        return redirect()->route('getEditTourCoupon', ['tourCouponId' => $request->id])->with('noti', 'Bạn đã chỉnh sửa phiếu tour thành công');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($tourCouponId)
	{
		$tourCoupon = TourCoupon::find($tourCouponId);
		$tourCoupon->locked = 1;
		$tourCoupon->save();
		return redirect()->back();
	}
    function listNewTourCoupon() {

        $newTourCoupons = DB::table('tbl_tour_coupons')
            ->join('tbl_tours', 'tbl_tour_coupons.tour_id', '=', 'tbl_tours.tour_id')
            ->join('tbl_employees', 'tbl_tour_coupons.employee_id', '=', 'tbl_employees.employee_id')
            ->select('tbl_tour_coupons.*', 'tbl_tours.tour_name', 'tbl_tours.begin_time', 'tbl_employees.email')
            ->where('tbl_tour_coupons.status', '=', NULL)
            ->where('tbl_tour_coupons.locked', '=', NULL)
            ->get();
//        var_dump($newTourCoupons); die();
        return view('admin.tour_coupon.judge', compact('newTourCoupons'));
    }

}
