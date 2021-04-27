@extends('layouts/contentLayoutMaster')

@section("title","Solicitação de Documentos")

@section("content")

<div class="section">
  
<div id="view-example">

    <div id="nova" class="modal width-50" >
        <div class="modal-content ">
            <h6>Novo Requisição</h6>
        </div>

        <div class="row col s12 mt-2">
          
            <form action="">
               <div class="row col s12">
                    <div class="Input-field col m4 s12">
                        <label  style="height: 2rem;" name="designa">Ano Lectivo:</label>
                        <input type="text" class="validate" name="designa" id="designa" placeholder="2020" required>
                    </div>
                    <div class="input-field col m8 s12 " >
                        <select class="validate">
                            <option value=" " disabled selected></option>
                            <option value="1">Boletim</option>
                        </select>
                        <label>Tipo de Documento</label>
                    </div>
                </div>
                <div class="row col s12">
                    <div class="Input-field col m4 s12">
                        <label  style="height: 2rem;" name="designa">Nª de Aluno</label>
                        <input type="text" class="validate" name="designa" id="designa"  required>
                    </div>
                    <div class="input-field col m8 s12 " >
                        <select class="validate">
                            <option value=" " disabled selected></option>
                            <option value="1">RF </option>
                        </select>
                        <label  for="nC">Nome do Estudante</label>
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
        <a  href="#nova" class="btn modal-trigger btn-floating btn-large primary-text gradient-45deg-green-teal gradient-shadow" >
         <i class="material-icons">add</i>
        </a>
    </div>
</div>


<div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">perm_data_setting</i>
                        <span>Lista de Requisão de Documentos</span>
                </div>
            </div>
           
                                <div class="card card-default ">
                                    <div class="card-content ">
                                            <div class="row ">
                                                    <div class="input-field col m4 s12 " >
                                                        <select class="validate">
                                                            <option value=" " disabled selected></option>
                                                            <option value="1">2020 </option>
                                                        </select>
                                                        <label>Ano Lectivo</label>
                                                    </div>
                                                    <div class="input-field col m4 s12 " >
                                                        <select class="validate">
                                                            <option value=" " disabled selected></option>
                                                            <option value="1">Boletim</option>
                                                        </select>
                                                        <label>Tipo de Documento</label>
                                                    </div>
                                                    <div class=" col m2 s12">
                                                        <label for="designa">De:</label>
                                                        <input type="text" class="validate datapicker" id="designa"  required>
                                                    </div>
                                                    <div class=" col m2 s12">
                                                        <label for="designa">Até:</label>
                                                        <input type="text" class="validate datapicker" id="designa"  required>
                                                    </div>
                                            </div>

                                            <div class="row ">
                                                <div class=" col m3 s12">
                                                        <label  for="nC">Nº de Requisição:</label>
                                                        <input type="text" class="validate" id="firt" required>
                                                </div>
                                                <div class="input-field col m6 s12 " >
                                                        <select class="validate">
                                                            <option value=" " disabled selected></option>
                                                            <option value="1">RF </option>
                                                        </select>
                                                        <label  for="nC">Nome do Estudante</label>
                                                </div>
                                                <div class=" col m3 s12 right">
                                                        <a class="btn box-shadow btn-light-orange waves-effect waves-light mt-2 mb-2 right" type="submit" name="action">
                                                            Pesquisar<i class="material-icons right">search</i >
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>



                        <div id="basic-form" class="card card card-default scrollspy">
                            <div class="responsive-table">
                                <table class="table invoice-data-table white border-radius-4 pt-1">
                                        <thead class="teal lighten-4 ">

                                            <tr>
                                                <!--th  role="row">Ano Lectivo</th-->
                                                <th  role="row">Nº de Requisição</th>
                                                <th >Documento</th>
                                                <th >Data de Emissão </th>
                                                <th >Estudante</th>
                                                <th >Acção</th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">

                                                <!--td class="dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes"></td-->
                                                <td class="dt-checkboxes-cell">0009182 </td>
                                                <!--td  >1029 </td-->
                                                <td > Declaração com Notas  </td>
                                                <td >12/03/2021 </td>
                                                <td >Ana Alfredo </td>
                                                <td>
                                                    <div class="invoice-action">
                                                      <a href="" class="invoice-action-view mr-4">
                                                        <i class="material-icons">cancel</i>
                                                      </a>
                                                      <a href="" class="invoice-action-edit">
                                                        <i class="material-icons">remove_red_eye</i>
                                                      </a>
                                                    </div>
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
