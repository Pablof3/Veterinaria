var nroDireccion = 0;
var idDireccion = 0;
function AgregarCamposDireccion() {
    nroDireccion += 1;
    idDireccion += 1;
    var element = `<div class="form-row mb-3" id="dir${idDireccion}">
    <div class="col-md-2">
        <label for="">Descripcion</label>
        <input type="text"
                class="form-control"
                placeholder="Descripcion"
                name="Cliente[Direcciones][${idDireccion}][descripcion]" 
                maxlength="30" required>
        <div class="invalid-tooltip">
            Campo Requerido
        </div>
    </div>
    <div class="col-md-4">
        <label for="">Direccion</label>
        <input type="text"
                class="form-control"
                placeholder="Direccion"
                name="Cliente[Direcciones][${idDireccion}][direccion]"
                maxlength="150" 
                required>
        <div class="invalid-tooltip">
            Campo Requerido
        </div>
    </div>
    <div class="col-md-2">
        <label for="">Latitud</label>
        <input type="text"
                class="form-control"
                placeholder="Latitud"
                name="Cliente[Direcciones][${idDireccion}][latitud]"
                maxlength="12" 
                required>
        <div class="invalid-tooltip">
            Aviso
        </div>
    </div>
    <div class="col-md-2">
        <label for="">Longitud</label>
        <input type="text"
                class="form-control"
                placeholder="Longitud"
                name="Cliente[Direcciones][${idDireccion}][longitud]"
                maxlength="12"
                required>
        <div class="invalid-tooltip">
            Aviso
        </div>
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-danger mt-4" onclick="EliminarCamposDireccion(${idDireccion})">Eliminar</button>
    </div>
</div>`;
$('#ClienteDirecciones').append(element);
}
function EliminarCamposDireccion(id) {
    $(`#dir${id}`).remove();
    nroDireccion -= 1;
}

var nroTelefonos = 0;
var idTelefono = 0;

function AgregarCamposTelefono() {
    nroTelefonos += 1;
    idTelefono += 1;
    var element = `<div class="form-row mb-3" id="tel${idTelefono}">
    <div class="col-md-4">
        <label for="">Numero Contacto</label>
        <input type="text" class="form-control" placeholder="Numero Contacto"
            name="Cliente[Telefonos][${idTelefono}][numero]" 
            pattern="[0-9]*"
            >
        <div class="invalid-tooltip">
            Solo Numeros
        </div>
    </div>
    <div class="col-md-2">
        <label for="">Tipo</label>
        <input type="text" class="form-control" placeholder="Tipo" 
                name="Cliente[Telefonos][${idTelefono}][tipo]"
                >
        <div class="invalid-tooltip">
            Aviso
        </div>
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-danger mt-4" onclick="EliminarCamposTelefono(${idTelefono})">Eliminar</button>
    </div>
</div>`;
$('#ClienteTelefonos').append(element);
}
function EliminarCamposTelefono(id) {
    $(`#tel${id}`).remove();
    nroTelefonos -= 1;
}