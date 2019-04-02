<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Consultorio</h5>
        <form class="needs-validation mb-5" novalidate method="POST" action="<?= RUTA_URL?>/Consultorio/Registrar">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip001">Nombre</label>
                    <input type="text" class="form-control" 
                        id="validationTooltip001" 
                        placeholder="Consultorio"
                        name="Consultorio[nombre]" 
                        maxlength="30" 
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip002">Descripcion</label>
                    <input type="text" 
                        class="form-control" id="validationTooltip002" placeholder="Descripcion"
                        name="Consultorio[descripcion]"
                        maxlength="30"
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
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