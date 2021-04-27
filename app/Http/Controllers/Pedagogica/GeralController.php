<?php

namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeralController extends Controller
{
    public function encarregados()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Gestão de Encarregado"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.Pedagogia.gestao_encarregado',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
    public function gestao_estagio()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Gestão de Estágio"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
        return view('pages.Pedagogia.gestao_estagio',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
}
