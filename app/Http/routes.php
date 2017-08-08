<?php
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', [
	'as' => 'index',
	'uses' =>'PageController@index'
]);
Route::get('test', function() {
	return view('admin.layout.master');
});

Route::group(['prefix' => 'admin', 'middleware' => 'loginEmployee'], function() {
	Route::get('dashboard', [
		'as' => 'getDashBoard',
		'uses' => 'EmployeeController@dashboard'
	]);
	//nhân viên
	Route::group(['prefix' => 'employee', 'middleware' => 'loginAdmin'], function() {
		Route::get('list', [
			'as' => 'listEmployee',
			'uses' => 'EmployeeController@index'
		]);
		Route::get('add', [
			'as' => 'getAddEmployee',
			'uses' => 'EmployeeController@create'
			]);
        Route::post('add',[
			'as' => 'postAddEmployee',
			'uses' => 'EmployeeController@store']);
        Route::get('edit/{id}',[
			'as' => 'getEditEmployee',
			'uses' => 'EmployeeController@edit'
		]);
        Route::post('edit', [
			'as' => 'postEditEmployee',
			'uses' => 'EmployeeController@update'
		]);
        Route::get('delete/{id}', 'EmployeeController@getDelete');
	});

	//địa điểm
	Route::group(['prefix' => 'place'], function() {
		Route::get('list', [
			'as' => 'listPlace',
			'uses' => 'PlaceController@index'
			]);
		Route::get('add', [
			'as' => 'getAddPlace',
			'uses' => 'PlaceController@create'
		]);
		Route::post('add', [
			'as' => 'postAddPlace',
			'uses' => 'PlaceController@store'
		]);
		Route::get('edit/{id}', [
			'as' => 'getEditPlace',
			'uses' => 'PlaceController@edit']);
		Route::post('edit', [
			'as' => 'postEditPlace',
			'uses' => 'PlaceController@update'
		]);
	});
	//phương tiện
	Route::group(['prefix' => 'vehicle'], function() {
		Route::get('list', [
			'as' => 'listVehicle',
			'uses' => 'VehicleController@index'
		]);
		Route::get('add', [
			'as' => 'getAddVehilce',
			'uses' => 'VehicleController@create'
		]);
		Route::post('add', [
			'as' => 'postAddVehicle',
			'uses' => 'VehicleController@store'
		]);
		Route::get('edit/{id}', [
			'as' => 'getEditVehicle',
			'uses' => 'VehicleController@edit'
		]);
		Route::post('edit', [
			'as' => 'postEditVehicle',
			'uses' => 'VehicleController@update'
		]);
	});
	//dịch vụ
	Route::group(['prefix' => 'service'], function() {
		Route::get('list', [
			'as' => 'listService',
			'uses' => 'ServiceController@index'
		]);
		Route::get('add', [
			'as' => 'getAddService',
			'uses' => 'ServiceController@create'
		]);
		Route::post('add', [
			'as' => 'postAddService',
			'uses' => 'ServiceController@store'
		]);
		Route::get('edit/{id}', [
			'as' => 'getEditService',
			'uses' => 'ServiceController@edit'
		]);
		Route::post('edit', [
			'as' => 'postEditService',
			'uses' => 'ServiceController@update'
		]);
	});
	//mã giảm giá
	Route::group(['prefix' => 'discount'], function() {
		Route::get('list', [
			'as' => 'listDiscount',
			'uses' => 'DiscountController@index'
		]);
		Route::get('add', [
			'as' => 'getAddDiscount',
			'uses' => 'DiscountController@create'
		]);
		Route::post('add', [
			'as' => 'postAddDiscount',
			'uses' => 'DiscountController@store'
		]);
		Route::get('edit/{id}', [
			'as' => 'getEditDiscount',
			'uses' => 'DiscountController@edit'
		]);
		Route::post('edit', [
			'as' => 'postEditDiscount',
			'uses' => 'DiscountController@update'
		]);
	});
	//tour du lịch
	Route::group(['prefix' => 'tour'], function() {
		Route::get('list', [
			'as' => 'listTour',
			'uses' => 'TourController@index'
		]);
		Route::get('add', [
			'as' => 'getAddTour',
			'uses' => 'TourController@create'
		]);
		Route::post('add', [
			'as' => 'postAddTour',
			'uses' => 'TourController@store'
		]);
		Route::get('edit/{id}', [
			'as' => 'getEditTour',
			'uses' => 'TourController@edit'
		]);
		Route::post('edit', [
			'as' => 'postEditTour',
			'uses' => 'TourController@update'
		]);
		Route::get('image/{id}', [
			'as' => 'listTourImage',
			'uses' => 'TourController@getTourImage'
		]);

		Route::post('addImage', [
			'as' => 'postAddTourImage',
			'uses' => 'TourController@postAddTourImage'
		]);

		Route::get('deleteImage/{imageId}/{tourId}', [
			'as' => 'deleteImage',
			'uses' => 'TourController@deleteImage'
		]);
	});

	//phiếu tour
	Route::group(['prefix' => 'tourcoupon'], function() {
		Route::get('list', [
			'as' => 'listTourCoupon',
			'uses' => 'TourCouponController@index'
		]);

		Route::get('add', [
			'as' => 'getAddTourCoupon',
			'uses' => 'TourCouponController@create'
		]);

		Route::post('add', [
			'as' => 'postAddTourCoupon',
			'uses' => 'TourCouponController@store'
		]);
	});

	//ảnh tour
	// Route::group(['prefix' => 'tourimage'], function() {
	// 	Route::get('list/{id}', [
	// 		'as' => 'listImage',
	// 		'uses' => 'TourImageController@index'
	// 	]);
	// });
});

Route::get('admin/login', [
	'as' => 'getLoginAdmin',
	'uses' => 'EmployeeController@getLogin'
]);
Route::post('admin/login', [
	'as' => 'postLoginAdmin',
	'uses' => 'EmployeeController@postLogin'
]);

Route::get('logout', [
	'as' => 'logoutAdmin',
	'uses' => 'EmployeeController@logoutAdmin'
]);

Route::group(['prefix' => 'user'], function() {
	Route::get('login', [
		'as' => 'getLoginUser',
		'uses' => 'CustomerController@getLoginUser'
	]);

	Route::post('login', [
		'as' => 'postLoginUser',
		'uses' => 'CustomerController@postLoginUser'
	]);
	Route::get('registry',[
		'as' => 'getRegistryUser',
		'uses' => 'CustomerController@getRegistryUser'
	]);

	Route::post('registry', [
		'as' => 'postRegistryUser',
		'uses' => 'CustomerController@postRegistryUser'
	]);
	Route::get('logout', [
		'as' => 'logoutUser',
		'uses' => 'CustomerController@getLogoutUser'
	]);
});

Route::get('listtour/{idPlace}', [
	'as' => 'getListTour',
	'uses' => 'PageController@getListTour'
]);

Route::get('detailTour/{idTour}', [
	'as' => 'getDetailTour',
	'uses' => 'PageController@getDetailTour'
]);

Route::post('searchTour', [
	'as' => 'postSearchTour',
	'uses' => 'PageController@postSearchTour'
]);

Route::get('contact', [
	'as' => 'getContact',
	'uses' => 'PageController@getContact'
]);

Route::get('bookTour/{tourId}', [
	'as' => 'getBookTour',
	'uses' => 'PageController@getBookTour',
    'middleware' => 'loginCustomer'
]);

Route::post('bookTour', [
    'as' => 'postBookTour',
    'uses' => 'PageController@postBookTour',
    'middleware' => 'loginCustomer'
]);

Route::post('pay', [
    'as' => 'postPayTour',
    'uses' => 'PageController@postPayTour',
    'middleware' => 'loginCustomer'
]);

Route::post('confirmBookTour', [
    'as' => 'postComfirmBookTour',
    'uses' => 'PageController@postComfirmBookTour',
    'middleware' => 'loginCustomer'
]);


