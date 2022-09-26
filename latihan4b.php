<?php

$NAMAASEAN = ["indonesia","singapura","malaysia","brunei","thailand","laos","filipina","myanmar"];
?>

<html>
    <head>
        <title>LATIHAN 4B</title>

    </head>
    <body>
        <h2>Daftar Negara ASEAN Awal :</h2>

        <?php
        for ($i=0; $i < 5; $i++) {
            echo "<li>$NAMAASEAN[$i]</li>";

        }
        ?>
    </body>
</html>