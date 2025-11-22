<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    // Exibe a página de perfil do usuário logado
    public function perfil()
    {
        // Recupera o usuário usando o ID salvo na sessão
        $user = User::find(session('user_id'));

        // Envia o usuário para a view perfil.index
        return view(
            'perfil.index',
            compact('user')
        );
    }

    // Exibe o formulário de edição do perfil
    public function editarView()
    {
        // Busca o usuário autenticado
        $user = User::find(session('user_id'));

        // Envia o usuário para a view de edição
        return view(
            'perfil.editar',
            compact('user')
        );
    }

    // Salva as alterações feitas no perfil
    public function editar(Request $request)
    {
        // Localiza o usuário logado
        $user = User::find(session('user_id'));

        // Atualiza nome e email
        $data = [
            'name'  => $request->name,
            'email' => $request->email,
        ];

        // Só atualiza a senha se o campo tiver sido preenchido
        // e armazena a senha já criptografada com Hash
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        // Aplica as mudanças no banco
        $user->update($data);

        // Redireciona de volta para o perfil
        return redirect()->route('perfil');
    }

    // Exclui a conta do usuário
    public function excluir()
    {
        // Recupera o usuário logado
        $user = User::find(session('user_id'));

        // Remove o usuário do banco de dados
        $user->delete();

        // Remove o ID da sessão para efetuar logout
        session()->forget('user_id');

        // Redireciona para a página de registro ou cadastro
        return redirect()->route('register');
    }
}