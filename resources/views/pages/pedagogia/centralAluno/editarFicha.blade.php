@extends('layouts/contentLayoutMaster')

@section("title","Editar Ficha de Aluno")

{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection

{{-- page content --}}
@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

                    <div class="card green darken-1">
                        <div class="card-content">
                                <p class="caption mb-0 " style="color: white"><i class="material-icons left">account_circle</i>
                                    <span>Ficha de Matrícula(Pedagógicas)</span>
                                </p>
                        </div>
                    </div>
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                        <div class="col s9 left">

                                                           <div class="row ">
                                                                <div class=" col m3 ">
                                                                    <label for="preco">Nº de Inscrição:</label>
                                                                    <input type="text" class="validate" name="preco1" id="preco"  required>
                                                                </div>

                                                                <div class=" col m9 ">
                                                                    <label for="designa">Nome Completo:</label>
                                                                    <input type="text" class="validate" name="designa" id="designa"  required>
                                                                </div>

                                                            </div>

                                                            <div class="row ">
                                                                <div class=" col m4 ">
                                                                    <label for="preco">Documento:</label>
                                                                    <input type="text" class="validate" name="preco1" id="preco"  required>
                                                                </div>

                                                                <div class=" col m4 ">
                                                                    <label for="designa">Nº Documento:</label>
                                                                    <input type="text" class="validate" name="designa" id="designa"  required>
                                                                </div>
                                                                <div class=" col m4 ">

                                                                    <label for="designa">Situação Actual</label>
                                                                    <input type="text" class="validate" name="designa" id="designa"  required>

                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col m4 s12">
                                                                    <select class="validate">
                                                                        <option value=" " disabled selected> </option>
                                                                        <option value="1">selecione</option>
                                                                        <option value="2">Femenino</option>
                                                                    </select>
                                                                    <label>Ano  Lectivo</label>
                                                                </div>
                                                                <div class=" col m4 s12">
                                                                    <label  for="nC">Data</label>
                                                                    <input type="text" class="validate datepicker" id="firstName" required>
                                                                </div>
                                                                <div class="input-field col m4 s12">
                                                                    <select class="validate">
                                                                        <option value=" " disabled selected> Selecione Situação</option>
                                                                        <option value="1">Aguardar Confirmação</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                        </div>


                                                        <div class="col s3 right ">
                                                            <div class="row box-shadow">
                                                                <div id="file-upload" class="section ">
                                                                    <div class="row section">

                                                                        <div class="col s12 m12 ">
                                                                            <input type="file" id="input-file-events" class="dropify-event" data-default-file="../app-assets/images/gallery/49.jpg" />

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>
                                            <div class="row mb-2">
                                                <div class="col m12 s12">

                                                        <div class="input-field col m6 s12">
                                                            <select class="validate">
                                                                <option value=" " disabled selected>seleccione </option>
                                                                <option value="1">selecione</option>
                                                                <option value="2">Femenino</option>
                                                            </select>
                                                            <label for="t">Unidade Orgânica</label>
                                                        </div>
                                                        <div class="input-field col m6 s12">
                                                            <select class="validate">
                                                                <option value=" " disabled selected> </option>
                                                                <option value="1">Informática</option>

                                                            </select>
                                                            <label for="t">Nome do Curso</label>
                                                        </div>
                                                        <div class="input-field col m4 s12">
                                                            <select class="validate">
                                                                <option value=" " disabled selected> </option>
                                                                <option value="1">selecione</option>
                                                                <option value="2">Femenino</option>
                                                            </select>
                                                            <label for="t">Ano  Currícular</label>
                                                        </div>

                                                        <div class="input-field col m4 s12">
                                                            <select class="validate">
                                                                <option value=" " disabled selected> </option>
                                                                <option value="1">Bilhete</option>
                                                                <option value="2">Cédula</option>
                                                                <option value="3">Passa-Porte</option>
                                                            </select>
                                                            <label>Turno</label>
                                                        </div>
                                                        <div class="input-field col m4 s12">
                                                            <select class="validate">
                                                                <option value=" " disabled selected> </option>
                                                                <option value="1">Bilhete</option>
                                                                <option value="2">Cédula</option>
                                                                <option value="3">Passa-Porte</option>
                                                            </select>
                                                            <label>Turma com Vagas</label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div><!--fim card-contante-->

                                    </div>
                                        <div id="card  col m12 s12  mb-2">
                                            <div class="row ">
                                                <div class="row right ">
                                                    <button class="btn btn-light-indigo waves-light waves-effect" type="submit" name="action">
                                                        Salvar<i class="material-icons left">save</i >
                                                    </button>
                                                    <button class="btn btn-light-indigo waves-light waves-effect" type="submit" name="action">
                                                        Imprimir<i class="material-icons left">local_printshop</i >
                                                    </button>
                                                    <a href="{{-- route('admin.livroMatricula') --}}" class="btn btn-light-red waves-effect waves-light" type="submit" name="action">
                                                        Sair <i class="material-icons left">reply</i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>


            </section>
        </div>
    </div>
 @endsection

{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/dropify/js/dropify.min.js')}}"></script>
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection
{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
<script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
@endsection
