<?php

namespace App\Http\Controllers\Faturacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtigoServicoController extends Controller
{
    public function novo_art_serv()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Novo Artigo/Serviço"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Facturacao.Artigos_Servicos.novo_A-S',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }


    public function lista_art_serv()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Gestão de Artigos e Serviços"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Facturacao.Artigos_Servicos.listar-A-S',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
}
