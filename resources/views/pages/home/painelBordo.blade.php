{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Painel Bordo')

{{-- page style --}}
@section('vendor-style')

<link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist.min.css')}}">
@endsection

{{-- page content --}}
@section('content')
    <!--div class="content-wrapper-before orange accent-4"></div-->

    <div class="section">
        <section class="users-list-wrapper section">
            <div class="row ">
            <div class="col s12 m12 l8" style="width: 100%;">
                <!--div id="card-stats" class="col s12 m12 l8 mb-2" style="width: 100%;"-->
            <div class="row ">
                <div class="col s12 m6 l6 xl3">
                    <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                        <div class="padding-4">
                            <div class="row">
                                <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">group</i>

                                </div>
                                <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">690</h5>
                                    <p class="no-margin">Total de Alunos</p>
                                    <!--p>6,00,00</p-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l6 xl3">
                    <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                        <div class="padding-4">
                            <div class="row">
                                <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">group_add</i>

                                </div>
                                <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">15</h5>
                                    <p class="no-margin">Novos Alunos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l6 xl3">
                    <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                        <div class="padding-4">
                            <div class="row">
                                <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">assignment_ind</i>
                                </div>
                                <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">680</h5>
                                    <p class="no-margin">Confir-mados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l6 xl3">
                    <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                        <div class="padding-4">
                            <div class="row">
                                <div class="col s7 m7">
                                    <i class="material-icons background-round mt-5">assignment_late</i>
                                </div>
                                <div class="col s5 m5 right-align">
                                    <h5 class="mb-0 white-text">10</h5>
                                    <p class="no-margin">Desistentes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

               <div class="row">
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/schedule.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Gestão de Ano Lectivo</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow  border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/lista-de.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Livro de Matrícula</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow  border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/notas-adesivas.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Exames e Lançamento de Notas</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/quadro.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4"> Aulas e Sumário</h6>

                            </div>
                        </div>
                    </div>
                </div><!---fim da linha-->
                <div class="row">

                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/recebimento.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4"> Balcão de  Pagamento</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow  border-radius-3">
                            <div class="card-content center">
                                <a href=""> <img src="{{ asset("images/sikola/prof.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Lista de Docentes</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/alunos.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4"> Gestão de Alunos</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/atl.jpg") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Acividades de Tempos Livres</h6>

                            </div>
                        </div>
                    </div>
                </div><!---fim da linha-->
                <div class="row">
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/arquivo.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Requisição de Documentos</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/uniforme.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Artigos e Serviços</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/onibus-escolar.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Serviço de Transportes</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="card gradient-shadow border-radius-3">
                            <div class="card-content center">
                                <a href=""><img src="{{ asset("images/sikola/mapaAproveitamento.png") }}" alt="images" class="width-30"></a>
                                <h6 class="green-text lighten-4">Mapas de Aproveitamento</h6>

                            </div>
                        </div>
                    </div>
                </div><!---fim da linha-->


            <div id="sales-chart">
                <div class="col s12 m6 l4">
                    <div class="card padding-4 animate fadeLeft gradient-shadow">
                        <div class="row">
                            <div class="col s5 m5">
                                <h5 class="mb-0">1885</h5>
                                <p class="no-margin">New</p>
                                <p class="mb-0 pt-8">1,12,900</p>
                            </div>
                            <div class="col s7 m7 right-align">
                                <i class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
                                <p class="mb-0">Total Clients</p>
                            </div>
                        </div>
                    </div>
                    <div id="chartjs" class="card pt-0 pb-0 animate fadeLeft gradient-shadow">
                        <div class="dashboard-revenue-wrapper padding-2 ml-2">
                            <span class="new badge gradient-45deg-indigo-purple gradient-shadow mt-2 mr-2">+ $900</span>
                            <p class="mt-2 mb-0 font-weight-600">Today's revenue</p>
                            <p class="no-margin grey-text lighten-3">$40,512 avg</p>
                            <h5>$ 22,300</h5>
                        </div>
                        <div class="sample-chart-wrapper card-gradient-chart">
                            <canvas id="custom-line-chart-sample-three" class="center"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l8">
                    <div class="card subscriber-list-card animate fadeRight gradient-shadow">
                        <div class="card-content pb-1">
                            <h4 class="card-title mb-0">Subscriber List <i class="material-icons float-right">more_vert</i></h4>
                        </div>
                        <table class="subscription-table responsive-table highlight">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Start Date</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Michael Austin</td>
                                <td>ABC Fintech LTD.</td>
                                <td>Jan 1,2019</td>
                                <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                                <td>$ 1000.00</td>
                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                            </tr>
                            <tr>
                                <td>Aldin Rakić</td>
                                <td>ACME Pvt LTD.</td>
                                <td>Jan 10,2019</td>
                                <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                                <td>$ 3000.00</td>
                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                            </tr>
                            <tr>
                                <td>İris Yılmaz</td>
                                <td>Collboy Tech LTD.</td>
                                <td>Jan 12,2019</td>
                                <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                                <td>$ 2000.00</td>
                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                            </tr>
                            <tr>
                                <td>Lidia Livescu</td>
                                <td>My Fintech LTD.</td>
                                <td>Jan 14,2019</td>
                                <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                                <td>$ 1100.00</td>
                                <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
    <!--div style="bottom: 54px; right: 19px;" class="fixed-action-btn direction-top active">
      <a class="btn-floating btn-large primary-text gradient-shadow contact-sidebar-trigger" href="#modal1">
        <i class="material-icons">person_add</i>
      </a>
    </div-->
        </section>
    </div>
@endsection
