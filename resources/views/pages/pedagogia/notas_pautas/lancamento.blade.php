@extends('layouts/contentLayoutMaster')

@section("title","Lançamentos de Notas")

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">


                <div class="card green darken-1">
                    <div class="card-content">
                        <p class="caption mb-0" style="color: white"><i class="material-icons left">import_contacts</i>
                            <span>Lançamento de Notas/Para Boletim</span>
                        </p>
                    </div>
                </div>

                <div class="card">    
                    <div class="card-content">
                    

                                <div class="row">
                                    <div class="input-field col m3 s12 " >
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">2020 </option>

                                        </select>
                                        <label> Ano Lectivo</label>
                                    </div>
                                    <div class="input-field  col m3 s12">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">1ºTrimestre </option>
                                            <option value="2">2ºTrimestre</option>

                                        </select>
                                        <label for="designa">Período:</label>
                                    </div>
                                    
                                    <div class="input-field  col m3 s12">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">Info.Gestão</option>
                                      
                                        </select>
                                        <label for="designa">Curso:</label>
                                   </div>

                                    <div class="input-field  col m3 s12">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">1ªclasse  </option>
                                            <option value="2">2ªclasse</option>
                                            <option value="3">3ªclasse</option>
                                        </select>
                                        <label  for="nC">Ano Currícular</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col m3 s12 " >
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">AB354 </option>
                                            <option value="2">Inf-29</option>
                                            <option value="3">Eco-16</option>
                                        </select>
                                        <label> Turma</label>
                                    </div>
                                    <div class="input-field  col m3 s12">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">1ªProva </option>
                                            <option value="2">2ªProva</option>
                                            <option value="2">3ªProva</option>
                                        </select>
                                        <label for="designa">Tipo Avaliação</label>
                                    </div>
                                    <div class="input-field  col m3 s12">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">1ªProva </option>
                                            <option value="2">Matemática</option>
                                            <option value="2">Inglês</option>
                                        </select>
                                        <label for="designa">Disciplina:</label>
                                    </div>

                                    <div class=" col m3 s12">
                                       <label  for="nC">Data Avaliação</label>
                                       <input type="text" class="validate datepicker" id="firstName" required>
                                    </div>
                                </div>
                           
                        </div>
                </div>
                            <div class="card card card-default scrollspy">
                                <div class="row mb-1">
                                    <div class="responsive-table">
                                        <table class="table invoice-data-table white border-radius-4 pt-1">
                                            <thead class="teal lighten-4 ">
                                                <tr>
                                                    <th >Nº Inscrição</th>
                                                    <th >Nome completo</th>
                                                    <th >Nota</th>
                                                    <th >Avaliação</th>
                                                    <th >Obervações</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td >0000-0003</td>
                                                    <td >Ana Pedro João Miguel</td>
                                                    <td > <input type="text"/> </td>
                                                    <td > <input type="text"/> </td>
                                                    <td ><div class="input-field " >
                                                        <select class="validate">
                                                            <option  value=" " disabled selected></option>
                                                            <option  value="1">Bom </option>
                                                            <option  value="2">Excelente</option>
                                                            <option  value="3">Mediucre</option>
                                                        </select>
                                                    </td>
                                                </tr>


                                            </tbody>
                                        </table>


                                    </div>
                                </div>
                            </div>
                            
                      
            <div class="col s12 right">
                <a class="btn btn-light-green waves-light waves-effect right"  type="submit" name="action">
                    Salvar<i class="material-icons left">save</i>
                </a>
                <a href=""class="btn btn-light-red waves-effect waves-light right" type="submit" name="action">
                    Canselar <i class="material-icons left">reply</i>
                </a>
            </div>
        </section>
    </div>
</div>
@endsection
