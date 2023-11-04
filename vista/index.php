<?php
require_once("layouts/header.php");

?>
<a href="index.php?m=nuevo" class="btn btn-success text-right">REGISTRAR NUEVO PRODUCTO</a>
<br>
<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>PRECIO</td>
            <td>ACCIÓN</td>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($dato)) {
            foreach ($dato as $key => $value) {
                ?>
                <tr>
                    <td>
                        <?= $value['id']; ?>
                    </td>
                    <td>
                        <?= $value['nombre']; ?>
                    </td>
                    <td>
                        <?= $value['precio']; ?>
                    </td>
                    <td>
                        <a class=" btn btn-warning" href="index.php?m=editar&id=<?= $value['id'] ?>">EDITAR</a>
                        <a class="btn btn-danger" href="index.php?m=eliminar&id=<?= $value['id'] ?>">ELIMINAR</a>
                    </td>
                </tr>

                <?php
            }
        } else {
            ?>
            <tr class="text-center">
                <td colspan="4">NO HAY REGISTROS</td>
            </tr>
            <?php
        }
        ?>

    </tbody>
</table>
<?php
require_once("layouts/footer.php");
?>