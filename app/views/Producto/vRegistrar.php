<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class=" card mb-4">
    <div class="card-body">
        <h5 class="mb-3">Registro Producto</h5>
        <form id="form_ProductoRegistrar" class="needs-validation mb-5" novalidate>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="">Nombre</label>
                    <input type="text" class="form-control" 
                        id="" 
                        placeholder="nombre"
                        name="Producto[nombre]" 
                        maxlength="30" 
                        required>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip002">Descricion</label>
                    <textarea 
                        class="form-control" id="validationTooltip002" placeholder="Descricion"
                        name="Producto[descripcion]"
                        maxlength="500"
                        required></textarea>
                    <div class="invalid-tooltip">
                        Campo Requerido
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Cantidad Minima</label>
                    <input type="number" class="form-control" id="validationTooltip003" placeholder="Cantidad minima"
                        name="Producto[cantMinInv]" 
                        pattern="[0-9]*" 
                        maxlength="10" required>
                    <div class="invalid-tooltip">
                        Requerido <br>
                        Solo Numeros
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip004">Stock</label>
                    <input type="number" class="form-control" id="validationTooltip004" placeholder="Stock"
                        name="Producto[stock]" 
                        maxlength="10" 
                        pattern="[0-9]*">
                    <div class="invalid-tooltip">
                        Solo Numeros
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Codigo lote</label>
                    <input type="text" class="form-control" id="validationTooltip003" placeholder="Codigo lote"
                        name="Producto[codigo_Lote]" 
                        pattern="[0-9]*" 
                        maxlength="10" required>
                    <div class="invalid-tooltip">
                        Requerido <br>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip004">Precio compra</label>
                    <input type="number" step="0.01" class="form-control" id="validationTooltip004" placeholder="Precio de compra"
                        name="Producto[precio_Compra]" 
                        maxlength="10" 
                        pattern="[0-9]*">
                    <div class="invalid-tooltip">
                        Solo Numeros
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationTooltip003">Precio venta</label>
                    <input type="number" step="0.01" class="form-control" id="validationTooltip003" placeholder="Precio venta"
                        name="Producto[precio_Venta]" 
                        pattern="[0-9]*" 
                        maxlength="10" required>
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
    $libs=[0=>'Producto'];
    InsertLib($libs);
?>