<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Veterinario</h5>
        <form class="needs-validation mb-5" novalidate method="POST" action="<?= RUTA_URL?>/Veterinario/Registrar">
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip001">Nombre</label>
                    <input type="text" class="form-control" 
                        id="validationTooltip001" 
                        placeholder="nombre"
                        name="Veterinario[nombre]" 
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
                        name="Veterinario[apellido]"
                        maxlength="30"
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Especialidad</label>
                    <input type="text" class="form-control" id="validationTooltip003" placeholder="Especialidad"
                        name="Veterinario[especialidad]" 
                        maxlength="30" required>
                    <div class="invalid-tooltip">
                        Requerido <br>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                   
                </div>
            </div>
            <h6>
                Direccion
            </h6>
            <div id="VeterinarioDirecciones">
               
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
    $libs=[0=>'Veterinario'];
    InsertLib($libs);
?>