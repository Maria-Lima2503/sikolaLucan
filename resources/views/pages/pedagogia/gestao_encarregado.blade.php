@extends('layouts/contentLayoutMaster')

@section("title","Encarregados de Documentos")

@section("content")
<div class="section">

    <div id="view-example">
        <div id="edit" class="modal width-50" >
            <div class="modal-content ">
                <h6>Inclusão de Documento </h6>
            </div>
            <div class="row col s12 mt-2">
                <form action="">

                    <div class="row ">
                        <div class="col m12 s12">
                            <label>Nome do Aluno</label>
                            <input type="text" class="validate" id="firstName" required>
                        </div>
                        <div class="col m4 s12">
                            <label for="nC">Nome Encarregado</label>
                            <input type="text" class="validate" id="firstName" required>
                        </div>
                        <div class="col m4 s12">
                            <label for="nC">Nº de Identifição:</label>
                            <input type="text" class="validate" id="firstName" required>
                        </div>
                        <div class="input-field col m4 s12">
                            <select class="validate">
                                <option value=" " disabled selected></option>
                                <option value="1">Avô</option>
                                <option value="2">Mãe</option>
                                <option value="2">Pai</option>
                                <option value="2">Tia/o</option>
                                <option value="2">Madrinha</option>
                            </select>
                            <label>Grau Parentesco </label>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col m4 s12">
                            <label for="nC">Tel. 1:</label>
                            <input type="text" class="validate" id="firstName" required>
                        </div>
                        <div class="col m4 s12">
                            <label for="nC">Tel. 2:</label>
                            <input type="text" class="validate" id="firstName" required>
                        </div>
                        <div class="col m4 s12">
                            <label for="nC">Email de Encarregado</label>
                            <input type="text" class="validate" id="firstName" required>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer">
                <a type="button" class="modal-close waves-effect waves-green btn-flat">Sair</a>
                <a href="#" class="modal-close waves-effect waves-green btn-flat">Salvar</a>
          </div>
        </div>

    </div>


    <div class="container">

        <section class="users-list-wrapper section">

                <div class="card green darken-1 " >
                    <div class="card-content">

                            <p class="caption mb-0" style="color: white"><i class="material-icons left">face</i>
                                <span>Gestão de Encarregados</span>

                            </p>

                    </div>
                </div>
                        <div class="card  ">
                            <div class="row">
                                    <div class="row col s12">
                                        <div class="row ">
                                            <div class="input-field col m4 s12 " >
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">2020 </option>
                                                    <option value="2">2019</option>
                                                    <option value="2">2018</option>
                                                </select>
                                                <label>Aluno</label>
                                            </div>

                                            <div class=" col m8 s12">
                                                <label for="designa">Nome Emcarregado:</label>
                                                <input type="text" class="validate" name="designa" id="designa"  required>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class=" col m4 s12 left">
                                                <label  for="nC">Nº Identificação</label>
                                                <input type="text" class="validate" id="firstName" required>
                                            </div>
                                            <div class=" col m4 s12 left">
                                                <label  for="nC">NIF</label>
                                                <input type="text" class="validate" id="firstName" required>
                                            </div>
                                            <div class=" col m4 s12 ">
                                                <a class="btn left  btn-light-orange waves-effect waves-light mt-6 mb-0 " type="submit" name="action">
                                                    Pesquisar<i class="material-icons right">search</i >
                                                </a>
                                                <button class="btn right btn-light-green  waves-light waves-effect  mt-6 mb-0" type="submit" name="action">
                                                    Listar todos
                                                </button>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col s12">

                                        <table id="" class="display mb-2">

                                            <thead class="teal lighten-4 ">

                                                <tr>
                                                    <th colspan="47">Nome</th>
                                                    <th colspan="47">Contacto</th>
                                                    <th colspan="47">Encarregado de</th>
                                                    <th colspan="47">Parentesco</th>
                                                    <th colspan="1"> </th>

                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td colspan="47" >Ana Jão </td>
                                                    <td colspan="47" >9307482938 </td>
                                                    <td colspan="47" >Maria João Miguel </td>
                                                    <td colspan="47">Mãe</td>
                                                    <td colspan="1">
                                                        <a href="#edit" class="modal-trigger  btn-flat2 mycon_green waves-effect waves-light right" type="submit" name="action">
                                                        <i class="material-icons ">edit</i >
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
