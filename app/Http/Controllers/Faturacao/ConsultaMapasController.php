<?php

namespace App\Http\Controllers\Faturacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsultaMapasController extends Controller
{
    public function desconto_bolsa()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Bolsas e Descontos"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.Consulta-Mapas.desconto_bolsas',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }


    public function devedores()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Lista de Devedores "],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.Consulta-Mapas.lista_devedores',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }


    public function mapa_Facturacao()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Mapas de Faturação"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.Consulta-Mapas.mapa_faturacao',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
    public function mapa_incumprimento()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Mapas de Incumprimento"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.Consulta-Mapas.mapa_incumprimento',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

}
