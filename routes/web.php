<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\MiscController;
use App\Http\Controllers\TesteController;

use App\Http\Controllers\Pedagogica\AnoLectivoController;
use App\Http\Controllers\Pedagogica\AlunoController;
use App\Http\Controllers\Pedagogica\AulasController;
use App\Http\Controllers\Pedagogica\CursoController;
use App\Http\Controllers\Pedagogica\DocentesController;
use App\Http\Controllers\Pedagogica\MapasController;
use App\Http\Controllers\Pedagogica\OutrosController;
use App\Http\Controllers\Pedagogica\PautasNotasController;
use App\Http\Controllers\Pedagogica\RequisicaoController;
use App\Http\Controllers\Pedagogica\TurmaController;
use App\Http\Controllers\Pedagogica\GeralController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\TabelasController;

use App\Http\Controllers\Faturacao\ArtigoServicoController;
use App\Http\Controllers\Faturacao\ConsultaMapasController;
use App\Http\Controllers\Faturacao\facturacaoController;
use App\Http\Controllers\Faturacao\TabelaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(['verify' => true]);

// Dashboard Route
// Route::get('/', [DashboardController::class, 'dashboardModern'])->middleware('verified');
Route::get('/', [DashboardController::class, 'painelBordo']);


Route::get('/modern', [DashboardController::class, 'dashboardModern']);
Route::get('/ecommerce', [DashboardController::class, 'dashboardEcommerce']);
Route::get('/analytics', [DashboardController::class, 'dashboardAnalytics']);

// User profile Route
Route::get('/user-profile-page', [UserProfileController::class, 'userProfile']);

// User Route
Route::get('/page-users-list', [UserController::class, 'usersList']);
Route::get('/page-users-view', [UserController::class, 'usersView']);
Route::get('/page-users-edit', [UserController::class, 'usersEdit']);

// Authentication Route
Route::get('/user-login', [AuthenticationController::class, 'userLogin']);
Route::get('/user-register', [AuthenticationController::class, 'userRegister']);
Route::get('/user-forgot-password', [AuthenticationController::class, 'forgotPassword']);
Route::get('/user-lock-screen', [AuthenticationController::class, 'lockScreen']);

// Misc Route
Route::get('/page-404', [MiscController::class, 'page404']);
Route::get('/page-maintenance', [MiscController::class, 'maintenancePage']);
Route::get('/page-500', [MiscController::class, 'page500']);


// locale route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

//pagina teste
Route::get('/test-page',[TesteController::class,'testPage' ]);

Route::name('admin.')->group(function() {

    /*************Módulo de área pedagógica***************/
    Route::get('/form-year',[AnoLectivoController::class,'form_year' ])->name('lista_ano');
    Route::get('/calendar',[AnoLectivoController::class,'calendar' ])->name('calendario');
    Route::get('/edit-year',[AnoLectivoController::class,'edit_year' ])->name('editar_ano');

    Route::get('/list_student',[AlunoController::class,'listar_aluno' ])->name('listar');
    Route::get('/edit_student',[AlunoController::class,'editar_aluno' ])->name('editarFicha');
    Route::get('/new_simple',[AlunoController::class,'inscricao_simples' ])->name('cadastro');
    Route::get('/list_registration',[AlunoController::class,'livro_matricula' ])->name('livroMatricula');
    Route::get('/new_complete',[AlunoController::class,'inscricao_completa' ])->name('inscricaocompleta');

    Route::get('/presence_book',[AulasController::class,'livro_presenca'])->name('livropresenca');
    Route::get('/new_class',[AulasController::class,'nova_aula'])->name('nova_aula');

    Route::get('/new_course',[CursoController:: class,'adicionarcurso'])->name('adicionarcurso');
    Route::get('/list_course',[CursoController::class,'listarcurso'])->name('listarcurso');
    Route::get('/flat-course',[CursoController::class,'plano_curso'])->name('planocurso');

    Route::get('/new_gang',[TurmaController::class,'adicionar_turma'])->name('adicionarturma');
    Route::get('/list_gang',[TurmaController::class,'listar_turma'])->name('listarturma');

    Route::get('/new_teachers',[ DocentesController::class,'adicionar_docente'])->name('adicionardocente');
    Route::get('/list_teachers',[DocentesController::class,'listar_docente'])->name('listardocente');

    Route::get('/new_time',[OutrosController::class,'criar_horario'])->name('criar_horario');
    Route::get('/list_time',[OutrosController::class,'lista_horario'])->name('listar_horario');
    Route::get('/new_list_discipline',[OutrosController::class,'para_disciplina'])->name('ver_disciplina');
    Route::get('/map-exploitation',[MapasController::class,'mapa_aproveitamento'])->name('aproveitamento');
    Route::get('/request_movi', [RequisicaoController::class, 'movimentar_aluno'])->name('movimentar_aluno');
    Route::get('/request_document', [RequisicaoController::class, 'documentos_academico'])->name('documentos_academico');
    Route::get('/launch',[PautasNotasController::class,'lancamento'])->name('lancamento');


  /*************Para Tabelas auxiliares ***************/

    Route::get('/manege_stage',[GeralController::class,'gestao_estagio'])->name('gestao_estagio');
    Route::get('/person_charge',[GeralController::class,'encarregados'])->name('encarregados');

    Route::get('/literary_qualification',[TabelasController::class,'habilitacao_literaria'])->name('habilitacao');
    Route::get('/professions',[TabelasController::class,'profissoes'])->name('profissoes');
    Route::get('/document_useful',[TabelasController::class,'documentos_uteis'])->name('documentos_uteis');
    Route::get('/country',[TabelasController::class,'pais'])->name('pais');
    Route::get('/province',[TabelasController::class,'provincia'])->name('provincia');
    Route::get('/county',[TabelasController::class,'municipio'])->name('municipio');

  /*************Módulo de super  Actividades Escolar  ***************/

    Route::get('/school_bus',[ActividadesController::class,'transporte'])->name('transporte');
    Route::get('/atl',[ActividadesController::class,'atl'])->name('atl');
    Route::get('/extras_activity',[ActividadesController::class,'extras'])->name('extras');

 /*************Módulo de Facturação ***************/

    Route::get('/pay_station',[facturacaoController::class,'posto_venda'])->name('posto_venda');
    Route::get('/current_account',[facturacaoController::class,'conta_corrente'])->name('conta_corrente');
    Route::get('/export_saft',[facturacaoController::class,'exp_saft'])->name('exp_saft');
    Route::get('/receipts_issued',[facturacaoController::class,'lista_recibos'])->name('lista_recibos');

    Route::get('/new_ps',[ArtigoServicoController::class,'novo_art_serv'])->name('novo_art_serv');
    Route::get('/list_ps',[ArtigoServicoController::class,'lista_art_serv'])->name('lista_art_serv');

    Route::get('/scholarship',[ConsultaMapasController::class,'desconto_bolsa'])->name('desconto_bolsa');
    Route::get('/debtors',[ConsultaMapasController::class,'devedores'])->name('devedores');
    Route::get('/map_billing',[ConsultaMapasController::class,'mapa_Facturacao'])->name('mapa_Facturacao');
    Route::get('/default_map',[ConsultaMapasController::class,'mapa_incumprimento'])->name('mapa_incumprimento');

    Route::get('/bank_account',[TabelaController::class,'banco_contas'])->name('banco_contas');
    Route::get('/category',[TabelaController::class,'item_categoria'])->name('item_categoria');
    Route::get('/fax',[TabelaController::class,'impostos'])->name('impostos');
    Route::get('/pay_forms',[TabelaController::class,'forma_pagamento'])->name('forma_pagamento');
    Route::get('/supplier',[TabelaController::class,'terceiros'])->name('terceiros');

});




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
