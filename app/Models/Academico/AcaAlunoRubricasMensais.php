<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAlunoRubricasMensais extends Model
{
    use HasFactory;

    protected $table = 'aca_aluno_rubricas_mensais';

    protected $primaryKey = 'ALU_RUBRICA_CODIGO_ALUNO';

    protected $fillable = [
        'ALU_RUBRICA_CODIGO_ANO',
        'ALU_RUBRICA_CODIGO_ITEM',
        'ALU_RUBRICA_STATUS',
        'ALU_RUBRICA_CREATED_BY',
        'ALU_RUBRICA_CREATED_DATE',
        'ALU_RUBRICA_UPDATED_BY',
        'ALU_RUBRICA_UPDATED_DATE'
    ];
}
