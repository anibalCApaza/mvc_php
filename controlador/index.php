<?php
require_once("modelo/index.php");

class ModeloControlador
{
    private $modelo;
    function __construct($modelo)
    {
        $this->modelo = new Modelo();
    }

    // Mostrar
    static function index()
    {
        $producto = new Modelo();
        $dato = $producto->mostrar("productos", "1");
        require_once("vista/index.php");
    }

    // NUEVO
    static function nuevo()
    {
        require_once("vista/nuevo.php");
    }

    static function guardar()
    {
        $nombre = $_REQUEST["nombre"];
        $precio = $_REQUEST["precio"];
        $data = "'" . $nombre . "', " . $precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos", $data);
        header("Location: " . urlsite);
        exit();
    }

    static function editar()
    {
        $id = $_REQUEST["id"];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos", "id=" . $id);
        require_once("vista/editar.php");
    }


}


?>