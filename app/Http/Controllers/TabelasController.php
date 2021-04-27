<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabelasController extends Controller
{
    public function documentos_uteis()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Documentos Necessário"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Tabelas.documentos_uteis',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }

    public function profissoes()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Gestão de Profissões"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Tabelas.profissao',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
    public function habilitacao_literaria()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Habilitação Literária"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Tabelas.habilitacao_literaria',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }

    public function pais()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Gestão de País"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Tabelas.pais',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
    public function nacionalidade()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Gestão de Nacionalidade"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Tabelas.nacinalidade',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
    public function provincia()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Gestão de Províncias"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Tabelas.provincia',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }

    public function municipio()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Gestão de Municípios"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Tabelas.municipio',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }


}
