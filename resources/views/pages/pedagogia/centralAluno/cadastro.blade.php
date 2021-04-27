@extends('layouts/contentLayoutMaster')

@section("title","Inscrição Simplificada")

{{-- vendor styles --}}
@section('vendor-style')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection

{{-- page content --}}
@section("content")

<div class="section">
    <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0 " style="color: white"><i class="material-icons left">account_circle</i>
                        <span>Inscrição de Aluno</span>
                    </p>
                </div>
            </div>

                    <div id="placeholder" class="card card card-default scrollspy">
                        <div class="card-content">
                           <div class="row" id="view-validations">
                            <form class="formValidate" id="formValidate" method="get">
                                    <div class="input-field col m6 s12 ">
                                        <select>
                                            <option value=" " disabled selected></option>
                                            <option value="1">Escolinha da Paz</option>
                                            <option value="2">Palanquinhas</option>
                                        </select>
                                        <label>Unidade de Ensino</label>
                                    </div>

                                    <div class="input-field col m3 s12 ">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">2020 </option>
                                        </select>
                                        <label> Ano Lectivo</label>
                                    </div>
                                    <div class="input-field col m3 ">
                                        <label for="preco">Nº de Processo:</label>
                                        <input type="text" class="validate" name="preco1" id="preco" required>
                                    </div>

                                    <x-dados_pessoa />
                            </form>
                            </div>
                        </div>
                    </div>

                    <div class="card position-none">
                        <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <h4 class="card-title">Dados Garais do Ano</h4>
                                    </div>
                                    <form class="formValidate" id="formValidate" method="get">

                                        <div class="col s12">
                                            <div class="input-field col m6">
                                                <label>Morada</label>
                                                <input id="uname" name="uname" type="text" required data-error=".errorTxt1">
                                                <small class="errorTxt1"></small>
                                            </div>
                                            <div class="input-field col m3 s12 ">
                                                <select>
                                                        <option value=" " disabled selected></option>
                                                        <option value="1">a Paz</option>
                                                </select>
                                                <label>Município</label>
                                            </div>
                                            <div class="input-field col m3 s12 ">
                                                <select>
                                                        <option value=" " disabled selected></option>
                                                        <option value="1">a Paz</option>
                                                </select>
                                                <label>Distrito</label>
                                            </div>
                                        </div>

                                        <div class="col s12">
                                            <div class="input-field col m6">
                                                <label for="email4">Email</label>
                                                <input id="email4" type="email" class="validate">

                                              </div>
                                            <div class="input-field col m3">
                                                <label>Telefone.1</label>
                                                <input type="text" class="validate" name="lastName" required>
                                            </div>
                                            <div class="input-field col m3">
                                                <label>Telefone.2</label>
                                                <input type="text" class="validate" name="lastName" required>
                                            </div>

                                        </div>
                                        <div class="col s12">

                                            <div class="input-field col m6 ">
                                                    <select class="validate">
                                                        <option value=" " disabled selected> </option>
                                                        <option value="1">selecione</option>
                                                    </select>
                                                <label>Curso</label>
                                            </div>
                                            <div class="input-field col m2 ">
                                                <select class="validate">
                                                    <option value=" " disabled selected> </option>
                                                    <option value="1">selecione</option>
                                                </select>
                                                <label>Classe</label>
                                            </div>
                                            <div class="input-field col m2 ">
                                                <select class="validate">
                                                    <option value=" " disabled selected> </option>
                                                    <option value="1">selecione</option>
                                                </select>
                                                <label>Turno</label>
                                            </div>
                                            <div class="input-field col m2 ">
                                                <select class="validate">
                                                    <option value=" " disabled selected> </option>
                                                    <option value="1">selecione</option>
                                                </select>
                                                <label>Turma</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>

                 <x-botoes_cadastro />

        </section>

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
@endsection
