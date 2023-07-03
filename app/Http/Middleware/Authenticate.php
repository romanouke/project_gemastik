<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
<<<<<<< HEAD
        return $request->expectsJson() ? null : abort(403, 'Tolong Login dahulu');
=======
        return $request->expectsJson() ? null : abort(403, 'Mohon login terlebih dahulu');
>>>>>>> 1eb763f58304ec3482ee1a1f00cd1fdbe2bc2a4c
    }
}
