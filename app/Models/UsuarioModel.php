<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome',
        'email',
        'senha',
        'tipo'
    ];

    protected $returnType = 'array';

    protected $useTimestamps = true;
}
