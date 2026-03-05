<?php
namespace App\Models;

use CodeIgniter\Model;

class RequisicaoModel extends Model
{
        protected $table = 'requisicoes';
        protected $primaryKey = 'id';

        protected $allowedFields = [
            'destinatario',
            'grupo',
            'tipo_requisicao',
            'numero_requisicao',
            'centro_custo',
            'status',
<<<<<<< HEAD
            'observacao_protocolo',
            'status_protocolo',
            'data_protocolo'
=======
            'observacao'
>>>>>>> 0e73b1d (coloquei o docker e o css)
        ];

        protected $useTimeStamp = true;
}

?>