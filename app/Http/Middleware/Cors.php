<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //this handle method will be executed on each requets reaching our application
    public function handle($request, Closure $next)
    {
        //next means let the request continue its journey
        //* means any domain can access my routes. You can here specify some domain also
        //Access-Control-Allow-Methods means which of the requests methods are allowed
        //OPTIONS method is for extra options request
        return $next($request)
        ->header('Access-Control-Allow-Origin','*')
        ->header('Access-Control-Allow-Methods','GET, POST, PUT, PATCH, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers','Content-Type, Authorization');
    }
}
