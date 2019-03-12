<?php require RUTA_APP .'/views/inc/Header.php';?>
<div class="row">
    <div class="col-12">
        <h1>Dashboard</h1>
        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb pt-0">
                <li class="breadcrumb-item">
                    <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Library</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
        <div class="separator mb-5"></div>

    </div>
</div>

<?php foreach ($_SERVER as  $key=>$value):?>
<?php print_r($key.' =>'.$value);?>
<br>
<?php endforeach;?>
<?php require RUTA_APP .'/views/inc/Footer.php';?>