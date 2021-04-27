<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAnoLectivoPeriodo extends Model
{
    use HasFactory;

    protected $table = 'aca_ano_lectivo_periodo';

    protected $primaryKey = 'PER_CODIGO';

    protected $fillable = [
        'PER_DESCRICAO',
        'PER_CODIGO_ANO_LECTIVO',
        'PER_INICIO',
        'PER_TERMINO',
        'PER_INICIO_MATRICULA',
        'PER_MATRICULA_TERMINO',
        'PER_CREATED_BY',
        'PER_CREATED_DATE',
        'PER_UPDATED_BY',
        'PER_UPDATED_DATE'
    ];
}
