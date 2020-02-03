<?php
session_start();


function ingresarDato () {
    if (($_GET["id"] >= 2) && ($_GET["id"] <= 10) && ($_GET["id"] % 2 == 0) && is_numeric ($_GET["id"])) {
        $_SESSION ["datosGuardados"] [] =  $_GET["id"] ;
    }
}
ingresarDato ();

function imprimirLista () {
    $lista = $_SESSION ["datosGuardados"] ;

    foreach ($lista as $numero) {
        print_r ("Ingrese al array y tengo el ID: ".$numero."<br/>");
    }
}

imprimirLista();


?>

<a href="index.html"><input type="button" value="Volver para agregar otro valor por URL"></a>