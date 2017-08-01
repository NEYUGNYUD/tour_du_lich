<?php namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Place extends Model {

	protected $table = 'tbl_places';
    protected $primaryKey = 'place_id';

	function tour() {
        return $this->hasMany('App\Tour', 'start_place', 'place_id');
    }

    function getName() {
        return DB::table('tbl_places')->select('place_id', 'place_name', 'parent_id')->get();
    }

    function getExceptionId($id) {
        return DB::table('tbl_places')->select('place_id','place_name')->where('place_id', '<>', $id)->get();
    }

}
