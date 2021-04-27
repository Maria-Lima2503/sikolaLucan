@extends('layouts/contentLayoutMaster')

@section("title","Solicitar de Movimentação")

@section("content")
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{-- asset('vendors/data-tables/css/jquery.dataTables.min.css') --}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/data-tables.css')}}">
@endsection

<div class="section">
    <div class="container">

        <section class="users-list-wrapper section">


            <div class="card green darken-1 " >
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"> <i class="material-icons left">exit_to_app</i>
                        <span>Solicitação de Movimentção</span>

                    </p>
                </div>
            </div>

                        <div class="card">

                            <div class="card-content ">

                                    <div class="row">

                                            <div class="row ">
                                                <div class="input-field col m3 s12 " >
                                                    <select class="validate">
                                                        <option value=" " disabled selected></option>
                                                        <option value="1">2020 </option>
                                                    </select>
                                                    <label> Ano Lectivo</label>
                                                </div>

                                                <div class="input-field col m6 s12 " >
                                                    <select class="validate">
                                                        <option value=" " disabled selected></option>
                                                        <option value="1">2020 </option>
                                                    </select>
                                                    <label for="designa">Curso:</label>
                                                </div>

                                                <div class="input-field col m3 s12 " >
                                                    <select class="validate">
                                                        <option value=" " disabled selected></option>
                                                        <option value="1">2020 </option>
                                                    </select>
                                                    <label  for="nC">Turma</label>
                                                </div>
                                            </div>

                                            <div class="row ">

                                              <div class=" col m6 s12">
                                                <label  for="nC">Nome:</label>
                                                <input type="text" class="validate" id="firstName" required>
                                              </div>

                                                <div class="input-field col m3 s12 " >
                                                    <select class="validate">
                                                        <option value=" " disabled selected></option>
                                                        <option value="1">Matriculados </option>
                                                        <option value="2">Sem confirmação</option>
                                                        <option value="2">Não Matriculado</option>
                                                    </select>
                                                    <label>Situação</label>
                                                </div>

                                              <div class=" col m3 s12 right">
                                                <a class="btn box-shadow btn-light-orange waves-effect waves-light mt-2 mb-2 right" type="submit" name="action">
                                                    Pesquisar<i class="material-icons right">search</i >
                                                </a>
                                              </div>

                                            </div>

                                    </div>

                            </div>
                        </div><!--Fim de card-->

                            <div class="row">
                                <div id="basic-form" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <div class="col s12  ">
                                            <a href="#modal1" class="btn modal-trigger box-shadow-none border-round mr-1 mb-1  waves-light right " >
                                                Trocar de turma
                                            </a>
                                            <a href="#modal2" class="btn modal-trigger box-shadow-none border-round mr-1 mb-1 waves-light right" >
                                                Trocar de Curso
                                            </a>
                                            <a href="#modal3" class="btn modal-trigger box-shadow-none border-round mr-1 mb-1 waves-light right " >
                                                Guia de Transferência
                                            </a>
                                            <a href="" class="btn modal-trigger box-shadow-none border-round mr-1 mb-1 waves-light right" >
                                                Matrícula em Demanda
                                            </a>

                                        </div>
                                    </div>
                                    <div class="responsive-table">
                                        <table id="multi-select" class="table  invoice-data-table white border-radius-4 pt-1">
                                                <thead class="teal lighten-4 ">

                                                    <tr>
                                                        <th>
                                                            <label>
                                                                <input type="checkbox" class="select-all" />
                                                                <span></span>

                                                            </label>
                                                        </th>
                                                        <!--th  role="row">Ano Lectivo</th-->
                                                        <th  role="row">Nº Matrícula</th>
                                                        <th >Nome Completo</th>
                                                        <th > Curso/Turma </th>
                                                        <th > Situação</th>
                                                        <th>Acção</th>

                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0">
                                                            <label>
                                                                <input type="checkbox">
                                                                <span></span>
                                                            </label>
                                                        </td>
                                                        <td class="dt-checkboxes-cell">0009182 </td>
                                                        <!--td  >1029 </td-->
                                                        <td >Maria Miguel  </td>
                                                        <td >Curso-Turma </td>
                                                        <td >Matrículado/a </td>
                                                        <td>
                                                            <div class="invoice-action">
                                                              <a href="app-invoice-view.html" class="invoice-action-view mr-4">
                                                                <i class="material-icons">cancel</i>
                                                              </a>
                                                              <a href="{{-- route('admin.editarFicha') --}}" class="invoice-action-edit">
                                                                <i class="material-icons">edit</i>
                                                              </a>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                </div>
                            </div>


        </section>

    </div>
</div>
@endsection
{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{-- asset('vendors/data-tables/js/jquery.dataTables.min.js') --}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/data-tables.js')}}"></script>
@endsection
