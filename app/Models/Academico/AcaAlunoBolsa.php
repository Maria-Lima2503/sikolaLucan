<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAlunoBolsa extends Model
{
    use HasFactory;

    protected $table = 'aca_aluno_bolsa';

    protected $primaryKey = 'BOL_ALU_CODIGO_BOLSA';

    protected $fillable = [
        'BOL_ALU_CODIGO_ALUNO',
        'BOL_ALU_INICIO',
        'BOL_ALU_INICIO',
        'BOL_ALU_TERMINO',
        'BOL_ALU_CREATED_BY',
        'BOL_ALU_CREATED_DATE',
        'BOL_ALU_UPDATED_BY',
        'BOL_ALU_UPDATED_DATE'
    ];
}
