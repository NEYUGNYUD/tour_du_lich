<?php namespace App\Http\Middleware;

use Closure;
use Auth;

class LoginCustomer {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(!Auth::check() || (Auth::check() && Auth::user()->level != 2)) {
			return redirect()->route('getLoginUser')->with('noti', 'Bạn phải đăng nhập để có thể đặt được tour');
		} else {
            return $next($request);
        }
	}

}
