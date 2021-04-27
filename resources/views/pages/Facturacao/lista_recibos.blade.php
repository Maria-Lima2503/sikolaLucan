@extends('layouts/contentLayoutMaster')

@section("title","Lista de Recibos")

@section("content")

<div class="section">

    <div class="container">
        <section class="users-list-wrapper section">

            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"> <i class="material-icons left">account_balance_wallet</i>
                        <span>Lista de Documentos de Facturação</span>
                    </p>
                </div>
            </div>
                    <div class="card">
                        <div class="card-content">

                                <div class="row">
                                        <div class="input-field col m4 s12 " >
                                            <select class="validate" >
                                                <option value=" " disabled selected></option>
                                                <option value="1">Fatura </option>
                                                <option value="2">Recibo/Fatura</option>
                                            </select>
                                            <label>Tipo Documento</label>
                                        </div>
                                        <div class="input-field col m2 s12">
                                            <label for="designa">Emitidas de:</label>
                                            <input type="text" class="validate datapicker" id="designa"  required>
                                        </div>
                                        <div class="input-field col m2 s12">
                                            <label for="designa">Até</label>
                                            <input type="text" class="validate datapicker" id="designa"required>
                                        </div>
                                        <div class="input-field col m4 s12 " >
                                            <select class="validate">
                                                <option value=" " disabled selected>utilizador</option>
                                                <option value="1">Dodó </option>
                                                <option value="2">Ana</option>
                                            </select>
                                            <label>Operador:</label>
                                        </div>
                                       
                                </div>

                                <div class="row">
                                    <div class="input-field col m3 s12">
                                        <select class="validate" >
                                            <option value=" " disabled selected></option>
                                            <option value="1">2020 </option>
                                            <option value="2">2019</option>
                                            <option value="3">2018</option>
                                        </select>
                                        <label>Ano Lectivo</label>
                                    </div>
                                        <div class="input-field col m3 s12">
                                            <label for="designa">Nº do Documento</label>
                                            <input type="text" class="validate datapicker" id="designa" required>
                                        </div>
                                        
                                         <div class="input-field col m3 s12">
                                            <label for="designa">NºDoc. Bco</label>
                                            <input type="text" class="validate" id="designa"  required>
                                        </div>
                                        <div class="input-field col m3 s12 " >
                                            <select class="validate" >
                                                <option value=" " disabled selected></option>
                                                <option value="1">Anulado</option>
                                                <option value="2">Normal</option>
                                            </select>
                                            <label>Status</label>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="input-field col m2 s12">
                                            <label for="designa">Nº de inscrição:</label>
                                            <input type="text" class="validate " id="designa"  required>
                                        </div>
                                       
                                        <div class="input-field col m6 s12">
                                            <label for="designa">Nome de Aluno:</label>
                                            <input type="text" class="validate" id="designa"  required>
                                        </div>
                                        <div class="input-field col m4 s12">
                                            <a class="btn  btn-light-orange waves-effect waves-light mt-6 " type="submit" name="action">
                                                <i class="material-icons ">search</i >
                                            </a>
                                            <a class="btn waves-effect waves-light mt-6" type="submit" name="action">
                                                <small>Facturação de Entidades Externa</small>
                                            </a>
                                        </div>
                                </div>

                        </div>
                    </div> <!--fim primeiro card -->


                    <div class="card mt-2">
                        <div class="card-content">
                            <div class="row ">
                                <table id="" class="table invoice-data-table white border-radius-4 pt-1">

                                    <thead class="teal lighten-4 ">
                                        <tr>
                                            <th >Nº Documento</th>
                                            <th >Dt. Emissão</th>
                                            <th >Aluno</th>
                                            <th >Operador</th>
                                            <th >Valor</th>
                                            <th >Desconto</th>
                                            <th >Imposto</th>
                                            <th >Troco</th>
                                            <th >Dedução</th>
                                            <th >Crédito</th>
                                            <th ></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td >0093 </td>
                                            <td >arroz </td>
                                            <td >129.000 </td>
                                            <td >0093 </td>
                                            <td >arroz </td>
                                            <td >129.000</td>
                                            <td > -89</td>
                                            <td >0093</td>
                                            <td >arroz</td>
                                            <td >129.000</td>
                                            <td><div class="invoice-action">
                                                <a href="{{ route('admin.editarFicha') }}" class=" btn-flat2 invoice-action-edit">
                                                    <i class="material-icons">edit</i>
                                                 </a>
                                                 <a href="" class="btn-flat2 invoice-action-view mr-4">
                                                    <i class="material-icons ">local_printshop</i >
                                                </a>
                                                 <a href="" class="btn-flat2 invoice-action-view mr-4" >
                                                    <i class="material-icons">visibility</i >
                                                    </a>
                                                <a href="" class="btn-flat2  mr-4">
                                                   <i class="material-icons">cancel</i>
                                                </a>
                                                </div>
                                            </td>
                                            

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <div class="col s12 bt-2 right">
                   
                    <a class="btn  btn-light-red waves-effect waves-light mt-2 mb-2 right" type="submit" name="action">
                        Anular documentos
                    </a>
                    <a class="btn  btn-light-orange waves-effect waves-light mt-2 mb-2 right" type="submit" name="action">
                        Entidade externas
                    </a>
                </div>


            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                <a class="modal-trigger btn-floating btn-large primary-text gradient-45deg-green-teal  gradient-shadow" >
                    <i class="material-icons">add</i>
                </a>
                <ul>
                    <li><a href="{{ route('admin.posto_venda') }}" class="btn-floating tooltipped yellow"data-position="left" data-tooltip="Ir para balcão" >
                        <i class="material-icons">monetization_on</i></a>
                    </li>
                    <li>
                        <a href="{{-- route('') --}}" class="btn-floating tooltipped red"data-position="left" data-tooltip="Fechar o caixa" name="action">
                        <i class="material-icons">layers</i></a>
                    </li>

                   
                </ul>
            </div>
    </section>

        </section>
    </div>

</div>
@endsection
