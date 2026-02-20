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
            'observacao_protocolo',
            'status_protocolo',
            'data_protocolo'
        ];

        protected $useTimeStamp = true;
}

?>