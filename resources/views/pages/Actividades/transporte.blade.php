
@extends('layouts/contentLayoutMaster')

@section("title","Transporte ")

@section("content")

<div class="section">
    <div class="container">
            <section class="users-list-wrapper section">
                <div class="col s12 m12 l8 mb-2" style="width: 100%;">
                    <div class="card-title" >

                        <div class="row">
                            <div class="Centralizar col s9 left">
                                <i class="material-icons medium left">layers</i>
                                <span> Manutenção de Profissões </span>
                            </div>
                            <div class="col m3 right">
                                <a href="#nova" class="btn modal-trigger  blue waves-effect waves-light mt-3 box-shadow-none border-round mr-1 mb-1 right" >
                                   <i class="material-icons left">add</i>Nova
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="card-content ">
                        <div class="responsive-table">
                            <table class="table invoice-data-table white border-radius-4 pt-1">

                                <thead class="teal lighten-4 ">
                                    <tr>
                                        <th >Código</th>
                                        <th >Descrição</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td  >55600 </td>
                                        <td  > Professor</td>

                                    </tr>

                                </tbody>
                            </table>


                        </div>
                    </div>

                </div>
                </div>
            </section>
        </div>

</div>

@endsection
