<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAnoCurricularDocumentacao extends Model
{
    use HasFactory;

    protected $table = 'aca_ano_curricular_documentacao';

    protected $primaryKey = 'DOC_ANO_CURRICULAR_ID';

    protected $fillable = [
        'DOC_DOCUMENTO_ID'
    ];
}
