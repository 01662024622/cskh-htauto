<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\HT20\Apartment;

class AparmentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (is_null(Apartment::where('name',$request->name)->orWhere('code',$request->code)->get())) {
          return $next($request);
        }
        return response()
            ->json([
                'code'      =>  400,
                'message'   =>  'Tên phòng ban hoặc mã phòng ban đã tồn tại!'
            ], 400);
    }
}
