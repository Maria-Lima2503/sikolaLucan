<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAnoLectivoCalendario extends Model
{
    use HasFactory;

    protected $table = 'aca_ano_lectivo_calendario';

    protected $primaryKey = 'CAL_CODIGO';

    protected $fillable = [
        'CAL_CODIGO_PERIODO',
        'CAL_INICIO',
        'CAL_TERMINO'
    ];

}
