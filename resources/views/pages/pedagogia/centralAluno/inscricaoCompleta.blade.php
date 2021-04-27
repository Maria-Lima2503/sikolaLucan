@extends('layouts/contentLayoutMaster')

@section("title","Inscrição Completa")

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/dropify/css/dropify.min.css')}}">
@endsection
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/charts-sparkline.css')}}">
@endsection


{{-- page content --}}
@section("content")

<div class="section">

        <div class="container">
            <section class="users-list-wrapper section">


                        <div class="card green darken-1">
                            <div class="card-content">
                                <p class="caption mb-0" style="color: white"> <i class="material-icons left">account_circle</i>
                                  <span>Inscrição  Completa</span>
                                </p>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-content ">
                                <div class="row">
                                    <div class="row ">
                                        <div class="input-field col m6 s12 ">
                                            <select>
                                                <option value=" " disabled selected></option>
                                                <option value="1">Escolinha da paz</option>
                                                <option value="2">Palanquinhas</option>
                                            </select>
                                            <label>Unidade de Ensino</label>
                                        </div>

                                        <div class="input-field col m3 s12 ">
                                            <select class="validate">
                                                <option value=" " disabled selected></option>
                                                <option value="1">2020 </option>

                                            </select>
                                            <label> Ano Lectivo</label>
                                        </div>
                                        <div class=" col m3 ">
                                            <label for="preco">Nº de Processo:</label>
                                            <input type="text" class="validate" name="preco1" id="preco" required>
                                        </div>
                                        <x-dados_pessoa />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div  class="card position-none">

                                <div class="row ">

                                    <div class="col s12">
                                        <ul class="tabs card-border-gray ">
                                            <!--ul class="tabs tabs1 navbar-list tx width-100  tab-demo z-depth-1" tab1-->

                                                <li class="tab p-0">
                                                    <a class="active waves-effect waves-block waves-light" href="#card1">Filiação e Encarregado</a>
                                                </li>
                                                <li class="tab p-0">
                                                    <a class="waves-effect waves-block waves-light" href="#card2">Contactos e Resideência</a>
                                                </li>
                                                <li class="tab p-0">
                                                    <a class="waves-effect waves-block waves-light" href="#card3">Dados Académico</a>
                                                </li>
                                                <li class="tab p-0">
                                                    <a class="waves-effect waves-block waves-light" href="#card4">Rúbricas/Mensais</a>
                                                </li>
                                                <li class="tab p-0 ">
                                                    <a class="waves-effect waves-block waves-light " href="#card5">Observação</a>
                                                </li>
                                        </ul>
                                   </div>
                                </div>
                                <div class="row ">
                                    <div id="card1">
                                        <div class="card-content col s12 ">
                                            <span class=" mb-2">Filiação<i class="material-icons">person_outline</i></span>

                                            <div class="row">
                                                <div class=" col m6">
                                                    <label>Nome da Mãe:</label>
                                                    <input type="text" class="validate" name="lastName" required>
                                                </div>
                                                <div class=" col m6">
                                                    <label>Nome do Pai:</label>
                                                    <input type="text" class="validate" name="lastName" required>
                                                </div>
                                            </div>
                                            <span class="mb-2">Encarregado/Responsável Financeiro</span>

                                        <div class="row ">
                                            <div class="input-field col m4 s12">
                                                <select class="validate">
                                                    <option value=" " disabled selected></option>
                                                    <option value="1"> Avô</option>
                                                    <option value="2">Mãe</option>
                                                    <option value="2">Pai</option>
                                                    <option value="2">Tia/o</option>
                                                    <option value="2">Madrinha</option>
                                                </select>
                                                <label>Grau Parentesco </label>
                                            </div>
                                            <div class="col m4 s12">
                                                <label for="nC">Nº de Identifição:</label>
                                                <input type="text" class="validate" id="firstName" required>
                                            </div>
                                            <div class="col m4 s12">
                                                <label for="nC">Nome Encarregado</label>
                                                <input type="text" class="validate" id="firstName" required>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col m4 s12">
                                                <label for="nC">Tel. 1:</label>
                                                <input type="text" class="validate" id="firstName" required>
                                            </div>
                                            <div class="col m4 s12">
                                                <label for="nC">Tel. 2:</label>
                                                <input type="text" class="validate" id="firstName" required>
                                            </div>
                                            <div class="col m4 s12">
                                                <label for="nC">Email de Encarregado</label>
                                                <input type="text" class="validate" id="firstName" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div id="card2">
                                <div class="card-content col s12">
                                <div class="row">
                                    <div class="row col m6">
                                        <h6 class="mb-2">Residência <i class="material-icons">call</i></h6>

                                        <div class="col m6">
                                            <label for="nC">Rua</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
                                        <div class=" col m6">
                                            <label for="nC">Nº Da Casa</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
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
                                                <option value=" " disabled selected> </option>
                                                <option value="1">Cabolombo</option>
                                                <option value="2">Femenino</option>
                                            </select>
                                            <label>Distrito</label>
                                        </div>
                                        <div class=" col m6 s12">
                                            <label for="kj">Bairro</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
                                    </div>

                                    <div class="row col m6">
                                        <h6>Telefones<i class="material-icons"></i></h6>
                                        <br>
                                        <div class=" col m6 s12">
                                            <label for="nO">Tel. Residencial</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
                                        <div class=" col m6 s12">
                                            <label for="nC">Telefone 1:</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
                                        <div class=" col m6 s12">
                                            <label for="nC">Telefone 2:</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
                                        <div class=" col m6 s12">
                                            <label for="nC">Email:</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
                                        <div class=" col m6 s12">
                                            <label for="nC">Email Alt2:</label>
                                            <input type="text" class="validate" id="firstName" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </div>

                        <div id="card3">
                            <div class="card-content col s12 ">
                                <h6 class="mb-2">Dados Académicos</h6>

                                <div class="row">
                                    <div class="input-field col m8">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">Deposito a pronto</option>
                                            <option value="2">Salada</option>
                                        </select>
                                        <label for="nO">Unidade Organíca</label>
                                    </div>
                                    <div class="input-field col m6">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">Deposito a pronto</option>
                                            <option value="2">Não se aplica</option>
                                        </select>
                                        <label for="nC">Nome do Curso</label>
                                    </div>
                                    <div class="input-field col m3">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">Deposito a pronto</option>
                                            <option value="2">Não se aplica</option>
                                        </select>

                                        <label for="nC">Ano Curricular</label>
                                    </div>
                                    <div class="input-field col m3">
                                        <select class="validate">
                                            <option value=" " disabled selected></option>
                                            <option value="1">Deposito a pronto</option>
                                            <option value="2">Deposito a prazo</option>
                                        </select>
                                        <label for="nC">Turno</label>
                                    </div>
                                </div>
                                <div class="row ">

                                    <div class=" col m6 s12">
                                        <label for="nO">Escola Proveniente</label>
                                        <input type="text" class="validate" id="firstName" required>
                                    </div>
                                    <div class=" col m6 s12">
                                        <label for="nC">Curso Frequentado</label>
                                        <input type="text" class="validate" id="firstName" required>
                                    </div>
                                    <div class=" col m4 s12">
                                        <label for="nC">Classe Anterior</label>
                                        <input type="text" class="validate" id="firstName" required>
                                    </div>
                                    <div class=" col m4 s12">
                                        <label for="nC">Aproveitamento</label>
                                        <input type="text" class="validate" id="firstName" required>
                                    </div>
                                    <div class=" col m4 s12">
                                        <label for="nC">Data de Saída</label>
                                        <input type="text" class="validate datepicker" id="firstName" required>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div id="card4">
                                <div class="card-content col s12">

                                <h6></h6>
                                <div class="row col s12 bordas">
                                    <table id="scroll-dynamic" class="display">
                                        <thead class="cardFundo">
                                            <tr>

                                                <th rowspan="4" data-field="id">Descrição</th>
                                                <th rowspan="4" data-field="name">Existência</th>
                                                <th rowspan="2" data-field="name"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <dt></dt>
                                                <dt></dt>
                                                <dt></dt>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div id="card5">
                                <div class="card-content col s12 ">

                                <p style="text-align: center;">Selecine os documentos entregues pelo/a estudante</p>
                                <div class="row col m6">
                                    <table id="scroll-dynamic" class="display">
                                        <thead class="cardFundo">
                                            <tr>

                                                <th rowspan="2" data-field="price">Documento</th>
                                                <th rowspan="2" data-field="price"></th>
                                                <th class="" style="width: 30%;" rowspan="2" data-field="name">Quantos</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>Atestado Médico</td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>
                                            <tr>

                                                <td>Bilhete de Identificação</td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>
                                            <tr>

                                                <td>Cédulo Pessoal</td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>
                                            </tr>
                                            <tr>

                                                <td>Certidão de Vacinas</td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>
                                            <tr>

                                                <td>Atestado Médico</td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="row col m6">
                                    <table id="scroll-dynamic" class="display">
                                        <thead class="cardFundo">
                                            <tr>
                                                <th rowspan="2" data-field="price">Documento</th>
                                                <th rowspan="2" data-field="price"></th>
                                                <th class="" style="width: 30%;" rowspan="2" data-field="name">Quantos</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>Certificado Original </td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>
                                            <tr>

                                                <td>Fotografias Tipo Passe </td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>
                                            <tr>

                                                <td>Guia de Tranferêcia </td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>
                                            <tr>

                                                <td>Passa Porte</td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>
                                            <tr>

                                                <td>Talão de Recencimanto</td>
                                                <td> <label><input type="checkbox" /><span></span></label></td>
                                                <td> <input type="text" />  </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                    </div>
                                </div>

                            </div>
                        </div>



            <x-botoes_cadastro />
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
