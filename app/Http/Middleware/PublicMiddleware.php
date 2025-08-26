<?php

namespace App\Http\Middleware;
use App\Helpers\SecurityHelper;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PublicMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }
}
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
        if (auth()->check()) {
            return redirect('/login');
        }


        return $next($request);
    }

}
