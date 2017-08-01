<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
class Customer extends Model implements AuthenticatableContract, CanResetPasswordContract{
    use Authenticatable, CanResetPassword;
    protected $table = 'tbl_customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['email', 'customer_name', 'dob', 'gender', 'address', 'passport'];
    protected $hidden = ['password', 'remember_token'];

}
