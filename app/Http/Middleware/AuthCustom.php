<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCustom
{
    // O método handle é executado sempre que uma rota protegida usa este middleware
    public function handle(Request $request, Closure $next)
    {
        // Verifica se existe um 'user_id' salvo na sessão
        // Isso indica se o usuário está autenticado
        if (!session()->has('user_id')) {

            // Caso o usuário NÃO esteja logado,
            // ele é redirecionado para a rota de login
            return redirect()->route('login');
        }

        // Se estiver logado, a requisição continua normalmente
        return $next($request);
    }
}
