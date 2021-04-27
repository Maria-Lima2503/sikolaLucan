@extends('layouts/contentLayoutMaster')

@section("title","Livro de Matrícula")

{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">supervisor_account</i>
                        <span>Livro de Matrícula</span>
                    </p>
                </div>
            </div>

            <div class="card ">
                <div class="card-content ">
                <form method="get">
                    <div class="row ">
                        <div class="input-field col m2" >
                            <select class="validate">
                                <option value=" " disabled selected></option>
                                <option value="1">2020 </option>
                            </select>
                            <label> Ano Lectivo</label>
                        </div>

                        <div class="input-field col m4 s12">
                            <label for="designa">Curso:</label>
                            <input type="text" id="autocomplete-input" class="validate autocomplete" id="curso"  required>
                        </div>
                        <div class="input-field col m2 " >
                            <select class="validate">
                                <option value=" " disabled selected></option>
                                <option value="1">10ªClasse</option>
                            </select>
                            <label>Classes</label>
                        </div>
                        <div class="input-field col m2 s12">
                            <label  for="nC">De</label>
                            <input type="text" class="validate datepicker" id="firstName" required>
                        </div>
                        <div class="input-field col m2 s12">
                            <label  for="nC">Até</label>
                            <input type="text" class="validate datepicker" id="firstName" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col m2 s12">
                            <label  for="nC">Nº de Inscrição</label>
                            <input type="text" class="validate" id="firstName" required>
                        </div>
                        <div class="input-field col m4 s12">
                            <input  id="autocomplete-input" class="autocomplete  validate" type="text" required>
                            <label for="autocomplete-input" for="nC">Nome:</label>
                        </div>
                        <div class="input-field col m4 " >
                            <select class="validate">
                                <option value=" " disabled selected></option>
                                <option value="1">Solicitar Transferêcia</option>
                            </select>
                            <label>Situação Acadêmica</label>
                        </div>
                        <div class="input-field col m2 " >
                            <select class="validate">
                                <option value=" " disabled selected></option>
                                <option value="1">Com Turma </option>
                                <option value="1">Sem Turma </option>
                            </select>
                            <label>Status</label>
                        </div>
                        <button class="btn box-shadow btn-light-orange darken-1 waves-effect waves-light mt-2 mb-1 right" type="submit" name="action">
                            Pesquisar<i class="material-icons right">search</i >
                        </button>
                    </div>
                </form>
                </div>
             </div>

            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <p class="center"><a class="btn waves-light waves-effect box-shadow-none border-round" type="submit" name="action"href="{{-- route('admin.listar') --}}" >
                        Matrícula em Demanda
                    </a>
                    <a class="btn waves-light waves-effect box-shadow-none border-round" type="submit" name="action">
                        Guias de Transferência
                    </a>
                    <a class="btn waves-light waves-effect box-shadow-none border-round" type="submit" name="action">
                        Transferências P/Ano Anterior
                    </a>
                    </p>
                </div>
                <div class="responsive-table">
                    <table class="table invoice-data-table white border-radius-4 pt-1">
                        <thead  class="teal lighten-4 ">
                            <tr>
                                <th></th>
                                <th role="row"><span>Número</span></th>
                                <th>Nº de Inscrição</th>
                                <th>Nome Completo</th>
                                <th>Curso</th>
                                <th>Classe</th>
                                <th>Situação</th>
                                <th>Acção</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr role="row" class="odd">
                                     <!--td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes"/--> 
                                       <td class=""><input type="checkbox"/></td>
                                       <td class="sorting_1"> <a href="{{ route('admin.editarFicha') }}">00123</a></td>
                                       <td><span class="invoice-amount">1029</span></td>
                                       <td><small>Marta Francisco</small></td>
                                       <td><span class="invoice-customer">INF </span></td>
                                       <td><span class="bullet blue"></span><small>Car</small></td>
                                       <td><span class="chip lighten-5 green green-text">matriculado</span></td>
                                       <td><div class="invoice-action">
                                         <a href="" class="invoice-action-view mr-4">
                                            <i class="material-icons">remove_red_eye</i>
                                         </a>
                                         <a href="{{ route('admin.editarFicha') }}" class="invoice-action-edit">
                                            <i class="material-icons">edit</i>
                                         </a></div>
                                       </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                <a href="{{ route('admin.cadastro') }}"class="modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
                    <i class="material-icons">person_add</i>
                </a>
            </div>
        </section>
    </div>
</div>
@endsection
{{-- vendor styles --}}
{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection
