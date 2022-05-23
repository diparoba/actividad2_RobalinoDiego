<?php


function Conectar(){ 
    $link = new mysqli("127.0.0.1:3307","root","Admin.2109","actividad1_diegorobalino") or die("Error al conectar a la B.D");
    //$link->set_charset("utf-8");  #para que me traiga los caracteres del idioma definido en la base de datos
    return $link;
}

$mysli=Conectar();



?>