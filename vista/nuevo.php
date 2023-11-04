<?php
include("layouts/header.php");
?>
<form action="">
    <div class="card">
        <div class="card-header bg-success">
            <h4 class="text-center">REGISTRAR NUEVO PRODUCTO</h4>
        </div>
        <div class="card-body">

            <label foconfigr="nombre" class="form-label">NOMBRE: </label>
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese el nombre del producto.">

            <label for="precio" class="form-label">PRECIO: </label>
            <input class="form-control" type="number" name="precio" placeholder="Ingrese el precio del producto.">

            <input type="submit" class="btn btn-info" value="GUARDAR">
            <br>
            <input type="hidden" name="m" value="guardar">
        </div>
    </div>
</form>
<?php
include("layouts/footer.php");
?>