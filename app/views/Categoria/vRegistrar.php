<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Categoria</h5>
        <form class="needs-validation mb-5" novalidate method="POST" action="<?= RUTA_URL?>/Categoria/Registrar">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip001">Nombre</label>
                    <input type="text" class="form-control" 
                        id="validationTooltip001" 
                        placeholder="Categoria"
                        name="Categoria[nombre]" 
                        maxlength="30" 
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    
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
    $libs=[0=>'Categoria'];
    InsertLib($libs);
?>