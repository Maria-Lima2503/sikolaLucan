<?php

namespace App\Http\Controllers\Faturacao;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class facturacaoController extends Controller
{
    public function posto_venda()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Posto de Venda"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Facturacao.posto_venda',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function conta_corrente()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Contas Correntes"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Facturacao.conta_corrente',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function lista_recibos()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Ficheiro de Documentos de Facturação"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Facturacao.lista_recibos',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function exp_saft()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "", 'name' => "Faturação"], ['link' => "javascript:void(0)", 'name' => "Exportação de Ficheiro SAF-T"],
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Facturacao.exportar_SAF-T',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
}
