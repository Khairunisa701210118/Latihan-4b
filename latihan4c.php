<?php

$negara = [
    ["Indonesia : D.K.I Jakarta","Singapura : Singapura","Malaysia : Kuala Lumpur","Brunei : Bandar Sri Begawan",
    "Thailand : Bangkok","Laos : Vietiane","Filipina : Manila","Myanmar : Naypyidaw"]

];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DAFTAR NAMA NEGARA DAN IBUKOTA :</title>
    </head>
    <body>
        <h1>Daftar nama negara dan ibukota</h1>

        <?php foreach( $negara as $ibukota) : ?>

            <ul>
                <li><?php echo $ibukota[0]; ?></li>
                <li><?php echo $ibukota[1]; ?></li>
                <li><?php echo $ibukota[2]; ?></li>
                <li><?php echo $ibukota[3]; ?></li>
                <li><?php echo $ibukota[4]; ?></li>
                <li><?php echo $ibukota[5]; ?></li>
                <li><?php echo $ibukota[6]; ?></li>
                <li><?php echo $ibukota[7]; ?></li>
            </ul>
                <?php endforeach; ?>
    </body>
</html>