<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Servicio</h5>
        <form id="form_ServicioRegistrar" class="needs-validation mb-5" novalidate>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" 
                        id="" 
                        placeholder="nombre"
                        name="Servicio[nombre]" 
                        maxlength="30" 
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip002">Descripcion</label>
                    <textarea 
                        class="form-control" id="validationTooltip002" placeholder="Descricion"
                        name="Servicio[descripcion]"
                        maxlength="100"
                        required></textarea>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="validationTooltip003" placeholder="Precio"
                        name="Servicio[precio]" 
                        pattern="[0-9]*" 
                        maxlength="10" required>
                    <div class="invalid-tooltip">
                        Requerido <br>
                        Solo Numeros
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    
                </div>
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