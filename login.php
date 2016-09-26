<?php

include('misfunciones.php');
$mysqli = conectaBBDD();

//leo los parámetros que me pasa el index.php
$usuario_nombre = $_POST['usuario_nombre'];
$usuario_clave = $_POST['usuario_clave'];

//Hago la consulta a la base de datos
$resultado_consulta = $mysqli->query("SELECT * FROM USUARIO WHERE DNI = '$usuario_nombre'");
$numero_dnis = $resultado_consulta->num_rows;
if ($numero_dnis > 0) {
    //la query es válida y me ha devuelto por lo menos un dni.
    //entonces mostrará el menú normal
    //voy a leer el campo DNI y el campo password de la BBDD
    $r = $resultado_consulta->fetch_array();
    $DNI = $r['DNI'];
    $password = $r['password'];

    //COMO SOLO PUEDE HABER COMO MUCHO UN DNI CON ESTE RESULTADO PORQUE EL DNI ES
    //CAMPO CLAVE Y NO SE PUEDE REPETIR LO PONGO CON UN IF; SI NO, SE TIENE QUE TRATAR TODO 
    //RESULTADO DE LA QUERY CON UN BUCLE FOR POR EJEMPLO.
    if ($usuario_clave == $password) {
        require 'menu_inicio.php';
    } else {
        require 'mensaje_error.php';
    }
} else {
    require 'mensaje_eror.php';
}
?>