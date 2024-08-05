<?php
require_once "../modelo/modelo_imagen.php";


$function = $_GET['function'];


switch ($function) {

    case "obtenerImagen":

        obtener();

        break;

    case "agregarImagen":

        agregar();
        break;
}



function obtener()
{
    $imagenes = (new imagen())->obtenerImagen();
    echo json_encode($imagenes);

}


function agregar()
{
    $nombre = $_POST ['nombre'];
    $imagen = $_FILES ['imagen'];
   $resultado = (new imagen())->agregarImagen($nombre,$imagen);
   echo json_encode($resultado);

}

?>
