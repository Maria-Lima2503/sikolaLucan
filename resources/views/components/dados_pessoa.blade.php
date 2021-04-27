<div class="col m9 left">
 <div class="row">
    <div class=" col m3 ">

        <label for="dataActual">Data</label>
        <input id="time-demo" placeholder="00:00"  type="text" class="validate timepicker" name="dataActual1" id="dataActual" required>
    </div>
    <div class=" col m9 ">
        <label for="nome">Nome Completo:</label>
        <input type="text" class="validate" name="nome" id="nome" required>
    </div>
  </div>
  <div class="row">
    <div class=" col m6 s12">
        <label for="nC">Data de Nascimento</label>
        <input type="text" class="validate datepicker" id="firstName" required>
    </div>
    <div class="input-field col m6 s12">
        <select class="validate">
            <option value=" " disabled selected></option>
            <option value="1">Casado </option>
        </select>
        <label for="estC">Estado Civíl</label>
    </div>
  </div>
  <div class="row">
    <div class=" col m3 mt-2">
        <span for="genero"> Genéro</span>
    </div>
    <div class=" col m4 mt-2 ">
        <p>
            <label>
                <input name="group1" type="radio" checked />
                <span>Maculino</span>
            </label>
        </p>
    </div>
    <div class=" col m4 mt-2">
        <p>
           <label>
                <input name="group1" type="radio" checked/>
                <span>Femenino</span>
            </label>
        </p>
    </div>
   </div>
</div>
<div class="col m3 right">
    <div class="row box-shadow">
        <span for="foto">
            Carrega a Foto
            <i class="material-icons small">arrow_downward</i>
        </span>
        <div id="file-upload" class="section">
            <div class="row section">
                <div class="col s12 m12 ">
                    <input type="file" id="input-file-events" class="dropify-event" data-default-file="~/images/gallery/1.png" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col m12 s12">
    <div class="input-field col m3 s12">
        <select class="validate">
            <option value=" " disabled selected> </option>
            <option value="1">Angolana</option>
        </select>
        <label>Nacionalidade</label>
    </div>
    <div class="input-field col m3 s12">
        <select class="validate">
            <option value=" " disabled selected> </option>
            <option value="1">Femenino</option>
        </select>
        <label for="t">País de Nascimento</label>
    </div>
    <!--a class="btn-flat2 mycon_green"><i class="material-icons right">add</i> </a-->
    <div class="input-field col m3 s12">
        <select class="validate">
            <option value=" " disabled selected> </option>
            <option value="1">selecione</option>

        </select>
        <label for="t">Província de Nascimento </label>
    </div>
    <!--a class="btn-flat2 mycon_green"><i class="material-icons right">add</i> </a-->
    <div class="input-field col m3 s12">
        <select class="validate">
            <option value=" " disabled selected> </option>
            <option value="1">selecione</option>
        </select>
        <label for="t">Município de Nascimento</label>
    </div>
   <!--a class="btn-flat2 mycon_green"><i class="material-icons right">add</i> </a-->
</div>
<div class="col m12 s12">
    <div class="input-field col m3 s12">
        <select class="validate">
            <option value=" " disabled selected> </option>
            <option value="1">Bilhete</option>
            <option value="2">Cédula</option>

        </select>
        <label>Documento de Identificação</label>
    </div>
    <div class="col m3">
        <label for="nume">Nº De Identificação:</label>
        <input type="text" class="validate" name="nume" id="nume" required>
    </div>
    <div class=" col m3 s12">
        <label for="nC">Data de Emissão</label>
        <input type="text" class="validate datepicker" id="firstName" required>
    </div>
    <div class="col m3">
        <label for="emissao"> Local de Emissão:</label>
        <input type="text" class="validate" name="emissao" id="emissao" required>
    </div>
</div>


