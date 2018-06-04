<?php

namespace App\Http\Middleware;

use Closure;

class ComprobarMes
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->mes != mes){
            return redirect('noExiste');
        }
        return $next($request);
    }
}
