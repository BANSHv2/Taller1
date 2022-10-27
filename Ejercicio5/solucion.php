<?php
    $H = $_POST['H'];
    $HM = $_POST['HM'];

    if($H>$HM){
        $resta = $H-$HM;
        echo 'El hermano 1 es mayor que el hermano 2 ';
        echo '<br>';
        echo 'la diferencia de edad es de '.$resta; 
    }else{
        $resta = $H-$HM;
        echo 'El hermano 2 es mayor que el hermano 1 ';
        echo '<br>';
        echo 'la diferencia de edad es de '.$resta;
    }

?>    