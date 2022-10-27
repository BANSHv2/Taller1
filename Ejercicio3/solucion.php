<?php
    $Ganados = $_POST['Ganados'];
    $Perdidos = $_POST['Perdidos'];
    $Empates = $_POST['Empates'];
    $Multiplicacion = ( $Ganados ) *3;
    $Multipli = ( $Perdidos ) *0;
    $Multi = ( $Empates ) *1;
    $Mul = ( ($Ganados) *3 + ($Perdidos)  *0 + ($Empates) *1 );

    echo "Puntos ganados: ".$Multiplicacion;
    echo "<br>";
    echo "Puntos por perdida : ".$Multipli;
    echo "<br>";
    echo "Puntos empates: ".$Multi;
    echo "<br>";
    echo "Total: ".$Mul;    
?>