@extends('layouts/contentLayoutMaster')

@section("title","Gestão Estágio")

@section("content")

<div class="section">

<div id="view-example">

    <div id="estagio" class="modal width-50" >
        <div class="modal-content ">
            <h6>Dados de Estágio </h6>
        </div>
        <label class="mb-5 col m2">
            <input type="checkbox" checked>
            <span>Estágio é Pago?</span>
        </label>
        <div class="row col s12 mt-2">
            <form action="">
               <div class="row col s12">
                  <div class="input-field col m6 s12 Centralizar " >
                        <select class="validate">
                            <option value=" " disabled selected></option>
                            <option value="1">2018</option>
                            <option value="2">2022</option>
                            <option value="3">2039</option>
                        </select>
                        <label >Ano Lectivo</label>
                    </div>
                     <div class="input-field col m6 s12 Centralizar " >
                        <select class="validate">
                            <option value=" " disabled selected></option>
                            <option value="1">2018</option>
                            <option value="2">2022</option>
                            <option value="3">2039</option>
                        </select>
                        <label >Local de Estágio</label>
                    </div>
                </div>
                <div class="row col s12">
                  <div class="input-field col m6 s12 Centralizar " >
                        <select class="validate">
                            <option value=" " disabled selected></option>
                            <option value="1">Eng. Informática</option>
                            <option value="2">2022</option>
                            <option value="3">2039</option>
                        </select>
                        <label >Curso</label>
                    </div>
                     <div class="input-field col m6 s12 Centralizar " >
                        <select class="validate">
                            <option value=" " disabled selected></option>
                            <option value="1">10classe</option>
                            <option value="2">2classe</option>
                        </select>
                        <label >Ano Currícular</label>
                    </div>
                </div>
                <div class="row col s12">
                    <div class="Input-field col m6 s12">
                        <label  style="height: 2rem;" for="designa">Início:</label>
                        <input type="text" class="validate datapicker" name="designa" id="designa"  required>
                    </div>
                    <div class="Input-field  col m6 s12">
                        <label  style="height: 2rem;" for="designa">Termino:</label>
                        <input type="text" class="validate datapicker" name="turno" id="designa"  required>
                    </div>

                </div>

                <div class="row col s12">
                   <div class="input-field col m6 s12 Centralizar " >
                        <select class="validate">
                            <option value=" " disabled selected></option>
                            <option value="1">10classe</option>
                            <option value="2">2classe</option>
                        </select>
                        <label>Reponsável</label>
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
        <a  href="#estagio" class="btn modal-trigger btn-floating btn-large primary-text gradient-45deg-green-teal gradient-shadow" >
         <i class="material-icons">add</i>
        </a>
    </div>
</div>

    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1 ">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">account_circle</i>
                        <span>Gestão de Estágio</span>

                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">

                        <div class="row ">
                            <div class="input-field col m3 s12 " >
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">2020 </option>
                                    <option value="2">2019</option>
                                    <option value="2">2018</option>
                                </select>
                                <label> Ano Lectivo</label>
                            </div>

                            <div class=" col m6 s12">
                                <label for="designa">Curso:</label>
                                <input type="text" class="validate" name="designa" id="designa"  required>
                            </div>

                            <div class=" col m3 s12">
                                <label  for="nC">Nº de Inscrição</label>
                                <input type="text" class="validate" id="firstName" required>
                            </div>
                        </div>

                        <div class="row ">
                            <div class=" col m8 s12">
                                <label  for="nC">Nome:</label>
                                <input type="text" class="validate" id="firstName" required>
                            </div>
                            <div class=" col m4 s12 right">
                                <a class="btn box-shadow btn-light-orange waves-effect waves-light mt-2 mb-2 right" type="submit" name="action">
                                    Pesquisar<i class="material-icons right">search</i >
                                </a>
                            </div>
                        </div>

                </div>
            </div>

            <div id="basic-namem" class="card card card-default scrollspy">
                <div class="responsive-table">
                    <table id="" class="table invoice-data-table white border-radius-4 pt-1">

                                <thead class="teal lighten-4 ">
                                    <tr>
                                        <th >Designação </th>
                                        <th >Curso </th>
                                        <th >Local</th>
                                        <th > Tempo de Estágio </th>
                                        <th colspan="1"> </th>

                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td >Maria Miguel  </td>
                                        <td > qualquer coisa</td>
                                        <td >1032/2020 </td>
                                        <td >Ja está </td>
                                        <td class="txt">
                                            <a
                                                class="btn-floating mb-1 btn-flat waves-effect waves-light green darken-1 white-text btn-small">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a
                                                class="btn-floating mb-1 btn-flat waves-effect waves-light cyan white-text btn-small">
                                                <i class="material-icons">arrow_downward</i>
                                            </a>
                                            <a
                                                class="btn-floating mb-1 btn-flat waves-effect waves-light blue white-text btn-small">
                                                <i class="material-icons">lock</i>
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                    </table>

                </div>
            </div>

            </section>
        </div>
</div>
@endsection
{{-- page scripts  --}}
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
@endsection
