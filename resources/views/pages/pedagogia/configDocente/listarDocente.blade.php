@extends('layouts/contentLayoutMaster')

@section("title","Lista de Docentes")

@section("content")

<div class="section">
    <div class="container">

        <section class="users-list-wrapper section">

                        <div class="card green darken-1">
                            <div class="card-content">
                                <p class="caption mb-0" style="color: white"><i class="material-icons  left">account_circle</i>
                                    <span>Lista de Funcionário ou Docentes</span>

                                </p>
                            </div>
                        </div>
                    <div class="card ">
                            <div class="card-content">
                                <div class="row">
                                        <div class="row col s12 bordas">
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
                                                             <label for="designa">Categoria:</label>
                                                             <input type="text" class="validate" name="designa" id="designa"  required>
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

                                     <!-- contant de pequisa-->
                                    <div class="row col s12">
                                        <table id="" class="display mb-2">

                                        <thead class="teal lighten-4 ">

                                            <tr>
                                                <th colspan="4 ">Código</th>
                                                <th colspan="4 ">Cargo</th>
                                                <th colspan="4 ">Habilitação</th>
                                                <th colspan="47">Nome Complto</th>

                                                <th colspan="1"> </th>

                                            </tr>

                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td colspan="4" >00293 </td>
                                                <td colspan="4" >Escolhe </td>
                                                <td colspan="4" >especialidade </td>
                                                <td colspan="47">Maria Miguel  </td>

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


                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                    <a href="{{ route('admin.nova_aula') }}"class="modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
                        <i class="material-icons">add</i>
                    </a>
                </div>
            </section>
        </div><!----fim de container geral-->
    </div>
</div>
@endsection
