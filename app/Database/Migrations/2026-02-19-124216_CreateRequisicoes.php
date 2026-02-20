<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRequisicoes extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id' => [
            'type' => 'INT',
            'auto_increment' => true,
        ],

        'numero_requisicao' => [
            'type' => 'VARCHAR',
            'constraint' => 30,
            'unique' => true,
        ],

        'destinatario' => [
            'type' => 'VARCHAR',
            'constraint' => 150,
        ],

        'grupo' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ],

        'tipo_requisicao' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ],

        'centro_custo' => [
            'type' => 'VARCHAR',
            'constraint' => 150,
        ],

        'status' => [
            'type' => 'VARCHAR',
            'constraint' => 50,
            'default' => 'Protocolo'
        ],

        // PROTOCOLO
        'responsavel_triagem' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => true,
        ],
        'observacao_protocolo' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'data_protocolo' => [
            'type' => 'DATETIME',
            'null' => true,
        ],

        // TRIAGEM
        'prioridade' => [
            'type' => 'ENUM',
            'constraint' => ['Urgente', 'Não Urgente'],
            'null' => true,
        ],
        'observacao_triagem' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'data_triagem' => [
            'type' => 'DATETIME',
            'null' => true,
        ],

        // SEPARAÇÃO
        'colaborador_separacao' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => true,
        ],
        'data_inicio_separacao' => [
            'type' => 'DATETIME',
            'null' => true,
        ],

        // CONFERÊNCIA
        'qtd_itens' => [
            'type' => 'INT',
            'null' => true,
        ],
        'itens_divergentes' => [
            'type' => 'BOOLEAN',
            'default' => false,
        ],
        'descricao_divergencia' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'conferente' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => true,
        ],
        'observacao_conferencia' => [
            'type' => 'TEXT',
            'null' => true,
        ],
        'data_conferencia' => [
            'type' => 'DATETIME',
            'null' => true,
        ],

        // EXPEDIÇÃO
        'qtd_volume' => [
            'type' => 'INT',
            'null' => true,
        ],
        'placa_carro' => [
            'type' => 'VARCHAR',
            'constraint' => 20,
            'null' => true,
        ],
        'motorista' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
            'null' => true,
        ],
        'data_saida' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'observacao_expedicao' => [
            'type' => 'TEXT',
            'null' => true,
        ],

        'created_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
        'updated_at' => [
            'type' => 'DATETIME',
            'null' => true,
        ],
    ]);

    $this->forge->addKey('id', true);
    $this->forge->createTable('requisicoes');
}

public function down()
{
    $this->forge->dropTable('requisicoes');
}

}
