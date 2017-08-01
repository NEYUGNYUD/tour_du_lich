<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TourImage;
class Tour extends Model {

    protected $table = 'tbl_tours';
    protected $primaryKey = 'tour_id';

    function tourImages() {
       return $this->hasMany('App\TourImages','tour_id', 'tour_id');
    }

    // function places() {
    //     return $this->belongsTo('App\Places', 'start_place', 'place_id');
    // }

    function discountCode() {
        return $this->belongsTo('App\Discount', 'discount_code_id', 'discount_code_id');
    }

    function tourCoupon() {
        return $this->hasMany('App\TourCoupons', 'tour_id', 'tour_id');
    }

    function tbl_tour_images() {
        return $this->hasMany('App\TourImage', 'tour_id', 'tour_id');;
    }
}
