<?php

namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function adicionarcurso()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Novo Curso"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.configCurso.adicionarcurso',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }


    public function listarcurso()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Lista de Cursos"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.configCurso.listarcurso',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }


    public function plano_curso()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Plano do Curso"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.configCurso.plano_curso',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
}
