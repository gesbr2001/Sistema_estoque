<?php

namespace App\Controllers;

use App\Models\RequisicaoModel;

class ProtocoloController extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
    $model = new RequisicaoModel();

    $dados['requisicoes'] = $model
        ->where('status', 'protocolo')
        ->findAll();

    return view('protocolo/index', $dados);
    }

    public function novo(){
        return view('protocolo/novo');
    }

    public function enviarTriagem($id)
    {
    $model = new \App\Models\RequisicaoModel();

    $model->update($id, [
        'status' => 'triagem'
    ]);

    return redirect()->to('/protocolo')->with('msg', 'Enviado para triagem!');
=======
        return view('protocolo/index');
>>>>>>> 0e73b1d (coloquei o docker e o css)
    }

    public function salvar()
    {
        $model = new RequisicaoModel();

        $model->save([
            'destinatario' => $this->request->getPost('destinatario'),
            'grupo' => $this->request->getPost('grupo'),
            'tipo_requisicao' => $this->request->getPost('tipo_requisicao'),
            'numero_requisicao' => $this->request->getPost('numero_requisicao'),
            'centro_custo' => $this->request->getPost('centro_custo'),
<<<<<<< HEAD
            'observacao_protocolo' => $this->request->getPost('observacao_protocolo'),
            'status_protocolo' => $this->request->getPost('status_protocolo'),
            'data_protocolo' => date('Y-m-d H:i'),

            'status' => 'protocolo'
        ]);

        return redirect()->to(base_url('/protocolo'))->with('msg', 'Requisição criada!');
=======
            'observacao' => $this->request->getPost('observacao'),
        ]);

        return redirect()->to('/protocolo')->with('msg', 'Requisição criada!');
>>>>>>> 0e73b1d (coloquei o docker e o css)
    }
}
