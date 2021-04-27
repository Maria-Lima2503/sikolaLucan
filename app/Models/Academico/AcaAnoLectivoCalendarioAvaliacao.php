<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAnoLectivoCalendarioAvaliacao extends Model
{
    use HasFactory;

    protected $table = 'aca_ano_lectivo_calendario_avaliacao';

    protected $primaryKey = 'CAL_AVA_CODIGO';

    protected $fillable = ['CAL_AVA_CODIGO_AVALIACAO'];
}
