<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function autenticar()
    {
        $session = session();
        $model = new UsuarioModel();

        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');

        $usuario = $model->where('email', $email)->first();

        if ($usuario) {
            if (password_verify($senha, $usuario['senha'])) {

                $session->set([
                    'id'    => $usuario['id'],
                    'nome'  => $usuario['nome'],
                    'perfil'  => $usuario['perfil'],
                    'logado'=> true
                ]);

                return redirect()->to('/dashboard');


            } else {
                return redirect()->back()->with('erro', 'Senha inválida');
            }
        } else {
            return redirect()->back()->with('erro', 'Usuário não encontrado');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
?>