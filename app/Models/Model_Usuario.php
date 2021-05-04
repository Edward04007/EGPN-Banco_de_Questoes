<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Model_Usuario extends Model
{
    use HasFactory;

    protected $table = 'TB_USUARIO';

    protected $fillable = [
        'pk_id',
        'nome_usuario',
        'foto_usuario',
        'senha_usuario',
        'fk_funcao',
    ];

    protected $hidden = [
        'senha_usuario'
    ];

    protected $primaryKey = 'pk_id';
    public $timestamps = true;
}
