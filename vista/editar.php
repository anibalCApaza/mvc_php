<?php
include_once("layouts/header.php");
$e = $dato[0];
?>

<form action="">
    <div class="card">
        <div class="card-header">
            <h4>EDITAR PRODUCTO</h4>
        </div>
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $e['id'] ?>">

            <label class="form-label" for="nombre">NOMBRE:</label>
            <input class="form-control" type="text" name="nombre" value="<?= $e['nombre'] ?>">

            <label class="form-label" for="precio">PRECIO</label>
            <input class="form-control" type="number" step="any" name="precio" value="<?= $e['precio'] ?>">

            <br>

            <input class="btn btn-warning" type="submit" value="EDITAR PRODUCTO">

            <input type="hidden" name="m" value="actualizar">
        </div>

    </div>

</form>

<?php
include_once("layouts/footer.php");
?>