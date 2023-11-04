<?php
require_once("config.php");
require_once("controlador/index.php");
if (isset($_GET["m"])) {
    if (method_exists("ModeloControlador", $_GET["m"])) {
        ModeloControlador::{$_GET["m"]}();
    }
} else {
    modeloControlador::index();
}
?>