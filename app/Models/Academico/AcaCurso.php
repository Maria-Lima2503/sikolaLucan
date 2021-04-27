<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaCurso extends Model
{
    use HasFactory;

    protected $table = 'aca_curso';
    protected $primaryKey = 'CUR_CODIGO';

    public const CREATED_AT = 'CUR_CREATED_DATE';
    public const UPDATED_AT = 'CUR_UPDATED_DATE';

    protected $fillable = [
        'CUR_NOME',
        'CUR_ABREVIACAO',
        'CUR_DURACAO',
        'CUR_STATUS',
        'CUR_ESPECIFICACAO',
        'CUR_TEMPO',
        'CUR_INICIO',
        'CUR_TERMINO',
        'CUR_CODIGO_FILIAL',
        'CUR_CODIGO_CURSO',
        'CUR_FORMACAO',
        'CUR_AREA_FORMACAO',
        'CUR_MODELO_PAUTA',
        'CUR_CREATED_BY',
        'CUR_UPDATED_BY',
    ];
}
