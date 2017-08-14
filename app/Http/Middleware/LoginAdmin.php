<?php namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use function session_start;

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
		if(Auth::user()->level == 1){
				return $next($request);
		} else {
			return redirect()->intended('admin/login');
		}
	}

}
