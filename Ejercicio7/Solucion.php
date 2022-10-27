<?php
    $Name = $_POST['Name'];
    $Dato = $_POST['Dato'];
    $Final = $_POST['Final'];    

    echo "Nombre ". $Name;
    echo " Asignatura " . $Dato;
    
    if($Final<=6)
    {
        echo " Reprobado ";
    }
    else
    {
        echo" Aprobado ";
    }
?>  