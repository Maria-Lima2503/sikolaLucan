@extends('layouts/contentLayoutMaster')

@section("title","Conta Corrente do Aluno")

@section("content")

<div class="section">
    <div class="container">

        <section class="users-list-wrapper section">
           
                <div class="card green darken-1">
                    <div class="card-content">
                        <p class="caption mb-0" style="color: white"> <i class="material-icons left">attach_money</i>
                            <span>Contas de correntes de Alunos</span>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">

                        <div class="row">
                            <div class="col s3 left">
                                <div class="row box-shadow">
                                 <img height="64" width="64"  src="{{ asset("images/avatar/") }}" alt="foto" />
                                </div>
                            </div>
                       
                            <div class="col s9 right">
                            
                                <div class="input-field col m2 s12 ">
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">2020 </option>
                                        <option value="2">2019</option>
                                    </select>
                                    <label>Ano Lectivo</label>
                                </div>

                                <div class="input-field col m6 s12">
                                    <label for="designa">Pesquisar:</label>
                                    <input type="text" class="validate" placeholder="Com Nº, Nome, nº BI, Telefone" id="designa" required>
                                </div>
                                <div class="input-field col m2 s12">
                                    <label for="designa">Saldo da Conta</label>
                                    <input type="text" class="validate" placeholder="0,00" id="designa" required>
                                </div>
                                <div class="input-field col m2 s12 ">
                                    <select class="validate">
                                        <option value=" " disabled selected></option>
                                        <option value="1">Todas </option>
                                    
                                    </select>
                                    <label>Guias</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col m12 s12">
                                <h5 name="designa">Dados do Estudante blablabla</h5>
                            </div>
                                
                        </div>
                        <div class="row">
                            <div class="col m4 s12 right">
                                    <a class="btn box-shadow  waves-effect waves-light mt-4  right" type="submit" name="action">
                                    ir para balcão
                                    </a>
                                </div>
                            </div>

                        
                    </div>
                </div>




                <div  class="card position-none">
                    <div class="row">
                        <div class="col s12">
                            <ul class="tabs card-border-gray ">
                                    <li class="tab col m6  p-0 "><a class="active" href="#opcao1">Histórico de Conta</a></li>
                                    <li class="tab col m6  p-0 "><a href="#opcao2">Documentos Emitidos</a></li>
                            </ul>
                        </div>
                    </div>

                    <div id="opcao1" class="row">
                        <div class="card-content">

                        <div class="col s12">
                        <div class="input-field col m6 ">
                            <select class="validate">
                                <option value=" " disabled selected>Selecione </option>
                                <option value="1">Doutorado/a</option>

                            </select>
                            <label>Habilitações Literárias</label>
                        </div>
                        <div class="input-field col m6 ">
                            <select class="validate">
                                <option value=" " disabled selected> selecione </option>
                                <option value="1">Bla bla bla</option>
                            </select>
                            <label>Formação Académica(Curso)</label>
                        </div>
                        </div>
                        <div class="col s12">

                            <div class=" col m3">
                                <label>Data de Admissão</label>
                                <input type="text" class="validate datepicker" name="lastName" required>
                            </div>
                            <div class=" col m3">
                                <label>Categoria Salarial</label>
                                <input type="text"class="validate" name="lastName" required>
                            </div>
                            <div class=" col m3">
                                <label>Utilizador</label>
                                <input type="text" class="validate" name="lastName" required>
                            </div>
                            <div class=" col m3">
                                <label>Palavra-Passa</label>
                                <input type="text" class="validate" name="lastName" required>
                            </div>
                        </div>

                        </div>
                    </div>

                        <div id="opcao2" class="row">
                            <div class="card-content">

                                    <div class="row">
                                        <div class="row col m6">
                                            <h6 class="mb-2">Residência <i class="material-icons">call</i></h6>

                                                <div class="input-field col m12 s12">
                                                    <select class="validate">
                                                            <option value=" " disabled selected> </option>
                                                            <option value="1"></option>
                                                            <option value="2">Femenino</option>
                                                    </select>
                                                    <label for="t">Município</label>
                                                </div>
                                                <div class="input-field col m6 s12">
                                                    <select class="validate">
                                                        <option value=" "disabled selected> </option>
                                                        <option value="1">Cabolombo</option>
                                                        <option value="2">Femenino</option>
                                                    </select>
                                                    <label >Distrito</label>
                                                </div>
                                                <div class=" col m6 s12">
                                                    <label  for="kj">Bairro</label>
                                                    <input type="text" class="validate" id="firstName" required>
                                                </div>
                                            </div>

                                            <div class="row col m6">
                                                <h6 class="mb-2">Telefones<i class="material-icons"></i></h6>

                                                <div class=" col m6 s12">
                                                    <label  for="nO">Tel. Residencial</label>
                                                    <input type="text" class="validate" id="firstName" required>
                                                </div>
                                                <div class=" col m6 s12">
                                                    <label  for="nC">Telefone 1:</label>
                                                    <input type="text" class="validate" id="firstName" required>
                                                </div>

                                                <div class=" col m6 s12">
                                                    <label  for="nC">Email:</label>
                                                    <input type="email" class="validate" id="firstName" required>
                                                </div>
                                                <div class=" col m6 s12">
                                                    <label  for="nC">Email Alt2:</label>
                                                    <input type="email" class="validate" id="firstName" required>
                                                </div>
                                            </div>

                                    </div>
                            </div>
                        </div>
            </div>

                <!--div class="card-reveal col m6 s12 ">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">
                            Guias de Factura Depende<i class="material-icons right">close</i>
                        </span>
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th data-field="id">Ref.</th>
                                    <th data-field="month">Designãção</th>
                                    <th data-field="item-sold">Data de Limite</th>
                                    <th data-field="item-price">Valor </th>
                                    <th data-field="total-profit">Select</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Janeiro</td>
                                    <td>122</td>

                                    <td>$122,00.00</td>
                                    <td> <input type="checkbox" /></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fevereiro</td>
                                    <td>122</td>

                                    <td>$122,00.00</td>
                                    <td> <input type="checkbox" /></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Março</td>
                                    <td>122</td>

                                    <td>$122,00.00</td>
                                    <td> <input type="checkbox" /></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>

                <div class="card-reveal col m6 s12">
                    <div class="card">
                    <div class="card-content">
                        <span class="card-title grey-text text-darken-4">
                            Serviços e Produtos Liquidados<i class="material-icons right">close</i>
                        </span>
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th data-field="id">Recibo</th>
                                    <th data-field="month">Designãção</th>
                                    <th data-field="item-sold">Data</th>
                                    <th data-field="item-price">Valor </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Janeiro</td>
                                    <td>122</td>
                                    <td>$122,00.00</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Fevereiro</td>
                                    <td>122</td>
                                    <td>$122,00.00</td>
                                </tr>
                        

                            </tbody>
                        </table>
                    </div>
                    </div>
                </div-->



        </div>
    </section>
</div>
@endsection
