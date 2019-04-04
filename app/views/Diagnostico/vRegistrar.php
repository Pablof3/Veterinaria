<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Diagnostico</h5>
        <form class="needs-validation mb-5" novalidate method="POST" action="<?= RUTA_URL?>/Diagnostico/Registrar">
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip001">Diagnostico</label>
                    <textarea class="form-control" 
                        id="validationTooltip001" 
                        placeholder="Diagnostico"
                        name="Diagnostico[diagnostico]" 
                        maxlength="1000" 
                        required> </textarea>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip002">Codigo</label>
                    <input type="text" 
                        class="form-control" id="validationTooltip002" placeholder="Codigo"
                        name="Diagnostico[codigo]"
                        maxlength="30"
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Precio total</label>
                    <input type="number" step="0.01" class="form-control" id="validationTooltip003" placeholder="Precio total"
                        name="Diagnostico[precio_Total]" 
                        pattern="[0-9]*" 
                        maxlength="10" required>
                    <div class="invalid-tooltip">
                        Requerido <br>
                        Solo Numeros
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip004">Saldo</label>
                    <input type="number" step="0.01" class="form-control" id="validationTooltip004" placeholder="Saldo"
                        name="Diagnostico[saldo]" 
                        maxlength="10" 
                        pattern="[0-9]*">
                    <div class="invalid-tooltip">
                        Solo Numeros
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
    $libs=[0=>'Diagnostico'];
    InsertLib($libs);
?>