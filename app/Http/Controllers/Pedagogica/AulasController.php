<?php

namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AulasController extends Controller
{

    public function livro_presenca()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Livro de Prsença"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.configAula.livroPresença',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function nova_aula()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Aula e Sumário"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.configAula.criarAula',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
}
