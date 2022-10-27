<?php
    $Nombre_estudiante = $_POST['Nombre_estudiante'];
    $Asignatura = $_POST['Asignatura'];
    $Nota1 = $_POST['Nota1'];
    $Nota2 = $_POST['Nota2'];
    $Nota3 = $_POST['Nota3'];
    $Suma = ( $Nota1 + $Nota2 + $Nota3 ) /3;

    echo "Su nombre es: ".$Nombre_estudiante;
    echo " Asignatura ".$Asignatura;
    echo " Suma ".$Suma

?>