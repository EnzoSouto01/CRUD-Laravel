<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Exibe a tela de registro
    public function registerView()
    {
        return view('auth.register');
    }

    // Processa o formulário de registro
    public function register(Request $request)
    {
        // Validação dos campos enviados pelo usuário
        $request->validate([
            'name'  => 'required',                  // Nome obrigatório
            'email' => 'required|email|unique:users', // Deve ser email válido e não pode existir já na tabela users
            'password' => 'required|min:3'         // Senha obrigatória e com no mínimo 3 caracteres
        ]);

        // Cria o usuário no banco já criptografando a senha
        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password)
        ]);

        // Redireciona para o login com mensagem de sucesso
        return redirect()->route('login')->with('success', 'Registrado');
    }

    // Exibe o formulário de login
    public function loginView()
    {
        return view('auth.login');
    }

    // Processa tentativa de login
    public function login(Request $request)
    {
        // Procura usuário pelo email informado
        $user = User::where('email', $request->email)->first();

        // Se não encontrou ou a senha não confere, volta com erro
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Email ou senha inválidos');
        }

        // Se credenciais estão corretas, salva dados simples na sessão
        session([
            'user_id' => $user->id,
            'user_name' => $user->name,
        ]);

        // Redireciona para o perfil do usuário após login bem-sucedido
        return redirect()->route('perfil');
    }

    // Encerra a sessão e desloga o usuário
    public function logout()
    {
        // Remove os dados armazenados na sessão
        session()->forget(['user_id', 'user_name']);

        // Redireciona para a página inicial
        return redirect()->route('/');
    }
}