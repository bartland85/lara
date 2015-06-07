<?php namespace App\Http\Middleware;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
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

        App::setLocale(Session::get('language'));


        $settings->languages = unserialize($settings->languages);

        if(!$settings->languages)$settings->languages = [App::getLocale()];



        View::share('settings', $settings);


		return $next($request);
	}

}
