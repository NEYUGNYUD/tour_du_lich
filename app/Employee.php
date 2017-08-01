<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Employee extends Model implements AuthenticatableContract, CanResetPasswordContract{
	use Authenticatable, CanResetPassword;

	protected $table = 'tbl_employees';
    protected $primaryKey = 'employee_id';
	protected $fillable = ['employee_name', 'email', 'password','level','avatar', 'phone_number', 'dob', 'gender', 'address', 'locked'];
	protected $hidden = ['password', 'remember_token'];
	function history() {
        return $this->hasMany('App\History', 'employee_id', 'employee_id');
    }
}
