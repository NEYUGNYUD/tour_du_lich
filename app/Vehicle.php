<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {
    protected $table = 'tbl_vehicles';
    protected $primaryKey = 'vehicle_id';
}
