@extends('layouts/contentLayoutMaster')

@section("title","Manuteção de Horário")

@section("content")

<div class="section">
    <div class="container">

        <section class="users-list-wrapper section">
                <div class="card green darken-1">
                    <div class="card-content">
                        <p class="caption mb-0" style="color: white"><i class="material-icons left">developer_board</i>
                            <span>Manutenção e Emissão de Horários </span>
                        
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
                                        <option value="1">2020 </option>
                                        <option value="2">2019</option>
                                        <option value="3">2018</option>
                                    </select>
                                    <label> Ano Lectivo</label>
                                </div>

                                <div class="input-field col m3 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">2020 </option>
                                        <option value="2">2019</option>
                                        <option value="3">2018</option>
                                    </select>
                                    <label>Turma</label>
                                </div>
                                <div class="input-field col m3 s12 " >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">Lima </option>
                                        <option value="2">Miguel</option>
                                        <option value="3">joão</option>
                                    </select>
                                    <label>Autor</label>
                                </div>

                                <div class="col m3 mb-4">
                                    <a class="btn box-shadow btn-light-orange waves-effect waves-light mt-2 right" type="submit" name="action">
                                        Pesquisar<i class="material-icons right">search</i >
                                    </a>

                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
          
                    <div class="card">     
                        <div class="card-content">
                                <table id="" class="display mb-2">

                                    <thead class="teal lighten-4 ">

                                        <tr>
                                            <th colspan="2">Código</th>
                                            <th colspan="20">Turma</th>
                                            <th colspan="20">Sala</th>
                                            <th colspan="20">Tipo</th>
                                            <th colspan="20">Autor</th>
                                            <th colspan="1">  </th>
                                            <th colspan="1" >  </th>
                                            <th colspan="1" >  </th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2" >0003 </td>
                                            <td colspan="20" >Inf-B </td>
                                            <td colspan="20" >2020 </td>
                                            <td colspan="20" >S30 </td>
                                            <td colspan="20" >50 </td>
                                            <td colspan="1">
                                                <a href="{{ route('admin.criar_horario') }}" class="btn-flat2 mycon_green waves-effect waves-light right" type="submit" name="action">
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
                <a href="{{ route('admin.criar_horario') }}"class="btn-floating btn-large primary-text gradient-45deg-green-teal gradient-shadow" >
                 <i class="material-icons">add</i>
                </a>
            </div>
        </section>
    </div>
</div>
@endsection
