<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAlunoPessoasContacto extends Model
{
    use HasFactory;

    protected $table = 'aca_aluno_pessoas_contacto';

    protected $primaryKey = 'ALU_CONT_CODIGO_ALUNO';

    protected $fillable = [
        'ALU_CONT_NOME',
        'ALU_CONT_TELEFONE',
        'ALU_CONT_GRAU'
    ];
}
