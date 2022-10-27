<?php

    $Num1 = $POST['Numero1'];
    $Num2 = $POST['Numero2'];
    $Num3 = $POST['Numero3'];
    $x = $Numero1 * 2000;
    $x2 = $Numero2 * 5000;
    $x3 = $Numero3 * 500;
    $resultado = ($Numero1 *2000) + ($Numero2 *5000) + ($Numero3 *500) ;

    echo "El pago por los volantes es: ".$x;
    echo "<br>";
    echo "El pago por los posters es: ".$x2;
    echo "<br>";
    echo "El pago por los tdepres es: ".$x3;
    echo "<br>";
    echo "<br>";
    echo "El pago total es :".$resultado;

    ?>
