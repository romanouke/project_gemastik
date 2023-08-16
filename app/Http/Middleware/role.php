<?php

namespace App\Http\Middleware;

use Closure;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
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
