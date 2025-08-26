<?php

namespace App\Http\Middleware;

use Closure;
use App\Helpers\SecurityHelper;
// use Illuminate\Auth\Middleware\Authenticate as Middleware;

class PublicSecurity
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return string|null
     *
     */

    public function handle($request, Closure $next)
    {
        $host_aaddr = $_SERVER['SERVER_NAME'];
        $host = new SecurityHelper();
        $function_reslt = $host->hostheader_validate($host_aaddr);

        if ($function_reslt == 0) {
            abort(505);
        }

        $req_count = count($request->all());
        $input = $request->all();

        if ($req_count > 1) {
            array_walk_recursive($input, function (&$input) {
                $xss_replace = new SecurityHelper();
                $input = $xss_replace->xss_strip($input);
            });
            $request->merge($input);
        }

        return $next($request);
    }

}
