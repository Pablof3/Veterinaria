<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Cliente</h5>
        <form class="needs-validation mb-5" novalidate method="POST" action="<?= RUTA_URL;?>/Mascota/Registrar">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip001">Nombre</label>
                    <input type="text" 
                            class="form-control" 
                            id="validationTooltip001" 
                            placeholder="nombre"
                            name="Cliente[nombre]"
                            required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationTooltip002">Apellido</label>
                    <input type="text" 
                            class="form-control" 
                            id="validationTooltip002" 
                            placeholder="Apellido"
                            name="Cliente[apellido]"
                            required>
                    <div class="valid-tooltip">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Ci</label>
                    <input type="text" 
                            class="form-control" 
                            id="validationTooltip003" 
                            placeholder="Ci" 
                            name="Cliente[ci]"
                            required>
                    <div class="invalid-tooltip">
                        Please provide a city.
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip004">Nit</label>
                    <input type="text" 
                            class="form-control" 
                            id="validationTooltip004" 
                            placeholder="Nit" 
                            name="Cliente[nit]"
                            required>
                    <div class="invalid-tooltip">
                        Please provide a state.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" 
                    type="submit">
                    Registrar
            </button>
        </form>
    </div>
</div>
<?php require RUTA_APP .'/views/inc/Footer.php';?>