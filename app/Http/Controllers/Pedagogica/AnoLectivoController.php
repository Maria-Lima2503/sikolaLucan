<?php

namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnoLectivoController extends Controller
{

    public function form_year()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "form-year", 'name' => "Ano Lectivo"], ['link' => "javascript:void(0)", 'name' => "Editar Ano Lectivo"],
          ];

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.pedagogia.anoLectivo.adicinarListar',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
    public function edit_year()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "form-year", 'name' => "Ano Lectivo"], ['link' => "javascript:void(0)", 'name' => "Editar Ano Lectivo"],
        ];

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];

        return view('pages.pedagogia.anoLectivo.editarAno',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function calendar()
    {

        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "form-year", 'name' => "Ano Lectivo"], ['link' => "javascript:void(0)", 'name' => "Calendário"],
        ];

        $pageConfigs = ['pageHeader' => true, 'isFabButton' => false];

        return view('pages.pedagogia.anoLectivo.calendario_lectivo', ['pageConfigs' => $pageConfigs], ['breadcrumbs' => $breadcrumbs]);

    }

}
