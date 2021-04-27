<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAlunoDcocumentacao extends Model
{
    use HasFactory;

    protected $table = 'aca_aluno_documentacao';

    protected $primaryKey = 'DOC_DOCUMENTO';

    protected $fillable = [
        'DOC_ALUNO',
        'DOC_SCANNER',
        'DOC_PATH',
        'DOC_EXTENSAO',
        'DOC_CONTEUDO',
        'DOC_STATUS',
        'DOC_QUANTIDADE',
        'DOC_ANO_LECTIVO',
        'DOC_CREATED_BY',
        'DOC_CREATED_DATE',
        'DOC_UPDATED_BY',
        'DOC_UPDATED_DATE'
    ];
}
