<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $roles = explode('|', $role);

        foreach($roles as $key => $value){
            if($request->User()->role == $value){
                return $next($request);
            }
        }

        return abort(403, 'Aksi tidak bisa dilakukan');

    }
}