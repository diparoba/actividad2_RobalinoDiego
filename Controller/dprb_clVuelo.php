<?php
include("../Model/dprb_avion.php");

if (isset($_POST['btnRegistrar']) != "") {
    $nombre = $_POST['txtNombre'];
    $identificacion = $_POST['txtCI'];
    $asiento =$_POST['cbAsiento'];

    $avi = new avion();
    $res = $avi->agendarAsiento($nombre,$identificacion,$asiento);
    if ($res) {
        echo "<script>
         alert('Asiento Registrado');
         location.href='../View/dprb_index.php';
        </script>";
    } else {
        echo "<script>
         alert('Asiento no Registrado');
         location.href='../View/dprb_index.php';
        </script>";
    }
    
}
if (isset($_POST['btnBorrar']) != "") {
    $asiento =$_POST['cbAsiento'];

    $avi = new avion();
    $res = $avi->cancelarAsiento($asiento);
    if ($res) {
        echo "<script>
         alert('Asiento Recuperado');
         location.href='../View/dprb_index.php';
        </script>";
    } else {
        echo "<script>
         alert('Asiento no Recuperado');
         location.href='../View/dprb_index.php';
        </script>";
    }
    
}
?>