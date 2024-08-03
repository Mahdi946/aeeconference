<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      $userRole =  UserRole::where('UserID' ,Auth::user()->id)->where('RoleID' ,'1')->first();
      if($userRole){
        return $next($request);
      }else{
           flash()->info('شما دسترسی ندارید ');
            return redirect()->back();
      }
      
    }
}
