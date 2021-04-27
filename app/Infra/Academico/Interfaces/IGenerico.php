<?php


namespace App\Infra\Academico\Interfaces;


interface IGenerico
{
    public function listar();

    public function adicionar(array $Dados);

    public function editar(array $Dados);

    public function info(int $Id);

    public function deletar(int $Id);
}
