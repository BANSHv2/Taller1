<?php
    $Sexo = $_POST["Sexo"];
    $Edad = $_POST["Edad"];

    if($Sexo =="Masculino"){
        if($Edad>=63){
            echo "Se puede jubilar";
        }
        else{
            echo"No se puede jubilar";
        }
    }elseif($Sexo =="Femenino"){
        if($Edad>54){
            echo "Se puede jubilar";
        }
        else{
            echo "No se puede jubilar";
        }
     }   
    
?>  