@extends('layouts/contentLayoutMaster')

@section("title","Balção de Pagamento")

@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
@endsection
@section("content")

<div class="section">

    <div id="view-example">

        <div id="meioPag" class="modal width-50" >
            <div class="modal-content ">
                <h6>Selecione meio de pagamento</h6>
            </div>

               <div class="row col m8 left">
                   <table st class=" ">
                        <thead class="grey darken-4 nav-tr-color">
                           <tr>
                               <th >Código</th>
                                <th >Descrição</th>
                                <th >Conta</th>
                                <th >Data Pagto.</th>
                                <th >Total</th>
                            </tr>
                        </thead>
                        <tbody class="bordas">
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="modal-close waves-effect waves-green btn-flat">Sair</a>
                    <a href="#" class="modal-close waves-effect waves-green btn-flat">Salvar</a>
                </div>
        </div>
    </div>

    <div class="container">
        <section class="users-list-wrapper section">
            <div class="card green darken-1">
                <div class="card-content">
                    <p class="caption mb-0" style="color: white"> <i class="material-icons left">monetization_on</i>
                        <span>Vendas e Liquidação de Produtos/Serviços</span>
                    </p>
                </div>
            </div>

            <div class="card">
              <div class="card-content">
                <div class="row">
                    <div class=" col s9 left">
                        <div class="row">

                            <div class="col s2">
                                <div class="row">
                                    <img class="width-100" src="{{ asset("images/sikola/19.png") }}" alt="Sikola logo"/>
                                </div>
                            </div>
                            <div class="col s10">
                            <div class="row">
                                <div class="input-field col s3" >
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">2020 </option>
                                    </select>
                                    <label>Ano Lectivo</label>
                                </div>
                                <div class="input-field col s3">
                                    <label for="designa">Nº de Estudante:</label>
                                    <input type="text" class="validate" id="designa"  required>
                                </div>
                                <div class="input-field col s6">
                                    <label for="designa">Nome de Estudante:</label>
                                    <input type="text" class="validate" id="designa"  required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m8 s12">
                                    <label for="designa">Dados</label>
                                    <input type="text" class="validate" id="designa"  required>
                                </div>
                                <div class="input-field col m4 s12">
                                    <label for="saldo">Saldo Corrente</label>
                                    <input type="text" class="validate" id="saldo"  required>
                                </div>
                            </div>
                            </div>

                        <div class="row">
                            <div class="input-field col m3">
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">Fatura/Recibo </option>
                                </select>
                                <label>Documentos a Emitir</label>
                            </div>
                            <div class="input-field col m3">
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">FR/2021</option>
                                </select>
                                <label>Série</label>
                            </div>
                            <div class="col m4" >
                                <label>Descontos de Bolsa</label>
                                <input type="text" class="validate" id="bolsa" style="height: 2.5rem" required>
                            </div>
                            <div class="input-field col m2">
                                <select class="validate ">
                                    <option value="1">%</option>
                                    <option value="2">kz</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col m4" >
                                <label>Descontos de Mensalidade</label>
                                <input type="text" class="validate" id="mensal" style="height: 2.5rem" required>
                            </div>
                            <div class="input-field col m2">
                                <select class="validate  ">
                                    <option value="1">%</option>
                                    <option value="2">kz</option>
                                </select>
                            </div>
                            <div class="col m4" >
                                <label>Outros Descontos</label>
                                <input type="text" class="validate" id="outros" style="height: 2.5rem" required>
                            </div>
                            <div class="input-field col m2">
                                <select class="validate  ">
                                    <option value="1">%</option>
                                    <option value="2">kz</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="input-field col m3">
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">Pronto Pagamento</option>
                                    <option value="2">Presentes</option>
                                </select>
                                <label>Tipo de Pagamento a Efectuar</label>
                            </div>
                            <div class="input-field col m6">
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">2019</option>
                                </select>
                                <label>Produtos/Serviços</label>
                            </div>
                            <div class="input-field col m3">
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">2 Meses</option>
                                    <option value="2">3 Meses</option>
                                </select>
                                <label>Quantidade</label>
                            </div>
                        </div>
                    </div>
                    <div class="row col s3 right pl-0">
                        <div class="col m6">
                                <a href=""><img class="width-100" src="{{ asset("images/sikola/23.jpg") }}" alt="Sikola logo" /></a>
                                <span>Recebimento por TPA</span>
                        </div>
                        <div class="col m6">
                                <a href=""><img class="width-100"  src="{{ asset("images/sikola/24.jpg") }}" alt="Sikola logo" /></a>
                                <span>Rec. Por Transferêcia bancária</span>
                        </div>
                        <div class="col m6">
                                <a href=""><img class="width-100" src="{{ asset("images/sikola/14.jpg") }}" alt="Sikola logo" /></a>
                                <span>Recebimento Numerário</span>
                        </div>
                        <div class="col m6">
                                <a href=""><img class="width-100 responsive-img photo-border mt-10" style="height: 4rem" src=" {{ asset("images/sikola/22.jpg") }}" alt="Sikola logo"/></a>
                                <span>Rec. Depósito Bancário</span>
                        </div>

                    </div>
                </div>
              </div>
            </div>

            <div id="basic-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <div class="responsive-table">
                        <div class="row">
                            <table class="table invoice-data-table white border-radius-4 pt-1">
                                <thead class="blue lighten-4">
                                    <tr>
                                        <th >Referência</th>
                                        <th >Designação</th>
                                        <th >Quantidade</th>
                                        <th >Data Limite</th>
                                        <th >Preço</th>
                                        <th >Desconto</th>
                                        <th >Multa</th>
                                        <th >IVA/Imposto(%)</th>
                                        <th >Valor Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>00394</td>
                                        <td>Mensalidade da 10ªEnfermagem - Janeiro</td>
                                        <td><input class="input-field bordar-invisible" type="number"/></td>
                                        <td>02/03/2021</td>
                                        <td>10.000.000</td>
                                        <td> -2% </td>
                                        <td> +3% </td>
                                        <td> --- </td>
                                        <td>10.100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col s8 left">
                                <table  class="table invoice-data-table white border-radius-4 pt-1">
                                    <thead class="grey darken-4 nav-tr-color">
                                         <tr>
                                            <th >Descrição</th>
                                            <th >Nº do Documento</th>
                                            <th >Conta</th>
                                            <th >Data </th>
                                            <th >Total</th>

                                        </tr>
                                    </thead>
                                    <tbody class="bordas">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col s4">
                                <table  class="bordas tbLista">

                                    <tbody >
                                        <tr>
                                            <th class="green-text text-accent-4">Total Prod./Serv.</th>
                                            <td> <input type="text"placeholder="0,00">  </td>

                                        </tr>
                                        <tr>
                                            <th class="deep-purple-text text-darken-4">Descontos</th>
                                            <td><input type="text"placeholder="0,00">  </td>

                                        </tr>
                                        <tr>
                                            <th class="lime-text">Multas</th>
                                            <td><input type="text"placeholder="0,00">   </td>

                                        </tr>
                                        <tr>
                                            <th class="green-text text-accent-4">Total Sem IVA</th>
                                            <td><input type="text"placeholder="0,00">  </td>
                                        </tr>
                                        <tr>
                                             <th class="materialize-red-text">Total de IVA</th>
                                            <td> <input type="text"placeholder="0,00">  </td>
                                        </tr>
                                        <tr>
                                            <th class="deep-purple-text text-darken-4">Total Do Documento</th>
                                            <td> <input type="text"placeholder="0,00">  </td>
                                        </tr>
                                        <tr>
                                            <th class="lime-text">Total a Pagar</th>
                                            <td><input type="text"placeholder="0,00">  </td>
                                        </tr>
                                        <tr>
                                            <th class="lime-text">Total Recebido</th>
                                            <td><input type="text"placeholder="0,00">  </td>
                                        </tr>
                                        <tr>
                                            <th class="materialize-red-text">Falta Liquidar</th>
                                            <td> <input type="text"placeholder="0,00">  </td>
                                        </tr>
                                         <tr>
                                            <th class="materialize-red-text">Troco/Saldo</th>
                                            <td> <input type="text"placeholder="0,00">  </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row center mb-2">
                <button class="btn black waves-light waves-effect" type="submit" name="action">
                    Anular Documento
                </button>
            </div>

            <div class="input-field col s12 mt-2">
                <div class="row right">
                    <button class="btn btn-light-green waves-light waves-effect" type="submit" name="action">
                        Gravar e Imprimir
                    </button>
                    <button class="btn btn-light-green waves-light waves-effect" type="submit" name="action">
                        Gravar Documento
                    </button>
                    <a href="" class="btn btn-light-red waves-light waves-effect" type="submit" name="action">
                        Cancelar<i class="material-icons left">reply</i >
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
{{-- page scripts  --}}
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
@endsection
@section('vendor-script')
<script src="{{asset('vendors/jquery-validation/jquery.validate.min.js')}}"></script>
@endsection
