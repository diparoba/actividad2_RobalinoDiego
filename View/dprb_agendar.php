<?php
include("../Template/dprb_template.php");
?>
<form action="../Controller/dprb_clVuelo.php" method="POST">
<div class="mb-2">
  <label for="exampleFormControlInput1" class="form-label texto-form">Nombres</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Apellido" name="txtNombre">
</div>
<div class="mb-2">
  <label for="exampleFormControlInput2" class="form-label texto-form">Cédula</label>
  <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="1234567890" name="txtCI">
</div>

<div class="mb-2">
  <label for="exampleFormControlInput2" class="form-label texto-form">Elija su asiento</label>
<select class="form-select" aria-label="Default select example" name="cbAsiento">
  <option selected></option>
  <?php
    $asi = new avion();
    $res = $asi->getAsientosDisponibles();
    foreach ($res as $row) {
  ?>
  <option value="<?php echo $row['asi_num']?>"><?php echo $row['asi_num']." Asiento ".$row['asi_tipo'];   ?></option>
  <?php
    }
  ?>
</select>
</div>
<br>
<input type="submit" class="btn btn-primary" name="btnRegistrar" value="Registrar">
</form>


<?php
include("../Template/dprb_footer.php");
?>