<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{

    
    public function testPage(){

        $breadcrumbs = [
            ['link'=>"modern",'name'=>"Home"],['link'=>"modern",'name'=>"Test Page"], ['name'=>"Pagina em Teste"]
        ];
      
        $pageConfigs = [
            /*'mainLayoutType' => 'vertical-menu-nav-dark',
            'navbarLarge' => false,
            'navbarBgColor' => 'cyan',
            'bodyCustomClass' => 'testClass'*/
        ];
    
        return view('/pages/testePagina', [
            'pageConfigs' => $pageConfigs
        ]);
      }
   
}
