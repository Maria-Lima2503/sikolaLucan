<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAnoLectivoCalendarioPausa extends Model
{
    use HasFactory;

    protected $table = 'aca_ano_lectivo_calendario_pausa';

    protected $primaryKey = 'CAL_PAU_CODIGO';

    protected $fillable = ['CAL_PAU_DESCRICAO'];
}
