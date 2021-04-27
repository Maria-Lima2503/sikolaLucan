@extends('layouts/contentLayoutMaster')

@section("title","Editar Ano Lectivo")
{{-- vendor style --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection
@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

                    <div class="card green darken-1">
                        <div class="card-content">
                            <p class="caption mb-0" style="color: white"><i class="material-icons left">today</i>
                                <span>Configuração De Ano Lectivo</span>
                            </p>
                        </div>
                    </div>

    <!-- jQuery Plugin Initialization -->
    <div class="row">
        <div class="col s12 m6 l6">
            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Dados do Ano</h4>
                        <form>
                            <div class="row">
                                <div class="input-field  col s12">
                                    <label for="name4">Ano</label>
                                  <input id="name4" type="text" class="validate">
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field  col m6 s12">
                                    <label for="name4">Descrição de Ano</label>
                                  <input id="descricao" type="text" class="validate">
                                </div>
                                <div class="input-field  col m6 s12">
                                    <label for="password5">Nº de Perído</label>
                                   <input type="text" class="validate" id="firstName" required>
                                 </div>
                            </div>

                              <div class="row">
                                <div class="input-field  col m6 s12">
                                  <label for="password5">Data de Início</label>
                                  <input type="text" class="validate datepicker" id="firstName" required>
                                </div>
                                <div class="input-field  col m6 s12">
                                    <label for="password5">Data de Término</label>
                                   <input type="text" class="validate datepicker" id="firstName" required>
                                 </div>
                              </div>


                                <div class="row">
                                    <div class=" col s12">
                                    <p>
                                        <label>
                                            <input class="validate" required="" id="tnc_select1" type="checkbox">
                                            <span>Manter Ano Activo </span>
                                        </label>
                                    </p>
                                    </div>
                                </div>
                        </form>
                    </div>
            </div>
        </div>

        <div class="col s12 m6 l6">
            <div id="placeholder" class="card card card-default scrollspy">
                <div class="card-content">
                    <h4 class="card-title">Edição de Período</h4>
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                <thead class=" ">
                                    <tr>
                                        <th  role="row">
                                                <span>Período</span>
                                        </th>
                                        <th>Status</th>
                                        <th>Início</th>
                                        <th>Término</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr  role="row" class="even">
                                        <td class="sorting_1">Trimestre </td>
                                        <td><div class="input-field" style="height:3.5rem;">
                                            <select>
                                                <option value=" " disabled selected></option>
                                                <option value="1">Activo</option>
                                            </select>
                                        </div></td>
                                        <td><input type="text" class="input-field validate datepicker" id="firstName" required></td>
                                        <td><small><input type="text" class="input-field validate datepicker" id="firstName" required></small></td>


                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                <div id="row  col s12  mb-2">
                    <div class="row center ">
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
        </section>
    </div>
</div>
@endsection
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
@endsection
@section('vendor-script')
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection
