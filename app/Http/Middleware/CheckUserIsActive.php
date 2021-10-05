<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class CheckUserIsActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->status == 1) {

            return $next($request);

        } else {

            $user = Auth::User();
            $now = Carbon::now();
            $user_verifies_email_at = Carbon::parse($user->email_verified_at);
            $diffHours = $user_verifies_email_at->diffInHours($now);
            return response()->view('frontend.verification', compact('diffHours'));

        }
    }
}
