@extends('layouts/contentLayoutMaster')

@section("title","Lista de Inscritos")
{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2-materialize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/select2/select2.min.css')}}">
@endsection


@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0 " style="color: white">
                        <span><i class="material-icons left">storage</i>Gestão de Alunos(as)</span>
                    </p>
                </div>
            </div>


            <x-pesquisa-aluno />
                <!--div class="card ">
                   <div class="card-content ">

                    </div>
                </div-->

                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <div class=" row">
                                    <div class="col s3 left">
                                       <div class="row box-shadow">
                                         <img height="64" width="64"  src="{{ asset("images/avatar/avatar-1.png") }}" alt="Sikola logo" />
                                       </div>
                                    </div>
                                    <div class="col s9 right">
                                        <ul>
                                            <li>
                                            <span>Nº de Inscrição:0283</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col s12">
                                        <ul>
                                            <li>
                                              <span>Nome: João Felipe Santos Patrícia</span>
                                            </li>
                                            <li>
                                             <span>Data de Nascimento: 02-30-2010</span>
                                            </li>
                                            <li>
                                             <span>Curso: informática de gestão</span>
                                            </li>
                                            <li>
                                             <span>Turma: 9B203</span>
                                            </li>
                                            <li>
                                                <span>Status: </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    <div class="row">
                                        <a class="btn-flat2  mycon_red tooltipped waves-effect waves-light "data-position="right" data-tooltip="Eliminar dados do Aluno"  type="submit" name="action">
                                        <i class="material-icons ">cancel</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped  waves-effect waves-light "data-position="left" data-tooltip="Históricos de Ocorrencia" type="submit" name="action">
                                            <i class="material-icons ">view_headline</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="right" data-tooltip="Históricos de Notas" type="submit" name="action">
                                            <i class="material-icons ">event_note</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light " data-position="left" data-tooltip="Conta Corrente do Aluno" type="submit" name="action">
                                        <i class="material-icons "> monetization_on</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="right" data-tooltip="Trocar Turma ou Curso" type="submit" name="action">
                                        <i class="material-icons ">swap_horiz</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="left" data-tooltip="Editar Ficha do Aluno" type="submit" name="action">
                                            <i class="material-icons ">edit</i >
                                        </a>
                                </div>
                                <div class="row">
                                    <span>Criado por: @Utilizador</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <div class=" row">
                                    <div class="col s3 left">
                                       <div class="row box-shadow">
                                         <img height="64" width="64"  src="{{ asset("images/avatar/avatar-1.png") }}" alt="Sikola logo" />
                                       </div>
                                    </div>
                                    <div class="col s9 right">
                                        <ul>
                                            <li>
                                            <span>Nº de Inscrição:0283</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col s12">
                                        <ul>
                                            <li>
                                              <span>Nome: João Felipe Santos Patrícia</span>
                                            </li>
                                            <li>
                                             <span>Data de Nascimento: 02-30-2010</span>
                                            </li>
                                            <li>
                                             <span>Curso: informática de gestão</span>
                                            </li>
                                            <li>
                                             <span>Turma: 9B203</span>
                                            </li>
                                            <li>
                                                <span>Status: </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    <div class="row">
                                        <a class="btn-flat2  mycon_red tooltipped waves-effect waves-light "data-position="right" data-tooltip="Eliminar dados do Aluno"  type="submit" name="action">
                                        <i class="material-icons ">cancel</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped  waves-effect waves-light "data-position="left" data-tooltip="Históricos de Ocorrencia" type="submit" name="action">
                                            <i class="material-icons ">view_headline</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="right" data-tooltip="Históricos de Notas" type="submit" name="action">
                                            <i class="material-icons ">event_note</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light " data-position="left" data-tooltip="Conta Corrente do Aluno" type="submit" name="action">
                                        <i class="material-icons "> monetization_on</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="right" data-tooltip="Trocar Turma ou Curso" type="submit" name="action">
                                        <i class="material-icons ">swap_horiz</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="left" data-tooltip="Editar Ficha do Aluno" type="submit" name="action">
                                            <i class="material-icons ">edit</i >
                                        </a>
                                </div>
                                <div class="row">
                                    <span>Criado por: @Utilizador</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-content">
                                <div class=" row">
                                    <div class="col s3 left">
                                       <div class="row box-shadow">
                                         <img height="64" width="64"  src="{{ asset("images/avatar/avatar-1.png") }}" alt="Sikola logo" />
                                       </div>
                                    </div>
                                    <div class="col s9 right">
                                        <ul>
                                            <li>
                                            <span>Nº de Inscrição:0283</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col s12">
                                        <ul>
                                            <li>
                                              <span>Nome: João Felipe Santos Patrícia</span>
                                            </li>
                                            <li>
                                             <span>Data de Nascimento: 02-30-2010</span>
                                            </li>
                                            <li>
                                             <span>Curso: informática de gestão</span>
                                            </li>
                                            <li>
                                             <span>Turma: 9B203</span>
                                            </li>
                                            <li>
                                                <span>Status: </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    <div class="row">
                                        <a class="btn-flat2  mycon_red tooltipped waves-effect waves-light "data-position="right" data-tooltip="Eliminar dados do Aluno"  type="submit" name="action">
                                        <i class="material-icons ">cancel</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped  waves-effect waves-light "data-position="left" data-tooltip="Históricos de Ocorrencia" type="submit" name="action">
                                            <i class="material-icons ">view_headline</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="right" data-tooltip="Históricos de Notas" type="submit" name="action">
                                            <i class="material-icons ">event_note</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light " data-position="left" data-tooltip="Conta Corrente do Aluno" type="submit" name="action">
                                        <i class="material-icons "> monetization_on</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="right" data-tooltip="Trocar Turma ou Curso" type="submit" name="action">
                                        <i class="material-icons ">swap_horiz</i >
                                        </a>
                                        <a class="btn-flat2 tooltipped waves-effect waves-light "data-position="left" data-tooltip="Editar Ficha do Aluno" type="submit" name="action">
                                            <i class="material-icons ">edit</i >
                                        </a>
                                </div>
                                <div class="row">
                                    <span>Criado por: @Utilizador</span>
                                </div>
                            </div>
                        </div>
                    </div>


                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                        <a class="modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
                            <i class="material-icons">person_add</i>
                        </a>
                        <ul>
                            <li><a href="{{ route('admin.cadastro') }}"  class="btn-floating tooltipped  blue" data-position="left" data-tooltip="Simplificado" ><i class="material-icons">person_pin</i></a>
                            </li>
                            <li><a href="{{ route('admin.inscricaocompleta') }}" class="btn-floating tooltipped  green" data-position="left" data-tooltip="Completo" ><i class="material-icons">account_circle</i></a>
                            </li>
                            <li><a href="{{ route('admin.inscricaocompleta') }}" class="btn-floating tooltipped orange" data-position="left" data-tooltip="Listagem" ><i class="material-icons">local_printshop</i></a>
                            </li>
                        </ul>
                </div>
            </section>
        </div>
    </div>
@endsection


@section('vendor-script')
<script src="{{asset('vendors/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('vendors/sortable/jquery-sortable-min.js') }}"></script>
<script src="{{asset('vendors/quill/quill.min.js') }}"></script>
<script src="{{asset('vendors/select2/select2.full.min.js')}}"></script>
@endsection
{{-- ---- --}}
@section('js')
<script src="{{asset('js/custom/custom-script.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/search.js') }}"></script>
<script src="{{asset('js/scripts/form-select2.js')}}"></script>
@endsection
