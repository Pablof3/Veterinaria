<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class="row">
    <div class="col-12 list">
        <div class="mb-2">
            <h1>Cliente</h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Cliente</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Detalle</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-4 col-12 mb-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <p class="text-muted text-small mb-2">Detalle Cliente</p>
                        <p class="mb-3">
                            <h6 class="m-0">Nombre:</h6>
                            <div class="mb-2"><?=$data['Cliente']->nombre.' '.$data['Cliente']->apellido?></div> 
                            <h6 class="m-0">Ci:</h6>
                            <div class="mb-2"><?=$data['Cliente']->ci?></div>
                            <h6 class="m-0">Nit:</h6>
                            <div class="mb-2"><?=$data['Cliente']->nit?></div>
                            <h6 class="m-0">Registrado:</h6>
                            <div class=""><?=$data['Cliente']->fechaRegistro?></div>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Contacto</h5>
                        <div>
                            <?php foreach ($data['Cliente']->NumContacto as $numContacto):?>
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <div class="pl-3 pr-2">
                                        <span class="font-weight-semibold"><?=$numContacto->tipo?></span>
                                        <span class="font-weight-medium ml-5"><?=$numContacto->numero?></span>
                                        <span class="font-weight-medium ml-5"><?=$numContacto->fechaRegistro?></span>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Direccion</h5>
                        <div>
                            <?php foreach ($data['Cliente']->Direccion as $direccion):?>
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <div class="pl-3 pr-2">
                                        <span class="font-weight-semibold"><?= $direccion->descripcion?></span>
                                        <span class="font-weight-medium ml-5"><?= $direccion->direccion?></span>
                                        <span class="font-weight-medium ml-5"><?= $direccion->fechaRegistro?></span>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require RUTA_APP .'/views/inc/Footer.php';?>
<?php
    $libs=[0=>'Cliente'];
    InsertLib($libs);
?>