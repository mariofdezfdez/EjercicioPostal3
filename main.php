<?php

function mediaRango (&$minRango, &$maxRango,$value){
    $media=intval(($minRango+$maxRango)/2);
    if ($media == $value){
        echo ("Localizado el valor: ".$media."<br>");
        return true;
    } 
    else{
        if ($value < $media){
            $maxRango = $media;
        }else{
            $minRango = $media;
        }
    }
}

if (isset($_POST["send"])){
    $num=$_POST["number"];
    $minRango=1;
    $maxRango=1000000000;

    if($num<1 || $num >1000000000){
        echo("El valor debe de ser entre 1 y 1000000000");
    }else{
        
        
        $acierto = false;
        $contador = 0;
        while (!$acierto){
        $contador += 1;
        $acierto = mediaRango($minRango, $maxRango, $num);
    }
        echo "Contador, número de vueltas: ".$contador;
    }
    
}



