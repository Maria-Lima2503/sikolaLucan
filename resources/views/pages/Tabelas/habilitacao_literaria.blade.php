@extends('layouts/contentLayoutMaster')

@section("title","Habilitação Litaráiro")

@section("content")

<div class="section">

<div id="view-example">
    <div id="nova" class="modal width-50" >
        <div class="modal-content ">
            <h6>Inclusão de Novo Habilitações </h6>
        </div>

        <div class="row col s12 mt-2">
            <form action="">

                <div class="row col s12">
                    <div class="Input-field col m12 ">
                        <label  style="height: 2rem;" for="designa">Descrição:</label>
                        <input type="text" class="validate" name="designa" id="designa"  required>
                    </div>
                    <div class="Input-field  col m12 ">
                        <label  style="height: 2rem;" for="designa">Área de Formação:</label>
                        <input type="text" class="validate" name="turno" id="designa"  required>
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
        <a href="#nova"class="modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
            <i class="material-icons">add</i>
        </a>
    </div>
</div>

    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">recent_actors</i>
                        <span>Manuteção de Habilitações Literárias</span>
                    </p>
                </div>
            </div>
                <div class="card">

                        <div class="card-content ">
                            <div class="responsive-table">
                                    <table class="table invoice-data-table white border-radius-4 pt-1">
                                        <thead class="teal lighten-4 ">
                                            <tr>
                                                <th >Código</th>
                                                <th >Descrição</th>
                                                <th >Área de Formação</th>
                                                <th  >  </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td  >55600 </td>
                                                <td  > Licenciatura</td>
                                                <td  >Académico </td>
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
                </div>
        </section>
    </div>
</div>
@endsection
{{-- page scripts  --}}
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
@endsection
