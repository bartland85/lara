<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 24.05.15
 * Time: 21:27
 */

namespace App\Http\Middleware;

use Closure;

class TestMiddleware {

    public function handle($request, Closure $next)
    {
        echo 'testing middleware....', '<br>';

        return $next($request);
    }
} 