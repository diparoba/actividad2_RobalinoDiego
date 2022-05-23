<?php
include("dprb_DB.php");
class avion{
  function agendarAsiento($cedula, $nombre, $asiento)
    {
        try {
            $conn = Conectar();
            $conn->begin_transaction();
            $sql = "INSERT INTO pasajero(nombre,cedula,Asientos_idAsientos) VALUE('$cedula','$nombre','$asiento') ";
            $result = $conn->prepare($sql);
            $result->execute();
            $sql = "UPDATE asientos SET asi_estado='ocupado' WHERE idAsientos=$asiento";
            $result = $conn->prepare($sql);
            $result->execute();
            $conn->commit();
        } catch (PDOException $e) {
            // si ocurre un error hacemos rollback para anular todos los insert
            $conn->rollback();
            echo $e->getMessage();;
        }
        return $conn;
    }
    function getAsientosDisponibles(){
        $conn = Conectar();
        $sql = "SELECT * FROM asientos WHERE asi_estado='disponible'";
        $result = $conn->query($sql);
        return $result;
    }  
    function getAsientos(){
        $conn = Conectar();
        $sql = "SELECT * FROM asientos";
        $result = $conn->query($sql);
        return $result;
    }  
    function getAsientosOcupados(){
        $conn = Conectar();
        $sql = "SELECT * FROM asientos WHERE asi_estado='ocupado'";
        $result = $conn->query($sql);
        return $result;
    }  
    function cancelarAsiento($asiento)
    {
        try {
            $conn = Conectar();
            $conn->begin_transaction();
            $sql = "UPDATE asientos SET asi_estado='disponible' WHERE idAsientos=$asiento";
            $result = $conn->prepare($sql);
            $result->execute();
            $conn->commit();
        } catch (PDOException $e) {
            // si ocurre un error hacemos rollback para anular todos los insert
            $conn->rollback();
            echo $e->getMessage();;
        }
        return $conn;
    }
}

?>