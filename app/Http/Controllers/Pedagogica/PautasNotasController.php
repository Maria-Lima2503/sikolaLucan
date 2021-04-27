<?php

namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PautasNotasController extends Controller
{
    public function lancamento()
    {
     
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' =>"Lançamento de Notas"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
     
        return view('pages.Pedagogia.notas_pautas.lancamento',['pageConfigs'=>$pageConfigs],['breadcrumbs'=> $breadcrumbs]);
    }
}
