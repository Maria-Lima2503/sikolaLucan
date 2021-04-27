@extends('layouts/contentLayoutMaster')

@section("title","Manuteção de Disciplina")

@section("content")

<!-- BEGIN: Page Main-->
<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1 " >
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">perm_data_setting</i>
                        <span>Lista De Disciplina</span>

                    </p>
                </div>
            </div>

            <div class="card">
                <div class="card-content">

                    <div class="row mb-4">
                        <div class="col s12">
                            <input type="text" placeholder="Pesquisa" class="defineInput width-80" >

                            <a class="btn box-shadow btn-light-orange waves-effect waves-light  mt-2 right width-20" type="submit" name="action">
                                Pesquisar<i class="material-icons right">search</i >
                            </a>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                              <thead>
                                <tr>
                                  <!-- data table responsive icons -->
                                  <th></th>
                                  <!-- data table checkbox -->

                                  <th  role="row">
                            <thead class="teal lighten-4 ">

                                <tr>
                                    <th colspan="4 ">Codigo</th>
                                    <th colspan="4">Sigla</th>
                                    <th colspan="4">Descricão </th>
                                    <th colspan="1" >  </th>

                                </tr>

                            </thead>
                            <tbody>
                                <tr>

                                    <td colspan="4" >0034 </td>
                                    <td colspan="4" >MT</td>
                                    <td colspan="4">Matemática</td>
                                    <td colspan="1">
                                        <a class="btn-flat2 mycon_green waves-effect waves-light right" type="submit" name="action">
                                        <i class="material-icons ">edit</i >
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                       </div>
                    </div>

                </div>
            </div>




    <div id="view-example">
        <div id="novaDisciplina" class="modal  modal-fixed-footer width-30">
        <div class="modal-content ">
            <h6>Manutenção de Disciplinas</h6>

                <form action="">

                    <div class="col m4 s12 mt-6">
                        <label>
                        <input type="checkbox" checked>
                        <span>Activa?</span>
                        </label>
                    </div>
                    <div class="row">
                        <div class="Input-field  col m12 s12">
                            <label   for="designa">Sigla:</label>
                            <input type="text" class="validate" name="designa" id="designa" required>
                        </div>
                        <div class="Input-field  col m12 s12">
                            <label   for="designa">Disciplina:</label>
                            <input type="text" class="validate" name="designa" id="designa" required>
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
            <a  href="#novaDisciplina" class="btn modal-trigger btn-floating btn-large primary-text gradient-45deg-green-teal gradient-shadow" >
             <i class="material-icons">add</i>
            </a>
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
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
@endsection
