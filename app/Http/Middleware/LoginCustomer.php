<?php namespace App\Http\Middleware;

use Closure;

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
		if(!Auth::check()) {
			return redirect()->intended('user/login')->with('noti', 'Bạn phải đăng nhập để có thể đặt được tour');
		}
		return $next($request);
	}

}
