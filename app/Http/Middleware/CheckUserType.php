<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$types){
        //$user = Auth::user();  
        $user = $request->user(); 

        if (! in_array($user->type, $types) ) {
            abort(403, 'You are not Admin');
        }

        return $next($request);

        // After Middlewar هذا تعديل على response
        $response = $next($request); //response object  ترجع 
        // لو عملنا dd 
        $html = $response->content();
       
        return response($html); // افلتر المحتوى 
    }
}
