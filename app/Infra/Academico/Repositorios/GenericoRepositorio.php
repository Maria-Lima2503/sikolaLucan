<?php


namespace App\Infra\Academico\Repositorios;


use App\Infra\Academico\Interfaces\IGenerico;
use Illuminate\Database\Eloquent\Model;

class GenericoRepositorio implements IGenerico
{
    protected $model = Model::class;

    public function adicionar(array $Dados)
    {
        // TODO: Implement adicionar() method.
    }

    public function editar(array $Dados)
    {
        // TODO: Implement editar() method.
    }

    public function info(int $Id)
    {
        // TODO: Implement info() method.
    }

    public function deletar(int $Id)
    {
        // TODO: Implement deletar() method.
    }

    public function listar()
    {
        // TODO: Implement listar() method.
    }
}
