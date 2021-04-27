@extends('layouts/contentLayoutMaster')

@section("title","Turma Novo")

@section("content")

<div class="section">
    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"><i class="material-icons left">perm_data_setting</i>
                        <span>Adicionar Turmas</span>
                    
                    </p>
                </div>
            </div>

            <div class="card">     
                <div class="card-content">
                   <div class="row ">
                    <form action="">
                              <div class="row col s12">
                                 <div class="input-field col m6  " >
                                     <select class="validate">
                                         <option value=" " disabled selected></option>
                                         <option value="1">2018</option>

                                     </select>
                                     <label >Ano Lectivo</label>
                                 </div>
                                 <div class="input-field col m6  " >
                                     <select class="validate">
                                         <option value=" " disabled selected></option>
                                         <option value="1">1ªclasse</option>

                                     </select>
                                     <label >Director_Turma</label>
                                 </div>
                             </div>

                                <div class="row col s12">
                                    <div class="input-field col m4  " >
                                       <select class="validate">
                                         <option value=" " disabled selected></option>
                                         <option value="1">1ªclasse</option>

                                       </select>
                                       <label >Curso</label>
                                    </div>
                                    <div class="input-field col m4  " >
                                       <select class="validate">
                                         <option value=" " disabled selected></option>
                                         <option value="1">1ªclasse</option>

                                       </select>
                                       <label >Ano Currícular</label>
                                    </div>
                                    <div class="input-field col m4  " >
                                       <select class="validate">
                                         <option value=" " disabled selected></option>
                                         <option value="1">Noite</option>

                                       </select>
                                       <label >Turno</label>
                                    </div>

                                </div>
                                <div class="row col s12">
                                    <div class="Input-field  col m4 s12">
                                            <label   for="designa">Turma:</label>
                                            <input type="text" class="validate" name="turma" id="designa"  required>
                                    </div>
                                    <div class="Input-field  col m4 s12">
                                             <label   for="designa">Sala</label>
                                            <input type="text" class="validate" name="sala" id="designa"  required>
                                    </div>
                                    <div class="Input-field  col m4 s12">
                                            <label   for="designa">Lotação:</label>
                                            <input type="text" class="validate" name="turma" id="designa"  required>
                                    </div>
                                </div>


                            <div class="row col s12">
                                <div class="Input-field  col m4 s12">
                                         <label   for="designa">Idades_de:</label>
                                         <input type="text" class="validate"  required>
                                </div>
                                <div class="Input-field  col m4 s12">
                                         <label   for="designa">Ate:</label>
                                         <input type="text" class="validate" required>
                                </div>
                                <div class="col m4 mt-3">
                                     <label class=" ">
                                     <input type="checkbox" checked>
                                     <span>Activar Turma?</span>
                                     </label>
                                </div>
                            </div>
                    </form>
                </div>

              </div>  
            </div> 
            <div id="row col s12 mb-2">
                <div class=" right ">
                    <button class="btn btn-light-indigo waves-light waves-effect" type="submit" name="action">
                        Salvar<i class="material-icons left">save</i >
                    </button>
                    <a href="{{ route('admin.listarturma') }}" class="btn btn-light-red waves-effect waves-light" type="submit" name="action">
                        Canselar <i class="material-icons left">reply</i>
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection
