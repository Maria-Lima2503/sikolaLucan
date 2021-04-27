<div class="{{ $section }}">
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h4 class="card-title">{{ $sectionTitle }}</h4>
                    <div class="row">
                        <div class="col s12">
                            @if ($listar)
                                <table id="page-length-option" class="display">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            @else
                                <div id="html-view-validations">
                                    <form class="formValidate0" id="formValidate0" method="get">
                                        <div class="row">

                                            <div class="col s12">
                                                <div class="input-field col s6">
                                                    {!! Form::label('anolecivo', 'Ano Lectivo *'); !!}
                                                    {!! Form::text('anolecivo', null,['class'=>'validate','id'=>'anolecivo','name'=>'anolecivo','required']) !!}
                                                </div>
                                                <div class="input-field col s6">
                                                    {!! Form::label('descricao', 'Descricao *'); !!}
                                                    {!! Form::text('descricao', null,['class'=>'validate','id'=>'descricao','name'=>'descricao','required']) !!}
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="input-field col s4">
                                                    {!! Form::label('datainicio', 'Data de Inicio *'); !!}
                                                    {!! Form::date('datainicio', \Carbon\Carbon::now(),['class'=>'validate','id'=>'datainicio','name'=>'datainicio','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('datatermino', 'Data de Termino *'); !!}
                                                    {!! Form::date('datatermino', \Carbon\Carbon::now(),['class'=>'validate','id'=>'datatermino','name'=>'datatermino','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('duracaomeses', 'Duracao'); !!}
                                                    {!! Form::number('duracaomeses', 0,['class'=>'validate','id'=>'duracaomeses','name'=>'duracaomeses','disabled']) !!}
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="input-field col s4">
                                                    {!! Form::label('datainiciomatricula', 'Data de Inicio Matricula'); !!}
                                                    {!! Form::date('datainicio', \Carbon\Carbon::now(),['class'=>'validate','id'=>'datainicio','name'=>'datainicio','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('dataterminomatricula', 'Data de Termino Matricula'); !!}
                                                    {!! Form::date('datatermino', \Carbon\Carbon::now(),['class'=>'validate','id'=>'datatermino','name'=>'datatermino','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('duracao', 'Duracao'); !!}
                                                    {!! Form::number('duracao', 0,['class'=>'validate','id'=>'duracao','name'=>'duracao','disabled']) !!}
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="input-field col s4">
                                                    {!! Form::label('taxadeinscricao', 'Taxa de Inscricao'); !!}
                                                    {!! Form::number('taxadeinscricao', null,['class'=>'validate','id'=>'taxadeinscricao','name'=>'taxadeinscricao','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('multamatricula', 'Multa Matricula'); !!}
                                                    {!! Form::number('multamatricula', null,['class'=>'validate','id'=>'multamatricula','name'=>'multamatricula','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('diacobranca', 'Dia de Cobranca'); !!}
                                                    {!! Form::number('diacobranca', 1,['class'=>'validate','id'=>'diacobranca','name'=>'diacobranca','required']) !!}
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="input-field col s4">
                                                    {!! Form::label('modocobranca', 'Modo de Cobranca'); !!}
                                                    {!! Form::text('modocobranca', null,['class'=>'validate','id'=>'modocobranca','name'=>'modocobranca','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('iniciocobranca', 'Inicio Cobranca'); !!}
                                                    {!! Form::number('iniciocobranca', null,['class'=>'validate','id'=>'iniciocobranca','name'=>'iniciocobranca','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('terminocobranca', 'Termino Cobranca'); !!}
                                                    {!! Form::number('terminocobranca', null,['class'=>'validate','id'=>'terminocobranca','name'=>'terminocobranca','required']) !!}
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="input-field col s4">
                                                    {!! Form::label('anocivilinicio', 'Inicio do Ano Civil'); !!}
                                                    {!! Form::number('anocivilinicio', null,['class'=>'validate','id'=>'anocivilinicio','name'=>'anocivilinicio','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('anociviltermino', 'Termino do Ano Civil'); !!}
                                                    {!! Form::number('anociviltermino', null,['class'=>'validate','id'=>'anociviltermino','name'=>'anociviltermino','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('anoeconomico', 'Ano Economico'); !!}
                                                    {!! Form::number('anoeconomico', null,['class'=>'validate','id'=>'anoeconomico','name'=>'anoeconomico','required']) !!}
                                                </div>
                                            </div>

                                            <div class="col s12">
                                                <div class="input-field col s4">
                                                    {!! Form::label('nivel', 'Nivel'); !!}
                                                    {!! Form::text('nivel', null,['class'=>'validate','id'=>'nivel','name'=>'nivel','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::label('codigofilial', 'Codigo Filial'); !!}
                                                    {!! Form::number('codigofilial', null,['class'=>'validate','id'=>'codigofilial','name'=>'codigofilial','required']) !!}
                                                </div>
                                                <div class="input-field col s4">
                                                    {!! Form::select('estado', [true => 'Activo', false => 'Inactivo'],false,['class'=>'validate','id'=>'estado','name'=>'estado','required']) !!}
                                                </div>
                                            </div>

                                            <div class="input-field col s12">
                                                <a class="btn waves-effect waves-red left" href="{{ url('/form-year') }}">
                                                    Cancelar
                                                </a>
                                                <button class="btn waves-effect waves-light right" type="submit">
                                                    Salvar
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($listar)
        <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top">
            <button wire:click="adicionarListar"
                    class="btn btn-floating btn-large gradient-45deg-green-teal gradient-shadow">
                <i class="material-icons">add</i>
            </button>
        </div>
    @endif
</div>
