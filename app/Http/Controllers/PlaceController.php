<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Place;
use App\Http\Requests\EditPlace;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddPlace;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PlaceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $places = Place::all();
		$places = DB::table('tbl_places')->get();
		return view('admin.place.list', compact('places'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// $places = new Place();
        //lấy danh sách toàn bộ tên, và parent_id của bảng tbl_places
        // $places = $places->getName();
		$places = DB::table('tbl_places')->select('place_id', 'place_name', 'parent_id')->orderBy('place_name', 'asc')->get();
		return view('admin.place.add', compact('places'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AddPlace $request)
	{
		$place = new Place();
        //hàm mb_convert_case() để chuyển đổi tiếng việt sang các dạng khác nhau phụ thuộc vào tham số
        //chuyển sang chuỗi được viết hoa mỗi ký tự đầu tiên của mỗi từ
        $place->place_name = mb_convert_case(trim($request->name), MB_CASE_TITLE, 'UTF-8');
        $place->slug_name = createSlug($place->place_name);
        $place->image = $request->image;
        $place->description = $request->description;
        $place->parent_id = $request->parentplace;
        $place->updated_at = date('Y-m-d H:i:s');
        $place->created_at = date('Y-m-d H:i:s');
        $place->save();
        return redirect('admin/place/add')->with('noti', "Bạn đã thêm địa điểm thành công.");
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
		$place = Place::find($id);
		// $placeParent = Place::all();
		$placeParent = $places = DB::table('tbl_places')->orderBy('place_name', 'asc')->get();
		return view('admin.place.edit', compact('place', 'placeParent'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(EditPlace $request)
	{
		$place = Place::find($request->id);
        $place->place_name = mb_convert_case(trim($request->name), MB_CASE_TITLE, 'UTF-8');
        $place->slug_name = createSlug($place->place_name);
        $place->image = $request->image;
        $place->description = $request->description;
        $place->parent_id = $request->parentplace;
        $place->updated_at = date('Y-m-d H:i:s');
        $place->save();
        return redirect('admin/place/edit/'.$request->id)->with('noti', "Bạn đã chỉnh sửa địa điểm điểm thành công.");
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
