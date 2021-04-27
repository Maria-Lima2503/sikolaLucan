@extends('layouts/contentLayoutMaster')

@section("title","Mamutenção de Turmas")

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">
            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">cast</i>
                        <span>Gestão De Turmas</span>
                    
                    </p>
                </div>
            </div>
           
                <div class="card">
                
                    <div class="card-content">

                        <div class="row mb-4 bordas">
                            <div class="col m12">

                             <div class="row">
                                <div class="input-field col m3 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">2020 </option>
                                        <option value="2">2019</option>
                                        <option value="2">2018</option>
                                    </select>
                                    <label> Ano Lectivo</label>
                                </div>


                                <div class="input-field col m6 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">meoeiwms </option>
                                        <option value="2">Inglês</option>
                                        <option value="3">Informática</option>
                                    </select>
                                    <label> Curso</label>
                                </div>

                               <div class=" col m3 s12">
                                 <label  for="nC">Ano Currícular</label>
                                 <input type="text" class="validate" id="firstName" required>
                              </div>
                             </div>

                                <a class="btn box-shadow btn-light-orange waves-effect waves-light mb-1 right" type="submit" name="action">
                                      Pesquisar<i class="material-icons right">search</i >

                                </a>
                            </div>
                        </div>




                        <div class="row mb-2">
                            <div class="col s12">
                                <table id="" class="display mb-2">

                                    <thead class="teal lighten-4 ">

                                        <tr>
                                            <th colspan="2">Id</th>
                                            <th colspan="20">Turma</th>
                                            <th colspan="20">Curso</th>
                                            <th colspan="20">Ano</th>
                                            <th colspan="20">Sala</th>
                                            <th colspan="20">Capacidade</th>
                                            <th colspan="20">Matriculados</th>
                                            <th colspan="20">Masc</th>
                                            <th colspan="20">Fem</th>
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
                                            <td colspan="20" >38 </td>
                                            <td colspan="20" >13 </td>
                                            <td colspan="20" >25 </td>
                                            <td colspan="1">
                                                <a class="btn-flat2 mycon_green waves-effect waves-light right" type="submit" name="action">
                                                <i class="material-icons ">edit</i >
                                                </a>
                                            </td>
                                            <td colspan="1">
                                                <a class="btn-flat2 mycon_orange waves-effect waves-light right" type="submit" name="action">
                                                <i class="material-icons ">group</i >
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
                        </div><!--fim de tabela-->


                    </div><!--fim de card content-->
                </div><!--fim de card-->

            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                <a href="{{ route('admin.adicionarturma') }}"class="btn-floating btn-large primary-text gradient-45deg-green-teal gradient-shadow" >
                 <i class="material-icons">add</i>
                </a>
            </div>
        </section>
       
    </div>

</div>
@endsection
