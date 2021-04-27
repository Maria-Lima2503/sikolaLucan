@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-search.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-sidebar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-todo.css')}}">
@endsection
<ul class="collapsible expandable">

    <li class="active">
        <div class="collapsible-header"><i class="material-icons light-green-text">search</i>Pesquisar</div>
        <div class="collapsible-body">
            <div class="app-wrapper">
                <div class="app-search">
                <!--i class="material-icons mr-2 search-icon">search</i-->
                    <input id="autocomplete-input" class="app-filter autocomplete validate" type="text" placeholder="Nome, Número, BI ou Telefone" required>
                </div>
            </div>
        </div>
    </li>
    <li class="">
        <div class="collapsible-header ">
            <div class="right"><i class="material-icons light-green-text">details</i>Pesquisa Avançada</div>
        </div>
        <div class="collapsible-body">
            <div class="row">
                <div class="input-field col m3" >
                    <select class="validate">
                        <option value=" " disabled selected></option>
                        <option value="1">Descrição do Ano</option>
                        <option value="1">2020/2021</option>
                    </select>
                    <label>Ano Lectivo</label>
                </div>
                <div class="input-field col m5">
                    <select class="validate">
                        <option value=" " disabled selected></option>
                        <option value="1">Informática </option>
                    </select>
                    <label>Curso:</label>
                </div>
                <div class="input-field col m2">
                    <select class="validate">
                        <option value=" " disabled selected></option>
                        <option value="1">10ªclasse </option>
                    </select>
                    <label>Ano Currícular:</label>
                </div>
                <div class="input-field col m2">
                    <select class="validate">
                        <option value=" " disabled selected></option>
                        <option value="1">TGB </option>
                    </select>
                    <label>Turma:</label>
                </div>
                <!--div class="input-field col m2 s12">
                    <label for="designa">Nº Incrição</label>
                    <input type="text" class="validate" name="designa" id="designa"  required>
                </div>
                <div class="input-field col m8 s12">
                    <label for="designa">Nome:</label>
                    <input type="text" class="validate" name="designa" id="designa"  required>
                </div-->
                <div class="input-field col m2 s12">
                    <button class="btn box-shadow btn-light-orange  waves-effect waves-light mt-2 mb-4 right" type="submit" name="action">
                        Pesqusar<i class="material-icons right">search</i >
                    </button>
                </div>
            </div>
        </div>
    </li>
</ul>

@section('js')
<script src="{{asset('js/scripts/form-select2.js')}}"></script>
@endsection
@section('vendor-script')
<script src="{{asset('js/scripts/app-todo.js')}}"></script>
@endsection