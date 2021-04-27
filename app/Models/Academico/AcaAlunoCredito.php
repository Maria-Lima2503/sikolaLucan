<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAlunoCredito extends Model
{
    use HasFactory;

    protected $table = 'aca_aluno_credito';

    protected $primaryKey = 'CRE_CODIGO';

    protected $fillable = [
        'CRE_CODIGO_ALUNO',
        'CRE_CREDITO',
        'CRE_CRE_DATA',
        'CRE_FATURA',
        'CRE_DESCRICAO',
        'CRE_CONTA_DESTINO',
        'CRE_MOVIMENTO',
        'CRE_CONTA_ORIGEM',
        'CRE_ADIAMENTO',
        'CRE_DOCUMENTO_ID',
        'CRE_LANCADOD_POR',
        'CRE_DATA_LANCAMENTO',
        'CRE_ANO_LECTIVO'
    ];
}
