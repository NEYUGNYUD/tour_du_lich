<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model {

    protected $table = 'tbl_discount_codes';
    protected $primaryKey = 'discount_code_id';

    function tour() {
        return $this->hasMany('App\Tour', 'discount_code_id', 'discount_code_id');
    }

}
