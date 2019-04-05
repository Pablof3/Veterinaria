<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Paquete</h5>
        <form id="form_PaqueteRegistrar" class="needs-validation mb-5" novalidate>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" 
                        id="" 
                        placeholder="nombre"
                        name="Paquete[nombre]" 
                        maxlength="30" 
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip002">Precio</label>
                    <input type="number" step="0.01" 
                        class="form-control" id="validationTooltip002" placeholder="Precio"
                        name="Paquete[precio]"
                        pattern="[0-9]*" 
                        maxlength="10"
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Descripcion</label>
                    <textarea class="form-control" id="validationTooltip003" placeholder="Descripcion"
                        name="Paquete[descripcion]"  
                        maxlength="500" required></textarea>
                    <div class="invalid-tooltip">
                        Requerido <br>
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
    $libs=[0=>'Paquete'];
    InsertLib($libs);
?>