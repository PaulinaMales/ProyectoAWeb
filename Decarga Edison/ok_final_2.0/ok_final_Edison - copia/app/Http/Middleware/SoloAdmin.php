<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

#FUNCIONALIDAD
use Illuminate\Support\Facades\Auth;

class SoloAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        /*Obtener el tipo de usuario
        $userType = $request->input('user-type');*/

        switch(auth::user()->rol_id){
            case ('1'):
                // Si el usuario es administrador, permite el acceso al controlador correspondiente
                break;
            case('2'):
                // Si el usuario es presidente, redirige a la vista 'presidente.president'
                return redirect()->route('presidente.president');
            break;  
            case ('3'):
                // Si el usuario es jugador, redirige a la vista 'jugador.player'
                return redirect()->route('jugador.player');
            break;
            default:
                // Si el usuario no es de ningún tipo válido, redirige a la vista 'login'
                return redirect()->route('login');
            break;
        }
        return $next($request);
    }
    
    
}

