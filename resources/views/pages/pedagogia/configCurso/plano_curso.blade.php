@extends('layouts/contentLayoutMaster')

@section("title","Planos do Curso")

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">
            <div class="card green darken-1">
                <div class="card-content">
                            <p class="caption mb-0" style="color: white"><i class="material-icons  left">perm_data_setting</i>
                                <span>Definir Plano de Ensino</span>
                            </p>
                </div>
            </div>

                    <div class="card">

                            <div class="card-content ">
                                <div class="col s12">
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

                                            <div class="input-field col m3 s12 " >
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Semanal </option>
                                                    <option value="2">Mensal</option>
                                                    <option value="2">Anual</option>
                                                </select>
                                                <label> Período Lectivo</label>
                                            </div>
                                            <div class=" col m6 s12">
                                                <label for="designa">Curso:</label>
                                                <input type="text" class="validate" name="designa" id="designa"  required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col m3 s12 " >
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1"> 1ªclasse</option>
                                                    <option value="2">2ºClasse</option>

                                                </select>
                                                <label> Início em:</label>
                                            </div>
                                           <div class="input-field col m3 s12 " >
                                                <select class="validate">

                                                   <option value=" " disabled selected></option>
                                                    <option value="1">1ªClasse </option>
                                                    <option value="2">2ºClasse</option>
                                                </select>
                                                <label> Até:</label>
                                            </div>
                                           <div class="input-field col m6 s12 " >
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1">Física </option>
                                                </select>
                                                <label> Adiciona Disciplina:</label>
                                            </div>
                                        </div>
                                </div>
                            </div>


                            <div class="card-content ">
                                <div class="col s12">
                                    <table id="" class="display mb-2">
                                        <thead class="teal lighten-4 ">

                                            <tr>
                                                <th >Unidade</th>
                                                <th >Desinação</th>
                                                <th >Período</th>
                                                <th >Crédito</th>
                                                <th >C.Teórica</th>
                                                <th >C. de Prática</th>
                                                <th >Lab.</th>
                                                <th >Regime</th>
                                                <th >Categoria</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td >Pc </td>
                                                <td >2819</td>
                                                <td >Pc </td>
                                                <td >2392</td>
                                                <td >Pc </td>
                                                <td >2800 </td>
                                                <td >Pc </td>
                                                <td >2839 </td>
                                                <td >Pc </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col m4 right">
                                <button class="btn btn-light-green waves-light waves-effect right mt-6 width-50" type="submit" name="action">
                                    Salvar
                                </button>
                                <!--a href="" class="btn box-shadow-none blue waves-effect waves-light  " >
                                   <i class="material-icons left"></i>Salvar
                                </a-->
                                <a href="" class="btn btn-light-red waves-effect waves-light mt-6 width-50" type="submit" name="action">
                                     Cancelar <i class="material-icons left"> </i>
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
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
@endsection
