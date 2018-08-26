<?php

function nombreValido($nombre)
{
    $permitidos="aábcdeéfghiíjklmnñoópqrstuúvwxyzAÁBCDEÉFGHIÍJKLMNÑOÓPQRSTUÚVWXYZ ";
    
    for ($i=0; $i<strlen ($nombre); $i++){
        if(strpos($permitidos, substr($nombre,$i,1))===false){
           // echo "no valido";
            return false;
        }
    }
    //los caracteres son validos 
    //echo "valido";
    return true;
}

?>