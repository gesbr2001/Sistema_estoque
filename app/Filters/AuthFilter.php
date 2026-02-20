<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
{
    // Se não estiver logado
    if (!session()->get('logado')) {
        return redirect()->to('/login');
    }

    // Se tiver perfis definidos na rota
    if ($arguments) {
        $perfil = session()->get('perfil');

        if (!in_array($perfil, $arguments)) {
            return redirect()->to('/dashboard'); // ou erro 403
        }
    }
}

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
       //
    }
}
?>