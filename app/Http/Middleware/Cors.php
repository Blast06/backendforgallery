<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

     //ESTE CORS ES PARTE DE LA CONFIGURACION DE LA API PARA PODER HACER USO DE ELLA CON LOS METODOS
    public function handle($request, Closure $next)
    {
        return $next($request)
        
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'content-type,X-Auth-Token,Authorization, withcredentials, Access-Control-Allow-Headers, Origin, Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers');
      }
}
