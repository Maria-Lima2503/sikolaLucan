@extends('layouts/contentLayoutMaster')

@section("title","Adicionar Docentes ")

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">
            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"> <i class="material-icons  left">account_circle</i>
                        <span>Casdastro de Funcionário/Docente</span>
                    </p>
                </div>
            </div>
                        <div class="card  mb-2">
                            <div class="card-content mb-2">
                                <div class="row">
                                    <div class="col s12">
                                            <div class="col s12">
                                                <x-dados_pessoa />
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div  class="card position-none">
                                <div class="row">
                                    <div class="col s12">
                                        <ul class="tabs card-border-gray ">
                                                <li class="tab col m6  p-0 "><a class="active" href="#opcao1">Dados de Funcionário</a></li>
                                                <li class="tab col m6  p-0 "><a href="#opcao2">Contactos & Localização</a></li>

                                        </ul>
                                    </div>
                                </div>


                                <div id="opcao1" class="row">
                                    <div class="card-content">

                                    <div class="col s12">
                                    <div class="input-field col m6 ">
                                        <select class="validate">
                                            <option value=" " disabled selected>Selecione </option>
                                            <option value="1">Doutorado/a</option>

                                        </select>
                                        <label>Habilitações Literárias</label>
                                    </div>
                                    <div class="input-field col m6 ">
                                        <select class="validate">
                                            <option value=" " disabled selected> selecione </option>
                                            <option value="1">Bla bla bla</option>
                                        </select>
                                        <label>Formação Académica(Curso)</label>
                                    </div>
                                    </div>
                                    <div class="col s12">

                                        <div class=" col m3">
                                            <label>Data de Admissão</label>
                                            <input type="text" class="validate datepicker" name="lastName" required>
                                        </div>
                                        <div class=" col m3">
                                            <label>Categoria Salarial</label>
                                            <input type="text"class="validate" name="lastName" required>
                                        </div>
                                        <div class=" col m3">
                                            <label>Utilizador</label>
                                            <input type="text" class="validate" name="lastName" required>
                                        </div>
                                        <div class=" col m3">
                                            <label>Palavra-Passa</label>
                                            <input type="text" class="validate" name="lastName" required>
                                        </div>
                                    </div>

                                    </div>
                                </div>

                                    <div id="opcao2" class="row">
                                        <div class="card-content">

                                                <div class="row">
                                                    <div class="row col m6">
                                                        <h6 class="mb-2">Residência <i class="material-icons">call</i></h6>

                                                            <div class="input-field col m12 s12">
                                                                <select class="validate">
                                                                        <option value=" " disabled selected> </option>
                                                                        <option value="1"></option>
                                                                        <option value="2">Femenino</option>
                                                                </select>
                                                                <label for="t">Município</label>
                                                            </div>
                                                            <div class="input-field col m6 s12">
                                                                <select class="validate">
                                                                    <option value=" "disabled selected> </option>
                                                                    <option value="1">Cabolombo</option>
                                                                    <option value="2">Femenino</option>
                                                                </select>
                                                                <label >Distrito</label>
                                                            </div>
                                                            <div class=" col m6 s12">
                                                                <label  for="kj">Bairro</label>
                                                                <input type="text" class="validate" id="firstName" required>
                                                            </div>
                                                        </div>

                                                        <div class="row col m6">
                                                            <h6 class="mb-2">Telefones<i class="material-icons"></i></h6>

                                                            <div class=" col m6 s12">
                                                                <label  for="nO">Tel. Residencial</label>
                                                                <input type="text" class="validate" id="firstName" required>
                                                            </div>
                                                            <div class=" col m6 s12">
                                                                <label  for="nC">Telefone 1:</label>
                                                                <input type="text" class="validate" id="firstName" required>
                                                            </div>

                                                            <div class=" col m6 s12">
                                                                <label  for="nC">Email:</label>
                                                                <input type="email" class="validate" id="firstName" required>
                                                            </div>
                                                            <div class=" col m6 s12">
                                                                <label  for="nC">Email Alt2:</label>
                                                                <input type="email" class="validate" id="firstName" required>
                                                            </div>
                                                        </div>

                                                </div>
                                        </div>
                                    </div>
                        </div>

                        <x-botoes_cadastro />

                  </div><!----fim de DIV geral-->
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
@endsection
