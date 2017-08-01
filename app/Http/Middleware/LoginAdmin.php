<?php namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class LoginAdmin {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if(Auth::check()){
			$employee = Auth::user();
			if($employee->level == 1) {
				return $next($request);
			} else {
				return redirect()->route('listPlace');
			}
		} else {
			return redirect()->intended('admin/login');
		}
	}

}
