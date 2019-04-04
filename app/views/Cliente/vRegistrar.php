<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Cliente</h5>
        <form id="form_ClienteRegistrar" class="needs-validation mb-5" novalidate>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" 
                        id="" 
                        placeholder="nombre"
                        name="Cliente[nombre]" 
                        maxlength="30" 
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip002">Apellido</label>
                    <input type="text" 
                        class="form-control" id="validationTooltip002" placeholder="Apellido"
                        name="Cliente[apellido]"
                        maxlength="30"
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Ci</label>
                    <input type="text" class="form-control" id="validationTooltip003" placeholder="Ci"
                        name="Cliente[ci]" 
                        pattern="[0-9]*" 
                        maxlength="10" required>
                    <div class="invalid-tooltip">
                        Requerido <br>
                        Solo Numeros
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip004">Nit</label>
                    <input type="text" class="form-control" id="validationTooltip004" placeholder="Nit"
                        name="Cliente[nit]" 
                        maxlength="15" 
                        pattern="[0-9]*">
                    <div class="invalid-tooltip">
                        Solo Numeros
                    </div>
                </div>
            </div>
            <h6>
                Direccion
            </h6>
            <div id="ClienteDirecciones">
               
            </div>
            <div class="form-row">
                <button type="button" 
                        class="btn btn-primary btn-lg mb-1 mx-auto"
                        onclick="AgregarCamposDireccion()">Agregar Direccion</button>
            </div>
            <h6>Telefono</h6>
            <div id="ClienteTelefonos">
            
            </div>
            
            <div class="form-row">
                <button type="button" 
                        class="btn btn-primary btn-lg mb-1 mx-auto"
                        onclick="AgregarCamposTelefono()">Agregar Telefono</button>
            </div>
            <button class="btn btn-primary" type="submit">
                Registrar
            </button>
        </form>
    </div>
</div>
<?php require RUTA_APP .'/views/inc/Footer.php';?>
<?php
    $libs=[0=>'Cliente'];
    InsertLib($libs);
?>