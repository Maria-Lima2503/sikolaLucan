<?php


namespace App\Http\Controllers\Pedagogica;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar_aluno()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Lista de Inscritos"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
      
        return view('pages.pedagogia.centralAluno.listar',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function editar_aluno()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "list_student", 'name' => "Lista de Inscritos"], ['link' => "javascript:void(0)", 'name' => "Ficha de Inscrição"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
      
        return view('pages.pedagogia.centralAluno.editarFicha',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function inscricao_simples()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Inscrição Simplificada"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
      
        return view('pages.pedagogia.centralAluno.cadastro',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function livro_matricula()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"],['link' => "list_student", 'name' => "Lista de Inscritos"], ['link' => "javascript:void(0)", 'name' => "Livro de Matrícula"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
      
        return view('pages.pedagogia.centralAluno.livroMatricula',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }

    public function inscricao_completa()
    {
        $breadcrumbs = [
            ['link' => "modern", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Inscrição Completa"], 
        ];
          //Pageheader set true for breadcrumbs
        $pageConfigs = ['pageHeader' => true, 'isFabButton' => true];
      
        return view('pages.pedagogia.centralAluno.inscricaoCompleta',['pageConfigs' => $pageConfigs],['breadcrumbs' => $breadcrumbs]);
    }
}
