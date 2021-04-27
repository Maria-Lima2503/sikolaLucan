@extends('layouts/contentLayoutMaster')

@section("title","Livro de Prsença")

@section("content")

<div class="section">
    <div class="container">

        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons  left">perm_data_setting</i>
                        <span>Livro De Sumário e Presenças</span>
                    </p>
                </div>
            </div>

                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <form>
                                 <div class="input-field col m3 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">2ºTrimestre </option>

                                    </select>
                                    <label> Período</label>
                                </div>

                                <div class="input-field col m6 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1"> </option>
                                    </select>
                                    <label>Curso</label>
                                </div>
                                <div class="input-field col m3 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">1ªM32 </option>

                                    </select>
                                    <label>Turma</label>
                                </div>

                                <div class="input-field col m6 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">inglês </option>

                                    </select>
                                    <label>Disciplina</label>
                                </div>

                                <div class="col m4 s12 right mr-4">
                                        <a class="btn box-shadow btn-light-orange waves-effect waves-light mt-2 mb-2 right" type="submit" name="action">
                                            Pesquisar<i class="material-icons right">search</i >
                                        </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

               <div id="basic-form" class="card card  card-default scrollspy">
                    <div class="card-content ">

                            <table id="" class="display mb-2">

                                    <thead class="teal lighten-4 ">

                                        <tr>
                                            <th colspan="2">Aula Nº</th>
                                            <th colspan="20">Data/hora</th>
                                            <th colspan="20">Disciplina</th>
                                            <th colspan="20">Sala</th>
                                            <th colspan="20">Tipo</th>
                                            <th colspan="20">Docente</th>
                                            <th colspan="1">  </th>
                                            <th colspan="1" >  </th>
                                            <th colspan="1" >  </th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2" >0003 </td>
                                            <td colspan="20" >Inf-B </td>
                                            <td colspan="20" >Inf. </td>
                                            <td colspan="20" >2020 </td>
                                            <td colspan="20" >S30 </td>
                                            <td colspan="20" >50 </td>
                                            <td colspan="1">
                                                <a class="btn-flat2 mycon_green waves-effect waves-light right" type="submit" name="action">
                                                <i class="material-icons ">edit</i >
                                                </a>
                                            </td>
                                            <td colspan="1">
                                                <a class="btn-flat2 mycon_orange waves-effect waves-light right" type="submit" name="action">
                                                <i class="material-icons ">local_printshop</i >
                                                </a>
                                            </td>
                                            <td colspan="1">
                                                <a class="btn-flat2  mycon_red waves-effect waves-light right" type="submit" name="action">
                                                <i class="material-icons ">cancel</i >
                                                </a>
                                            </td>


                                        </tr>


                                    </tbody>
                            </table>

                    </div>
                </div>
                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                    <a href="{{ route('admin.nova_aula') }}"class="modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
                        <i class="material-icons">add</i>
                    </a>
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
