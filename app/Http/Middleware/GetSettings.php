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
        $settings = Settings::find(1);

        $settings->languages = unserialize($settings->languages);

        View::share('settings', $settings);


		return $next($request);
	}

}
