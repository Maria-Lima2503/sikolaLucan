<?php

namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequisicaoController extends Controller
{
    public function movimentar_aluno()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Solicitar Movimentos"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
       
        return view('pages.Pedagogia.solicitacao.movimentos',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
    public function documentos_academico()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Solicitar Documentos"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
       
        return view('pages.Pedagogia.solicitacao.documentos',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
}
