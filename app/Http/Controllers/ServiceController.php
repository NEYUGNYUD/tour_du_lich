<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditService;
use App\Http\Requests\AddService;


use Illuminate\Http\Request;

class ServiceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$services = Service::all();
		return view('admin.service.list', compact('services'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.service.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AddService $request)
	{
		$service = new Service();
        $service->service_name = trim($request->name);
        $service->detail = $request->detail;
        $service->created_at = date('Y-m-d H:i:s');
        $service->updated_at = date('Y-m-d H:i:s');
        $service->save();
        return redirect('admin/service/add')->with('noti', "Bạn đã thêm dịch vụ thành công.");
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
		$service = Service::find($id);
		return view('admin.service.edit', compact('service'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditService $request)
	{
		$service = Service::find($request->id);
        $service->service_name = trim($request->name);
        $service->detail = $request->detail;
        $service->updated_at = date('Y-m-d H:i:s');
        $service->save();
        return redirect('admin/service/edit/'.$request->id)->with('noti', "Bạn đã chỉnh sửa thành công thông tin dịch vụ");
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
