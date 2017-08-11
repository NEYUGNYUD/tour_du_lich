<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Tour;
use App\Place;
use App\Customer;
use App\TourCoupon;
use App\Http\Requests\BookTour;
use App\Http\Requests\ConfirmBookTour;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    function __construct()
    {
        $places = DB::table('tbl_places')->orderBy('place_name', 'asc')->get();
        View::share('places', $places);

        $placesOfMenu = DB::table('tbl_places')->select('place_id', 'place_name', 'image', 'parent_id', 'description')->get();
        View::share('placesOfMenu', $placesOfMenu);

        $startPlaces = DB::table('tbl_tours')->select('start_place')->distinct()->orderBy('start_place', 'asc')->get();
        View::share('startPlaces', $startPlaces);

        $tourServices = DB::table('tbl_services')->select('service_id', 'service_name')->distinct('service_name')->get();
        View::share('tourServices', $tourServices);

        $startTimeTours = DB::table('tbl_tours')->select('begin_time')->distinct()->orderBy('begin_time', 'asc')->get();
        View::share('startTimeTours', $startTimeTours);

        $tourImages = DB::table('tbl_tour_images')->get();
        View::share('tourImages', $tourImages);

        $tourVehicles = DB::table('tbl_vehicles')->select('vehicle_id', 'class_name')->get();
        View::share('tourVehicles', $tourVehicles);

        $listTours = DB::table('tbl_tours')->where('locked', '=', NULL)->paginate(5);
        View::share('listTours', $listTours);
        if (Auth::check()) {
            if (Auth::user()->level == 2)
                View::share('customer', Auth::user());
        }

    }

    public function index()
    {
        $topTour = DB::table('tbl_tours')->select('tour_id', 'tour_name', 'journey', 'base_price', 'sale_price')->orderBy('created_at', 'desc')->take(3)->get();
        return view('pages.index', compact('topTour'));
    }


    public function getDetailTour($idTour)
    {
        $tour = Tour::find($idTour);
        $journeyTour = $tour->journey;
        $placeList = explode('-', $journeyTour);
        $relativeTours = DB::table('tbl_tours')->select('tour_id', 'tour_name', 'base_price', 'sale_price')->where('locked', '=', NULL)->take(3)->get();
        // dd($relativeTours);
        return view('pages.detailTour', compact('tour', 'relativeTours'));
    }

    public function postSearchTour(Request $request)
    {
        $destinationPlace = $request->destinationPlace;
        // dd($destinationPlace);
        $startPlace = $request->startPlace;
        $startTimeTour = $request->startTimeTour;
        $resultTour = DB::table('tbl_tours')->where('journey', 'like', "%$destinationPlace%")->where('start_place', '=', $startPlace)->where('begin_time', '=', $startTimeTour)->where('locked', '=', NULL)->paginate(5);
        return view('pages.listtour', compact('resultTour'));
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getListTour($idPlace)
    {
        $resultTour = DB::table('tbl_tours')->where('journey', 'like', "%$idPlace%")->where('locked', '=', NULL)->paginate(5);
        return view('pages.listtour', compact('resultTour'));
    }

    public function getBookTour($tourId)
    {
        $tour = Tour::find($tourId);
        $relativeTours = DB::table('tbl_tours')->select('tour_id', 'tour_name', 'base_price', 'sale_price')->where('locked', '=', NULL)->take(3)->get();
        return view('pages.booktour', compact('tour', 'relativeTours'));
    }

    function postPayTour(BookTour $request)
    {
        session_start();
        $bookTourInfor = array();
        $tongTien = 0;
        $percentForChild = 40;//phần trăm giảm giá cho trẻ em
        $bookTourInfor['customerId'] = $request->customerId;
        $bookTourInfor['tourId'] = $request->tourId;
        $bookTourInfor['adult'] = $request->adult;
        $bookTourInfor['child'] = $request->child;
        $bookTourInfor['discount'] = $request->discountCode;
        $tour = Tour::find($bookTourInfor['tourId']);
        $codeId = $tour->discount_code_id;
        $salePrice = $tour->sale_price;
        $relativeTours = DB::table('tbl_tours')->select('tour_id', 'tour_name', 'base_price', 'sale_price')->where('locked', '=', NULL)->take(3)->get();
        $tongBanDau = $bookTourInfor['adult'] * $salePrice + $bookTourInfor['child'] * ($salePrice) * (100 - $percentForChild) / 100;
        $isDiscount = DB::table('tbl_discount_codes')->select('discount_code_name', 'money')->where('discount_code_id', '=', $codeId)->where('end_date', '>', date('Y-m-d H:i:s'))->first();
        if ($isDiscount != [] && (trim($bookTourInfor['discount']) == $isDiscount->discount_code_name)) {
            $tongTien = $bookTourInfor['adult'] * $salePrice + $bookTourInfor['child'] * ($salePrice) * (100 - $percentForChild) / 100 - $isDiscount->money;
        } else {
            $bookTourInfor['discount'] = 'Không hợp lệ';
            $tongTien = $bookTourInfor['adult'] * $salePrice + $bookTourInfor['child'] * ($salePrice) * (100 - $percentForChild) / 100;
        }
        $bookTourInfor['totalPrice'] = $tongTien;
        $bookTourInfor['basePrice'] = $tongBanDau;
        $_SESSION['bookTourInfor'] = $bookTourInfor;
        return view('pages.pay', compact('tour', 'relativeTours'));
    }

    public function postConfirmBookTour(ConfirmBookTour $request) {
        session_start();
        $bookTourInfor = $_SESSION['bookTourInfor'];
        $idTour = $bookTourInfor['tourId'];
        $TourCoupon = new TourCoupon();
        $TourCoupon->employee_id = $bookTourInfor['customerId'];
        $TourCoupon->tour_id = $bookTourInfor['tourId'];
        $TourCoupon->children_number = $bookTourInfor['child'];
        $TourCoupon->adult_number = $bookTourInfor['adult'];
        $TourCoupon->price = $bookTourInfor['totalPrice'];
        $TourCoupon->payment = $request->paymethod;
        $TourCoupon->created_at = date('Y-m-d H:i:s');
        $TourCoupon->updated_at = date('Y-m-d H:i:s');
        $TourCoupon->save();
        session_destroy();
        return redirect()->route('getBookTour', ['tourId' => $idTour])->with('noti', 'Bạn đã đặt tour thành công');
    }
}




