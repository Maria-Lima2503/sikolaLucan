<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaActividadesExtraCurriculares extends Model
{
    use HasFactory;

    protected $table = 'aca_actividades_extra_curriculares';

    protected $primaryKey = 'ACT_CODIGO';

    protected $fillable = [
        'ACT_CODIGO_RUBRICA',
        'ACT_DESCRICAO',
        'ACT_MODALIDADE',
        'ACT_INICIO',
        'ACT_TERMINO',
        'ACT_STATUS',
        'ACT_RESPONSAVEL',
        'ACT_ACT_PROFESSOR',
        'ACT_HORARIO',
        'ACT_LOCAL',
        'ACT_CREATED_BY',
        'ACT_CREATED_DATE',
        'ACT_UPDATED_BY',
        'ACT_UPDATED_DATE'
    ];
}
