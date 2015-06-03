<?php namespace App\Http\Middleware;

use Illuminate\Support\Facades\View;
use App\Settings;
use Closure;

class GetSettings {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        View::share('settings', Settings::find(1));

		return $next($request);
	}

}
