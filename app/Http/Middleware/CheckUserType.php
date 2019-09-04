<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

use App\Admin;
use App\Author;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $user_id = Auth::user()->id;
        $par = $request->route()->parameters();

        $admin = Admin::whereEmail(Auth::user()->email)->first();

        if($user_id == $par->created_by || !is_null($admin)){
            return $next($request);
        }else{
            throw new ModelNotFoundException('You have no rights to change this details');

        }
    }
}
