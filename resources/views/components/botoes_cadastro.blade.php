
    <div class="input-field col m12 s12 ">
        <div class="row right ">
            <p><a class="btn btn-light-green waves-light waves-effect submit" type="submit" name="action"href="{{-- route('admin.listar') --}}"  >
                Salvar<i class="material-icons left">save</i>
            </a>
            <button class="btn btn-light-green waves-light waves-effect" type="submit" name="action">
                Salvar e Novo<i class="material-icons left">settings_backup_restore</i>
            </button>

            <button class="btn  btn-light-blue waves-effect waves-light" type="submit" name="action">
                Salvar e Continuar <i class="material-icons left"></i>
            </button>
             <a href="{{-- route('admin.editarFicha') --}}" class="btn btn-light-red waves-effect waves-light" type="submit" name="action">
                Sair <i class="material-icons left">reply</i>
            </a></p>
        </div>
    </div>
    @section('page-script')
<script src="{{asset('js/scripts/form-validation.js')}}"></script>
<script src="{{asset('js/scripts/form-file-uploads.js')}}"></script>
@endsection

