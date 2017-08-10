<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class LoginEmployee {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(!Auth::check() && (Auth::user()->level == 1 || Auth::user()->level == 0)) {
			return redirect()->intended('admin/login');
		}
		return $next($request);
	}

}
