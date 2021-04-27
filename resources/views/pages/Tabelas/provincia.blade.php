
@extends('layouts/contentLayoutMaster')

@section("title","Províncias")

@section("content")

<div class="section">

<div id="view-example">
    <div id="nova"  class="modal width-50" >
        <div class="modal-content">
            <h5 class="mb-5">Manutenção de Províncias</h5>
            <div class="container">
                <div class="row">
                    <form>
                        <div class="input-field col m12 s12 " >
                            <select class="validate">
                                <option value=" " disabled selected></option>
                                <option value="1">Moçambique</option>
                                <option value="2">Angola</option>
                            </select>
                            <label >País</label>
                        </div>

                        <div class="input-field col s12 m12 ">
                            <input id="icon_prefix3" type="text" class="validate">
                            <label for="icon_prefix3">Províncias </label>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a type="button" class="modal-close waves-effect waves-green btn-flat">Sair</a>
            <a href="#" class="modal-close waves-effect waves-green btn-flat">Salvar</a>
        </div>
    </div>
    <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
        <a href="#nova" class="btn modal-trigger btn-floating btn-large gradient-45deg-green-teal gradient-shadow" >
            <i class="material-icons">add</i>
        </a>
    </div>
</div>

    <div class="container">
        <section class="users-list-wrapper section">

                <div class="card green darken-1">
                        <div class="card-content">
                            <p class="caption mb-0" style="color: white"><i class="material-icons left">flag</i>
                                <span>Gestão Províncias</span>
                            </p>
                        </div>
                </div>

                <div class="card">
                    <div class="card-content card_sem_padd-4">
                        <div class="row">
                            <form>
                                <div class="input-field col s12 m7 s16">
                                    <input id="icon_prefix3" type="text" class="validate">
                                    <label for="icon_prefix3">Digite </label>
                                </div>
                                <div class="col s12 m4 l14 display-flex align-items-center show-btn">
                                    <a class="btn box-shadow btn-light-orange waves-effect waves-light mb-1 right" type="submit" name="action">
                                         Pesquisar<i class="material-icons right">search</i >
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                        <div class="card">
                            <div class="card-content card_sem_padd">
                                <!-- datatable start -->
                                <div class="responsive-table">

                                    <table id="users-list-datatable" class=" table invoice-data-table white border-radius-4 pt-1">
                                        <thead class="tab-color-blue">
                                            <tr>
                                                <th>Código</th>
                                                <th>Designação Oficial</th>
                                                <th>País</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>00023 </td>
                                                <td>Luanda</td>
                                                <td> Angola</td>
                                                <td class="txt">
                                                    <a
                                                        class="btn-floating mb-1 btn-flat waves-effect waves-light green darken-1 white-text btn-small">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <a
                                                        class="btn-floating mb-1 btn-flat waves-effect waves-light cyan white-text btn-small">
                                                        <i class="material-icons">arrow_downward</i>
                                                    </a>
                                                    <a
                                                        class="btn-floating mb-1 btn-flat waves-effect waves-light blue white-text btn-small">
                                                        <i class="material-icons">lock</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


            </section>

    </div>
</div>

@endsection
{{-- page scripts  --}}
@section('page-script')
<script src="{{asset('js/scripts/advance-ui-modals.js')}}"></script>
@endsection
