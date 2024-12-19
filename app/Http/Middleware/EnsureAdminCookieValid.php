<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdminCookieValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('Authorization');

        // check token is it valid 
        // cut token Bearer base65
        $token = str_replace('Bearer ', '', $token);
        $base64 = base64_decode($token);

        // decode base65
        if (!$base64) {
            // and check if theres administrator_id
            $base64 = json_decode($base64);

            return response()->json([
                'message' => 'Unauthorized',
                'error' => 'unauthorized',
            ], 401);
        }


        if (!$token) {
            return response()->json([
                'message' => 'Unauthorized',
                'error' => 'unauthorized',
            ], 401);
        }


        return $next($request);
    }
}
