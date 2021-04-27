@extends('layouts/contentLayoutMaster')

@section("title","Artigos e Serviços")

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
                    <p class="caption mb-0" style="color: white"> <i class="material-icons left">toc</i>
                        <span>Lista De Artigos ou Serviços</span>
                        <span> <a class="btn-flat2  waves-effect waves-light right" style="color: white" type="submit" name="action">
                            <i class="material-icons">local_printshop</i >
                        </a></span>
                    </p>


                </div>
            </div>

            <div class="card card card-default">
                <div class="card-content">

                        <div class="row">

                            <div class="input-field col m2 s12">
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">2019 </option>
                                </select>
                                <label>Ano Lactivo</label>
                            </div>
                            <div class="input-field col m4 s12">
                                <select class="validate">
                                    <option value=" " disabled selected></option>
                                    <option value="1">Produtos acabados </option>
                                </select>
                                <label>Classificação</label>
                            </div>
                            <div class="input-field col m4 s12">
                                <label>Descrição:</label>
                                <input type="text" class="validate" name="curso" id="curso"  required>
                            </div>
                            <div class="input-field  col m2 s12">
                                <a class="btn box-shadow btn-light-orange waves-effect waves-light mt-10 mb-0 right" type="submit" name="action">
                                    Pesquisar<i class="material-icons right">search</i >
                                </a>
                            </div>
                        </div>
                </div>
            </div>

            <div class="card">
                <div class="card-content">

                    <div class="row ">
                        <div class="col s12">
                            <table id="" class="display mb-2">

                                <thead class="teal lighten-4 ">

                                    <tr>
                                        <th colspan="47 ">Nº</th>

                                        <th colspan="47">Desinação</th>
                                        <th colspan="47">Preço Un.</th>
                                        <th colspan="1">  </th>
                                        <th colspan="1" >  </th>

                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>

                                        <td colspan="47" >0093 </td>
                                        <td colspan="47" >arroz </td>
                                        <td colspan="47" >129.000 </td>
                                      <td colspan="1">
                                            <a class="btn-flat2 mycon_green waves-effect waves-light right" type="submit" name="action">
                                            <i class="material-icons ">edit</i >
                                            </a>
                                        </td>

                                        <td colspan="1">
                                            <a class="btn-flat2  mycon_red waves-effect waves-light right" type="submit" name="action">
                                            <i class="material-icons ">cancel</i >
                                            </a>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td colspan="47">Bata</td>
                                        <td colspan="47">null</td>
                                        <td colspan="47" >120.394 </td>
                                        <td colspan="1">
                                            <a class="btn-flat2 mycon_green waves-effect waves-light right" type="submit" name="action">
                                            <i class="material-icons ">edit</i >
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

                </div>
            </div>


            <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
                <a class="modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
                    <i class="material-icons">add</i>
                </a>
                <ul>
                    <li><a href="{{ route('admin.novo_art_serv') }}"  class="btn-floating tooltipped  blue" data-position="left" data-tooltip="Novo Artigo/Serviço" ><i class="material-icons">layers</i></a>
                    </li>

                    <li><a href="{{ route('admin.inscricaocompleta') }}" class="btn-floating tooltipped orange" data-position="left" data-tooltip="Imprimir" ><i class="material-icons">local_printshop</i></a>
                    </li>
                </ul>
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
