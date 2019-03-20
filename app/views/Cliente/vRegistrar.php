<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Cliente</h5>
        <form class="needs-validation mb-5" novalidate method="POST" action="<?= RUTA_URL?>/Cliente/Registrar">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip001">Nombre</label>
                    <input type="text" class="form-control" 
                        id="validationTooltip001" 
                        placeholder="nombre"
                        name="Cliente[nombre]" 
                        maxlength="30" 
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-4 mb-3">
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
                <div class="form-row mb-3" id="dir0">
                    <div class="col-md-2">
                        <label for="">Descripcion</label>
                        <input type="text"
                                class="form-control"
                                placeholder="Descripcion"
                                name="Cliente[Direcciones][0][descripcion]" 
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
                                name="Cliente[Direcciones][0][direccion]"
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
                                name="Cliente[Direcciones][0][latitud]"
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
                                name="Cliente[Direcciones][0][longitud]"
                                maxlength="12"
                                required>
                        <div class="invalid-tooltip">
                            Aviso
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger mt-4" onclick="EliminarCamposDireccion(0)">Eliminar</button>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <button type="button" 
                        class="btn btn-primary btn-lg mb-1 mx-auto"
                        onclick="AgregarCamposDireccion()">Agregar Direccion</button>
            </div>
            <h6>Telefono</h6>
            <div id="ClienteTelefonos">
                <div class="form-row mb-3" id="tel0">
                    <div class="col-md-4">
                        <label for="">Numero Contacto</label>
                        <input type="text" class="form-control" placeholder="Numero Contacto"
                            name="Cliente[Telefonos][0][numero]" 
                            pattern="[0-9]*"
                            maxlength="15">
                        <div class="invalid-tooltip">
                            Solo Numeros
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="">Tipo</label>
                        <input type="text" class="form-control" placeholder="Tipo" 
                                name="Cliente[Telefonos][0][tipo]"
                                >
                        <div class="invalid-tooltip">
                            Aviso
                        </div>
                    </div>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger mt-4" onclick="EliminarCamposTelefono(0)">Eliminar</button>
                    </div>
                </div>
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