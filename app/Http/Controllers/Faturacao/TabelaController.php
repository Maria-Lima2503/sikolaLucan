<?php

namespace App\Http\Controllers\Faturacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabelaController extends Controller
{
    public function banco_contas()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Bancos & Contas Bancárias"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.tabelas.bancos_contas',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
    public function item_categoria()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Categoria de Itens"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.tabelas.categoria_item',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
    public function impostos()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Impostos e Outras Isenções"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.tabelas.imposto',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
    public function forma_pagamento()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Formas de Pagamento"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.tabelas.formas_pagamento',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
    public function terceiros()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Terceiros e Fornecedores"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Facturacao.tabelas.terceiros',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
}
