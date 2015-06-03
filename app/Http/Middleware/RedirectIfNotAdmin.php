<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Guard;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfNotAdmin {


    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

    }

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
        if(!($this->auth->check() && $this->auth->user()->admin))
           return new RedirectResponse(url('/'));

		return $next($request);
	}

}
