<?php

namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function adicionar_docente()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Inserir Professor ou Docente"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
    
        return view('pages.Pedagogia.configDocente.adicionarDocente',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
    public function listar_docente()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Lista de Docente"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Pedagogia.configDocente.listarDocente',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
}
