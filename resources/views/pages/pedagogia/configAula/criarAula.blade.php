@extends('layouts/contentLayoutMaster')

@section("title","Aula e Sumário")

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">perm_data_setting</i>
                        <span>Manuteção De Aula e Presenças</span>
                    </p>
                </div>
            </div>

            <div id="placeholder" class="card card card-default scrollspy">
                <div class="card-content">
                    <form>
                            <div class="row mb-4 ">
                                <div class="col m12">

                                    <div class="row">
                                        <div class="input-field col m3 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">2020 </option>
                                                <option value="2">2019</option>
                                                <option value="3">2018</option>
                                            </select>
                                            <label> Ano Lectivo</label>
                                        </div>
                                         <div class="input-field col m3 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">2ºTrimestre </option>
                                                <option value="2">3ºTrimestre</option>
                                                <option value="3">1ºTrimestre</option>
                                            </select>
                                            <label> Período</label>
                                        </div>


                                        <div class="input-field col m3 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">Economia </option>
                                                <option value="2">Gestão-2</option>
                                                <option value="3">Informática</option>
                                            </select>
                                            <label> Curso</label>
                                        </div>

                                         <div class="input-field col m3 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">1ªclasse </option>
                                                <option value="2">2ªclasse</option>
                                                <option value="3">9</option>
                                            </select>
                                            <label>Ano Currícular</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col m6 s12" >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">Lima </option>
                                                <option value="2">Miguel</option>
                                                <option value="3">joão</option>
                                            </select>
                                            <label>Docente</label>
                                        </div>
                                        <div class="input-field col m6 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">Estudo do Meio</option>
                                                <option value="2">Matemática</option>
                                                <option value="3">L.Portuguesa</option>
                                            </select>
                                            <label>Disciplina</label>
                                        </div>

                                        <div class="input-field col m2 s12 " >
                                             <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">TB-1 </option>
                                                <option value="2">TB-2</option>
                                                <option value="3">2018</option>
                                            </select>
                                            <label>Turma</label>
                                        </div>

                                        <div class=" col m2 s12">
                                            <label for="designa">Data da Aula</label>
                                            <input type="text" class="validate datepicker" name="designa" id="designa"  required>
                                        </div>

                                        <div class="input-field col m3 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">inglês </option>
                                                <option value="2">Mat</option>
                                                <option value="3">L.p</option>
                                            </select>
                                            <label>Horário</label>
                                        </div>

                                       <div class="input-field col m3 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">inglês </option>
                                                <option value="2">Mat</option>
                                                <option value="3">L.p</option>
                                            </select>
                                            <label>Natureza da Aula</label>
                                        </div>

                                        <div class="col m2 s12">
                                          <label  for="nC">Sala de Aula:</label>
                                          <input type="text" class="validate " id="firstName" required>
                                        </div>
                                    </div>

                                        <div class="row col s12">
                                            <div class=" col m6">
                                                <label for="icon_prefix2" class=""><i class="material-icons prefix">mode_edit</i>Sumário  </label>
                                                <textarea id="icon_prefix2" class="materialize-textarea" style="height: 7rem;  border:solid 1px; background-color: rgb(255, 255, 255);"></textarea>

                                            </div>
                                            <div class=" col m6">
                                                <label for="icon_prefix2"><i class="material-icons prefix">mode_edit</i>Tarefa Extra</label>
                                                <textarea id="icon_prefix2" class="materialize-textarea" style="height: 7rem;  border:solid 1px; background-color: rgb(255, 255, 255);"></textarea>
                                            </div>
                                        </div>

                                </div>
                            </div>
                    </form>
                </div>
            </div>

                        	<div id="basic-form" class="card card  card-default scrollspy">
                                <div class="card-content">
                                    <h6 class="mb-4">Lista de Presença</h6>

                                    <div class="responsive-table">

                                        <div class="row">
                                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                                <thead class="teal lighten-4 ">
                                                    <tr>
                                                        <th  role="row"> Nº</th>
                                                        <th>NºProcesso</th>
                                                        <th >Nome Completo</th>
                                                        <th >Av.Contínua</th>
                                                        <th >Presença</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1">03 </td>
                                                        <td  >2020/0091 </td>
                                                        <td  >Sasha Poli de Lima Miguel</td>
                                                        <td  >2020 </td>
                                                        <td  ><input type="text" class="validate width-50"> </td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row  mb-4 mt-2">

                                        <p class="col s4"><label>
                                            <input type="checkbox"><span>Notificar Encarregado/SMS</span>
                                        </label></p>

                                        <p class="col s4"><label>
                                            <input type="checkbox"><span>Enviar Presença por Email aos Encarregado</span>
                                        </label></p>

                                        <p class="col s4"><label>
                                            <input type="checkbox"><span>Enviar Sumário por Email aos Alunos</span>
                                        </label></p>

                                    </div>
                                </div>
                            </div>


                            <div class="row col s12 left mt-3">
                                <a href="aula_presença" class="btn btn-light-red waves-light waves-effect" type="submit" name="action">
                                    Sair<i class="material-icons left">reply</i >
                                </a>
                                <button class="btn btn-light-green waves-light waves-effect" type="submit" name="action">
                                    Gravar Aula<i class="material-icons left">save</i >
                                </button>
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
