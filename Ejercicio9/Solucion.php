<?php
    $nombre = $_POST['name'];
    $Asignacion = $_POST['materia'];
    $n1 = $_POST['n1'];   
    $n2 = $_POST['n2']; 
    $n3 = $_POST['n3']; 

    echo 'Nombre: '.$nombre;
    echo '<br>';
    echo "Asignación: ".$Asignacion;
    echo '<br>';
    $resultado = ($n1 * 0.3) + ($n2 * 0.3) + ($n3 * 0.4);

    if($resultado>=4){
        echo 'Aprobado';
    }else{
        echo 'Reprobado';
    }