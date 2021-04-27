@extends('layouts/contentLayoutMaster')

@section("title","Curso Novo")

@section("content")

<div class="section">
        <div class="container">
            <section class="users-list-wrapper section">

                    <div class="card green darken-1">
                        <div class="card-content">
                            <p class="caption mb-0" style="color: white"> <i class="material-icons  left">bookmark</i>
                                <span>Criar Novo Curso</span>
                            </p>
                        </div>
                    </div>

                <div id="basic-form" class="card card card-default scrollspy">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12 m6 l6">
                                <form action="">
                                        <div class="col m12 mb-3">
                                            <td> <label><input type="checkbox"/><span>Curso Activo</span> </label></td>
                                        </div>
                                        <div class="row">

                                            <div class="input-field col m12  ">
                                                <select>
                                                    <option value=" "selected> Secção do Ensino Geral</option>
                                                    <option value="1">Escolinha da paz</option>
                                                    <option value="2">Palanquinhas</option>
                                                </select>
                                                <label>Unidade de Orgânica</label>
                                            </div>

                                            <div class="input-field col m12 " >
                                                <select class="validate">
                                                    <option value=" "  selected></option>
                                                    <option value="1">Ensino Primário, Iº, IIº Cilco do Ensino Geral</option>
                                                    <option value="2">2019</option>
                                                    <option value="2">2018</option>
                                                </select>
                                                <label>Grau de Formação</label>
                                            </div>

                                            <div class=" col m12 ">
                                               <label for="curso">Denominação do Curso/Especialidade:</label>
                                               <input type="text" class="validate" name="curso" id="curso"  required>
                                            </div>
                                           <div class=" col m6 ">
                                                <label for="ab">Nome Abreviado:</label>
                                                <input type="text" class="validate" name="ab" id="ab"  required>
                                            </div>
                                            <div class="col m6 ">
                                                <label for="preco">Coordenador do Curso</label>
                                                <input type="text" class="validate" name="curso" id="curso"  required>
                                            </div>
                                        </div>

                                 </form>
                                </div>

                            <div class="col s12 m6 l6">

                                    <form action="">
                                            <div class="input-field col m12">
                                                <select class="validate">
                                                    <option value=" " disabled selected>Selecione </option>
                                                    <option value="1">selecione</option>

                                                </select>
                                                <label for="t">Curso</label>
                                            </div>

                                            <div class=" col m12 ">
                                                <label for="nivel">Nível de Ensino/Especialização</label>
                                                <input type="text" class="validate" name="nivel" id="nivel" required>

                                            </div>
                                            <div class=" col m12 ">
                                                <label for="area">Área de Formação:</label>
                                                <input type="text" class="validate" name="area" id="area"  required>
                                            </div>
                                            <div class="input-field col m6">
                                                <select class="validate">
                                                    <option value=" " disabled selected>Classe </option>
                                                    <option value="1">10ªclasse</option>

                                                </select>
                                                <label for="duracao">Duração do curso( Inícico)</label>
                                            </div>
                                            <div class="input-field col m6">
                                                <select class="validate">
                                                    <option value=" " disabled selected>classe</option>
                                                    <option value="1">12ªclasse </option>

                                                </select>
                                                <label for="designa">Término</label>
                                            </div>
                                            <div class="input-field col m12">
                                                <select class="validate">
                                                        <option value=" "  selected></option>
                                                        <option value="1">Modelo Pre-Escolar</option>
                                                </select>
                                                <label for="area">Modelo de Pauta:</label>
                                            </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="row col m12 s12 ">
                        <div class="row right ">
                            <p><a class="btn btn-light-green waves-light waves-effect"href="{{-- route('admin.listar') --}}"  type="submit" name="action">
                                Salvar<i class="material-icons left">save</i>
                            </a>
                            <button class="btn btn-light-green waves-light waves-effect" type="submit" name="action">
                                Salvar e Novo<i class="material-icons left">settings_backup_restore</i>
                            </button>
                             <a href="{{ route('admin.listarcurso') }}" class="btn btn-light-red waves-effect waves-light" type="submit" name="action">
                                Sair <i class="material-icons left">reply</i>
                            </a></p>
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
