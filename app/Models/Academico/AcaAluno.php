<?php

namespace App\Models\Academico;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcaAluno extends Model
{
    use HasFactory;

    protected $table = 'aca_aluno';

    protected $primaryKey = 'ALU_CODIGO';

    protected $fillable = [
        'ALU_INSCRICAO',
        'ALU_DATA_INSCRICAO',
        'ALU_ESTADO',
        'ALU_ENCARREGADO',
        'ALU_ENCARREGADO_TELEFONE',
        'ALU_ENCARREGADO_EMAIL',
        'ALU_ENCARREGADO_TEL_ALTERNATIVO',
        'ALU_ENC_PARENTESCO',
        'ALU_NOME_PAI',
        'ALU_NOME_MAE',
        'ALU_CADASTRO',
        'ALU_ENCARREGADO_IDENTIFICACAO',
        'ALU_DATA_READMISSAO',
        'ALU_PROVENIENCIA_NOME',
        'ALU_PROVENIENCIA_SAIDA',
        'ALU_PROVENIENCIA_SITUACAO',
        'ALU_PROVENIENCIA_CURSO',
        'ALU_PROVENIENCIA_CLASSE',
        'ALU_TERMINO',
        'ALU_NUMERO_MANUAL',
        'ALU_PASSWORD',
        'ALU_PORTAL_ALLOWED_BY',
        'ALU_PORTAL_ALLOWED_DATE',
        'ALU_PORTAL_ACESSO_STATUS',
        'ALU_PORTAL_UPDATED_BY',
        'ALU_PORTAL_UPDATED_DATE',
        'ALU_ENCARREGADO_PORTAL_PASSWORD',
        'ALU_ENCARREGADO_PORTAL_STATUS',
        'ALU_ENCARREGADO_PORTAL_ALLOWED_BY',
        'ALU_ENCARREGADO_PORTAL_ALLOWED_DATE',
        'ALU_ENCARREGADO_PORTAL_UPDATED_BY',
        'ALU_ENCARREGADO_PORTAL_UPDATED_DATE',
        'ALU_SHORTNAME',
        'ALU_EXTERNO',
        'ALU_DELETED_BY',
        'ALU_DELETED_DATE',
        'ALU_CADIDATURA_ID',
        'ALU_STUDENT_ID',
        'ALU_MOTIVO_REMOCAO',
        'ALU_ENCARREGADO_NIF',
        'ALU_MORADA_FATURACAO',
        'ALU_CREATED_DATE'
    ];
}
