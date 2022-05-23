<?php
include("../Template/dprb_template.php");
//i//include("../Model/empleado.php");
?>
<?php
$asiento = array();
$asi = new avion();
$res = $asi->getAsientos();
foreach ($res as $row) {
$asiento[$row['asi_num']] = $row['asi_estado'];

}
            
?>
<center>
    <div class="container">
        <div class="row">
            <div class="col">
                
                <div class="disponible-vip">

                </div>
                <label for="" class="descripcion-asientos">Disponible VIP</label>
            </div>
            <div class="col">
                
                <div class="disponible">

                </div>
                <label for="" class="descripcion-asientos">Disponible Normal</label>
            </div>
            <div class="col">
                
                <div class="ocupado">

                </div>
                <label for="" class="descripcion-asientos">Ocupado</label>
            </div>
            
        </div>
    </div>
</center>
<div class="row">
    <!--Columna de asientos 1 -->
    <div class="col">
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="<?php echo $asiento[1]?>-vip">
                    1
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[2]?>-vip">
                    2
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <div class="<?php echo $asiento[5]?>-vip">
                    5
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[6]?>-vip">
                    6
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[9]?>">
                    9
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[10]?>">
                    10
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[11]?>">
                    11
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[15]?>">
                    15
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[16]?>">
                    16
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[17]?>">
                    17
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[21]?>">
                    21
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[22]?>">
                    22
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[23]?>">
                    23
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[27]?>">
                    27
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[28]?>">
                    28
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[29]?>">
                    29
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[33]?>">
                    33
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[34]?>">
                    34
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[35]?>">
                    35
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[39]?>">
                    39
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[40]?>">
                    40
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[41]?>">
                    41
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[45]?>">
                    45
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[46]?>">
                    46
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[47]?>">
                    47
                </div>
            </div>
        </div>
    </div>
    <!--Columna de asientos 2 -->
    <div class="col columna2">
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[3]?>-vip">
                    3
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[4]?>-vip">
                    4
                </div>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[7]?>-vip">
                    7
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[8]?>-vip">
                    8
                </div>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[12]?>">
                    12
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[13]?>">
                    13
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[14]?>">
                    14
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[18]?>">
                    18
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[19]?>">
                    19
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[20]?>">
                    20
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[24]?>">
                    24
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[25]?>">
                    25
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[26]?>">
                    26
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[30]?>">
                    30
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[31]?>">
                    31
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[32]?>">
                    32
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[36]?>">
                    36
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[37]?>">
                    37
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[38]?>">
                    38
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[42]?>">
                    42
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[43]?>">
                    43
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[44]?>">
                    44
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="<?php echo $asiento[49]?>">
                    48
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[49]?>">
                    49
                </div>
            </div>
            <div class="col">
                <div class="<?php echo $asiento[50]?>">
                    50
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include("../Template/dprb_footer.php")
?>