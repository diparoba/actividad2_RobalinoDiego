<?php
include("../Template/dprb_template.php");
?>
<form action="../Controller/dprb_clVuelo.php" method="POST">
    <div class="mb-2">
        <label for="exampleFormControlInput2" class="form-label texto-form">Elija el asiento que desea dejar disponible</label>
        <select class="form-select" aria-label="Default select example" name="cbAsiento">
            <option selected></option>
            <?php
    $asi = new avion();
    $res = $asi->getAsientosOcupados();
    foreach ($res as $row) {
  ?>
            <option value="<?php echo $row['asi_num']?>"><?php echo $row['asi_num']." Asiento ".$row['asi_tipo'];   ?>
            </option>
            <?php
    }
  ?>
        </select>
    </div>
    <br>
    <input type="submit" class="btn btn-primary" name="btnBorrar" value="Cancelar Vuelo">
</form>


<?php
include("../Template/dprb_footer.php");
?>