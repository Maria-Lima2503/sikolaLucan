<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAnoLectivo extends Model
{
    use HasFactory;

    protected $primaryKey = 'ANO_CODIGO';

    protected $table = 'aca_ano_lectivo';

    protected $fillable = [
        'ANO_ANO_LECTIVO',
        'ANO_DESCRICAO',
        'ANO_INICIO',
        'ANO_TERMINO',
        'ANO_INICIO_MATRICULA',
        'ANO_TERMINO_MATRICULA',
        'ANO_STATUS',
        'ANO_NIVEL',
        'ANO_TAXA_INSCRICAO',
        'ANO_MULTA_MATRICULA',
        'ANO_CODIGO_FILIAL',
        'ANO_DURACAO_MESES',
        'ANO_DIA_COBRANCA',
        'ANO_MODO_COBRANCA',
        'ANO_INICIO_COBRANCA',
        'ANO_TERMINO_COBRANCA',
        'ANO_ANO_CIVIL_INICIO',
        'ANO_ANO_CIVIL_TERMINO',
        'ANO_ANO_ECONOMICO'
    ];

}
