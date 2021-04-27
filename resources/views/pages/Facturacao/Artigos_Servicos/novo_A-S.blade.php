@extends('layouts/contentLayoutMaster')

@section("title","Novo Artigo/Serviço")

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/charts-sparkline.css')}}">
@endsection
{{-- page content --}}
@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"> <i class="material-icons left">local_offer</i>
                        <span>Ficha de Artigo ou Serviços</span>
                    </p>
                </div>
            </div>

            <div class="row ">
            <div class="card">
                <div class="card-content">
                    <div class="row ">

                            <p class="col m3"><label>
                                <input type="checkbox"/><span>Activo </span>
                            </label></p>
                            <p class="col m3"><label>
                                <input type="checkbox"/><span>Cobrança Obrigatória</span>
                            </label></p>
                            <p class="col m6"><label>
                                <input type="checkbox"/><span>Artigo ou Serviço Facturado por Entidade Externa</span>
                            </label></p>

                            <p class="col m3"><label>
                                <input type="checkbox"/><span>Artigo Composto</span>
                            </label></p>
                            <p class="col m3"><label>
                                <input type="checkbox"/><span>Este Artigo Movimenta Stock </span>
                            </label></p>
                            <p class="col m3"><label>
                                <input type="checkbox"/><span>Incluir Retenção na Fonte</span>
                            </label></p>


                    </div>
                </div>
            </div>
            </div>
            <div class="card">
                <div class="card-content ">
                    <div class="row">
                            <h5> <i class="material-icons mb-1 mt-1">date_range</i>Preencha Ficha </h5>

                                <div class="col m2 s12">
                                    <div class="row box-shadow">
                                        <div id="file-upload" class="section">
                                            <div class="row section">

                                                <div class="col s12 ">
                                                    <input type="file" id="input-file-events" class="dropify-event mb-2 " data-default-file="{{ asset("images/sikola/19.png") }}" />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                    <div class="col m10 s12 mt-3">

                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <select>
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Escola</option>
                                                </select>
                                                <label>Entidade/Instituição</label>
                                            </div>

                                            <div class="input-field col m6 s12">
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Deposito a pronto</option>

                                                </select>
                                                <label>Referência no Plano de Contas</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col m2 s12">
                                                <select>
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">1999</option>
                                                    <option value="2">2019</option>
                                                </select>
                                                <label>Ano Lectivo</label>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <select>
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Produto</option>
                                                    <option value="2">serviço</option>
                                                </select>
                                                <label> Família/Categoria</label>
                                            </div>

                                            <div class="input-field col m4 s12">
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Instituto Médio de Saúde</option>
                                                    <option value="2">Ensino Geral</option>
                                                </select>
                                                <label>Departamento/Coordenação</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col m6 s12">
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Deposito a pronto</option>
                                                </select>
                                                <label>Curso</label>
                                            </div>
                                            <div class="input-field col m2">
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">1ªClasse</option>
                                                </select>
                                                <label>De Ano Currícular</label>
                                            </div>
                                            <div class="input-field col m2">
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">5ªclasse</option>
                                                </select>
                                                <label>Até Ano Currícular</label>
                                            </div>
                                            <div class="input-field col m2">
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Todos</option>
                                                </select>
                                                <label>Turno</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field  col m4">
                                                <label for="designa">Designação do Serviço/Produto:</label>
                                                <input type="text" class="validate" name="designa" id="designa"  required>
                                            </div>
                                            <div class="input-field  col m2 s12">
                                                <label  for="nC">Preço Unitário</label>
                                                <input type="text" class="validate " id="firstName" required>
                                            </div>
                                            <div class="input-field col m6 s12">
                                                <select class="validate">
                                                    <option value=" " disabled selected> </option>
                                                    <option value="1">Iva 5% Isenção de quarenta porcento</option>
                                                    <option value="2">Femenino</option>
                                                </select>
                                                <label for="t">Imposto</label>
                                            </div>
                                        </div>

                                    </div>
                    </div>
                </div>
            </div>


                <div id="botoes">
                    <div class="row col s12 mb-1">
                            <div class="row left ">
                                <button class="btn btn-light-indigo waves-light waves-effect" type="submit" name="action">
                                    Salvar<i class="material-icons left">save</i >
                                </button>
                                <button class="btn  btn-light-indigo waves-light waves-effect" type="submit" name="action">
                                    Salvar e Novo<i class="material-icons left">settings_backup_restore</i >
                                </button>
                            </div>

                            <div class="row right ">
                                <button class="btn  btn-light-red waves-effect waves-light" type="submit" name="action">
                                    Limpar <i class="material-icons left">clear</i>
                                </button>
                                <a href="" class="btn btn-light-red waves-effect waves-light" type="submit" name="action">
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
@endsection
