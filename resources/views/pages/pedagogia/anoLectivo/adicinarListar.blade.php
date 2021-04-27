@extends('layouts/contentLayoutMaster')

@section("title","Lista Ano Lectivo")
{{-- page style --}}

@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection

@section("content")
<!-- BEGIN: Page Main-->
<div class="section">
    <div class="container">


    <section class="users-list-wrapper section">

        <div class="card green darken-1">
            <div class="card-content">
                <p class="caption mb-0" style="color: white"><i class="material-icons left">perm_data_setting</i>
                    <span>Gestão De Ano Lectivo</span>
                </p>
            </div>
        </div>

      <div class="card">
        <div class="card-content">
            <div class="responsive-table">
                <table class="table invoice-data-table white border-radius-4 pt-1">
                    <thead class=" ">
                        <tr>
                                <th  role="row">
                                    <span>Ano</span>
                                </th>
                                <th>Status</th>
                                <th>Descrição</th>
                                <th>Início</th>
                                <th>Término</th>
                                <th>  </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr  role="row" class="even">

                            <td class="sorting_1">2020 </td>
                                <td><span class="chip lighten-5 green green-text">activo</span></td>
                                <td>Ano Lectivo 2020-B </td>
                                <td><small>28-07-19</small></td>
                                <td><small>28-07-19</small></td>

                                <td class="invoice-action" >
                                    <a class="btn-flat2 waves-effect waves-light right" href="{{ route('admin.editar_ano') }}" type="button" name="action">
                                    <i class="material-icons ">edit</i >
                                    </a>
                                </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>


    <div id="view-example">
        <div id="modal1" class="modal modal-fixed-footer width-45">
            <div class="modal-content ">
               <h6>Inclusão de Novo Ano Lectivo</h6>

              <form action="" >
                    <div class="row mt-5">
                        <label class="col s12">
                            <input type="checkbox" checked> <span>Ano Activa?</span>
                        </label>
                    </div>
                    <div class="row mt-2">
                        <div class="Input-field col m4 s12">
                            <label  name="designa">Ano Lectivo:</label>
                            <input type="text" class="validate" name="designa" id="designa"  required>
                        </div>
                        <div class="Input-field col m4 s12">
                          <label  name="designa">Descrição:</label>
                          <input type="text" class="validate" name="designa" id="designa"  required>
                        </div>
                        <div class="input-field col m4 s12">
                            <select class="validate  ">
                                <option value="1">Escola/Ensino</option>
                                <option value="2">32</option>
                            </select>
                            <label name="designa">Filial</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="Input-field col m4 s12">
                            <label  name="designa">Data de Início:</label>
                            <input type="text" class="validate datepicker" name="designa" id="designa"  required>
                        </div>
                        <div class="Input-field col m4 s12">
                          <label   name="designa">Data Término:</label>
                          <input type="text" class="validate datepicker" name="designa" id="designa"  required>
                        </div>
                        <div class="Input-field col m4 s12">
                            <label  name="designa">Nível:</label>
                            <input type="text" class="validate " name="designa" id="designa"  required>
                        </div>

                  </div>
                  <div class="row ">
                    <div class="Input-field col m4 s12">
                        <label  name="designa">Início das Matrículas:</label>
                        <input type="text" class="validate datepicker" name="designa" id="designa"  required>
                    </div>
                    <div class="Input-field col m4 s12">
                      <label   name="designa">Termino das Matrículas:</label>
                      <input type="text" class="validate datepicker" name="designa" id="tm"  required>
                    </div>
                    <div class="Input-field col m4 s12">
                      <label   name="designa">Taxa de Inscrião:</label>
                      <input type="text" class="validate" name="designa" id="ti"  required>
                    </div>

                  </div>
                  <div class="row">
                    <div class="Input-field col m4 s12">
                        <label  name="ACI">Ano Civíl de Início:</label>
                        <input type="text" class="validate" name="ACI" id="aci"  required>
                    </div>
                    <div class="Input-field col m4 s12">
                        <label   name="ACT">Ano Civíl de Término:</label>
                        <input type="text" class="validate" name="ACT" id="act"  required>
                    </div>
                    <div class="Input-field col m4 s12">
                        <label   name="AE">Ano Económico:</label>
                        <input type="text" class="validate" name="AE" id="ae"  required>
                    </div>

                  </div>
              </form>
            </div>
          <div class="modal-footer">
              <a type="button" class="modal-close waves-effect waves-green btn-flat">Sair</a>
              <a href="#" class="modal-close waves-effect waves-green btn-flat">Salvar</a>
          </div>
        </div>
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
            <a href="#modal1" class="btn modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
                <i class="material-icons">add</i>
            </a>
        </div>
    </div>

    </section>
    </div>
</div>
@endsection
{{-- page scripts  --}}
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
@endsection
@section('vendor-script')
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection


