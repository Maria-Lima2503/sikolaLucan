@extends('layouts/contentLayoutMaster')

@section("title"," Criação de Horário")

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

                <div class="card green darken-1">
                    <div class="card-content">
                        <p class="caption mb-0" style="color: white"><i class="material-icons left">developer_board</i>
                            <span>Criação de Horário</span>

                        </p>
                    </div>
                </div>
                <div id="highlight-table" class="card card card-default scrollspy">
                    <div class="card-content">
                        <div class="row">
                            <div class="input-field col m2 s12 " >
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">2020 </option>
                                    <option value="2">2019</option>
                                    <option value="3">2018</option>
                                </select>
                                <label> Ano Lectivo</label>
                            </div>
                            <div class="input-field col m6 s12 " >
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">ABC</option>
                                </select>
                                <label  for="nC">Curso</label>
                            </div>
                            <div class="input-field col m2 s12 " >
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">ABC</option>
                                </select>
                                <label  for="nC">Turma</label>
                            </div>
                            <div class="input-field col m2 s12 " >
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">Manhã</option>
                                    <option value="2">Tarde</option>
                                </select>
                                <label  for="nC">Turno</label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card">
                        <div class="card-content">
                                <div class="row">

                                <div class="col s12">
                                            <table class="highlight table invoice-data-table white border-radius-4 pt-1">
                                                <thead>
                                                    <tr>
                                                        <th th role="row">Horas</th>
                                                        <th>Segunda Feira</th>
                                                        <th>Terca Feira</th>
                                                        <th>Quarta Feira</th>
                                                        <th>Quinta Feira</th>
                                                        <th>Sexta Feira</th>
                                                        <th>Sábado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>  <input type="time" class="validate timepicker" name="seg" > <input type="time" class="validate timepicker" name="seg" ></td>
                                                        <td> <input type="text" class="validate" name="seg" ></td>
                                                        <td> <input type="text" class="validate" name="ter" ></td>
                                                        <td> <input type="text" class="validate" name="qua" ></td>
                                                        <td> <input type="text" class="validate" name="qui" ></td>
                                                        <td> <input type="text" class="validate" name="sex" ></td>
                                                        <td> <input type="text" class="validate" name="sab" ></td>
                                                    </tr>

                                                    <tr>
                                                        <td> 08:50-09:35</td>
                                                        <td> <input type="text" class="validate" name="seg" ></td>
                                                        <td> <input type="text" class="validate" name="ter" ></td>
                                                        <td> <input type="text" class="validate" name="qua" ></td>
                                                        <td> <input type="text" class="validate" name="qui" ></td>
                                                        <td> <input type="text" class="validate" name="sex" ></td>
                                                        <td> <input type="text" class="validate" name="sab" ></td>
                                                    </tr>   <tr>
                                                        <td> 09:40-10:25</td>
                                                        <td> <input type="text" class="validate" name="seg" ></td>
                                                        <td> <input type="text" class="validate" name="ter" ></td>
                                                        <td> <input type="text" class="validate" name="qua" ></td>
                                                        <td> <input type="text" class="validate" name="qui" ></td>
                                                        <td> <input type="text" class="validate" name="sex" ></td>
                                                        <td> <input type="text" class="validate" name="sab" ></td>
                                                    </tr>   <tr>
                                                        <td> 10:30-11:15</td>
                                                        <td> <input type="text" class="validate" name="seg" ></td>
                                                        <td> <input type="text" class="validate" name="ter" ></td>
                                                        <td> <input type="text" class="validate" name="qua" ></td>
                                                        <td> <input type="text" class="validate" name="qui" ></td>
                                                        <td> <input type="text" class="validate" name="sex" ></td>
                                                        <td> <input type="text" class="validate" name="sab" ></td>
                                                    </tr>


                                                </tbody>
                                        </table>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>

                            <div class="row ">
                                <div class="row right ">
                                    <button class="btn btn-light-indigo waves-light waves-effect" type="submit" name="action">
                                        Salvar<i class="material-icons left">save</i >
                                    </button>
                                    <button class="btn btn-light-indigo waves-light waves-effect" type="submit" name="action">
                                        Imprimir<i class="material-icons left">local_printshop</i >
                                    </button>
                                    <a href="{{ route('admin.listar_horario') }}" class="btn btn-light-red waves-effect waves-light" type="submit" name="action">
                                        Sair <i class="material-icons left">reply</i>
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
