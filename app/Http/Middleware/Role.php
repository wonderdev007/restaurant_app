<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Role as UserRole;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        foreach ($roles as $role) {
            $user_role = UserRole::where('title', $role)->first();

            if($user->roles->contains($user_role)) {
                return $next($request);
            } else {
                return redirect('/admin');
            }
        }

        dd($user->roles->contains(1));
        if(!Auth::check()) {
            return redirect('/login');
        }

    }
}
