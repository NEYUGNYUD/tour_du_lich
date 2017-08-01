<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Vehicle;
use App\Http\Requests\AddVehicle;
use App\Http\Requests\EditVehicle;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VehicleController extends Controller {

	/**
	* Display a listing of the resource.
	*
	* @return Response
	*/
	public function index()
	{
		$vehicles = Vehicle::all();
		return view('admin.vehicle.list', compact('vehicles'));
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return Response
	*/
	public function create()
	{
		return view('admin.vehicle.add');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @return Response
	*/
	public function store(AddVehicle $request)
	{
		$vehicle = new Vehicle();
		$vehicle->vehicle_name = trim($request->name);
		$vehicle->class_name = $request->class_name;
		$vehicle->created_at = date('Y-m-d H:i:s');
		$vehicle->updated_at = date('Y-m-d H:i:s');
		$vehicle->save();
		return redirect('admin/vehicle/add')->with('noti', "Bạn đã thêm thành công phương tiện mới.");
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
		$vehicle = Vehicle::find($id);
		return view('admin.vehicle.edit', compact('vehicle'));
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  int  $id
	* @return Response
	*/
	public function update(EditVehicle $request)
	{
		$vehicle = Vehicle::find($request->id);
	        $vehicle->vehicle_name = $request->name;
	        $vehicle->class_name = $request->class_name;
	        $vehicle->updated_at = date('Y-m-d H:i:s');
	        $vehicle->save();
	        return redirect('admin/vehicle/edit/'.$vehicle->vehicle_id)->with('noti', 'Bạn đã chỉnh sửa thông tin phương tiện thành công.');
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
