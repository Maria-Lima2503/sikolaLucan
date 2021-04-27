<?php


namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    
    public function adicionar_turma()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Criação de Turmas"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.configTurmas.adicionarTurmas', ['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
    public function listar_turma()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Lista das Turmas"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.configTurmas.listarTurmas', ['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
}
