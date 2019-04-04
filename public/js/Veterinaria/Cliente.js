$(function () {
    AgregarCamposDireccion();
    AgregarCamposTelefono();

});
var nroDireccion = 0;
var idDireccion = 0;
function AgregarCamposDireccion() {

    if (nroDireccion <= 2) {
        var element = `<div class="form-row mb-3" id="dir${idDireccion}">
    <div class="col-md-2">
        <label for="">Descripcion</label>
        <input type="text"
                class="form-control"
                placeholder="Descripcion"
                name="Cliente[Direccion][${idDireccion}][descripcion]" 
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
                name="Cliente[Direccion][${idDireccion}][direccion]"
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
                name="Cliente[Direccion][${idDireccion}][latitud]"
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
                name="Cliente[Direccion][${idDireccion}][longitud]"
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
        nroDireccion += 1;
        idDireccion += 1;
        $('#ClienteDirecciones').append(element);
    }
}
function EliminarCamposDireccion(id) {
    if (nroDireccion >= 2) {
        $(`#dir${id}`).remove();
        nroDireccion -= 1;
    }
}

var nroTelefonos = 0;
var idTelefono = 0;

function AgregarCamposTelefono() {
    if (nroTelefonos <= 2) {
        var element = `<div class="form-row mb-3" id="tel${idTelefono}">
        <div class="col-md-4">
            <label for="">Numero Contacto</label>
            <input type="text" class="form-control" placeholder="Numero Contacto"
                name="Cliente[NumContacto][${idTelefono}][numero]" 
                pattern="[0-9]*"
                required >
            <div class="invalid-tooltip">
                Solo Numeros
            </div>
        </div>
        <div class="col-md-2">
            <label for="">Tipo</label>
            <input type="text" class="form-control" placeholder="Tipo" 
                    name="Cliente[NumContacto][${idTelefono}][tipo]" required>
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
        nroTelefonos += 1;
        idTelefono += 1;
        $('#ClienteTelefonos').append(element);
    }
}
function EliminarCamposTelefono(id) {
    if (nroTelefonos >= 2) {
        $(`#tel${id}`).remove();
        nroTelefonos -= 1;
    }
}

// Regitro 
var form= document.getElementById('form_ClienteRegistrar');
      form.addEventListener(
        "submit",
        function(event) {
            event.preventDefault();
            event.stopPropagation();
          if(form.checkValidity()=== true)
          {
            $.post("url", data,
                function (data, textStatus, jqXHR) {
                    
                },
                "dataType"
            );
          }
          form.classList.add("was-validated");
        },
        false
      );

    function showNotification(placementFrom, placementAlign, type, title, message) {
      $.notify(
        {
          title: title,
          message: message,
          target: "_blank"
        },
        {
          element: "body",
          position: null,
          type: type,
          allow_dismiss: true,
          newest_on_top: false,
          showProgressbar: false,
          placement: {
            from: placementFrom,
            align: placementAlign
          },
          offset: 20,
          spacing: 10,
          z_index: 1031,
          delay: 4000,
          timer: 2000,
          url_target: "_blank",
          mouse_over: null,
          animate: {
            enter: "animated fadeInDown",
            exit: "animated fadeOutUp"
          },
          onShow: null,
          onShown: null,
          onClose: null,
          onClosed: null,
          icon_type: "class",
          template:
            '<div data-notify="container" class="col-11 col-sm-3 alert  alert-{0} " role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            "</div>" +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            "</div>"
        }
      );
    }