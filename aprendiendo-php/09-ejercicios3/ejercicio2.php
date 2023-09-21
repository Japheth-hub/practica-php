<?php

/* 

 * Tener 1 funcion
 * La funcion debe debe valoidar un mail con filter_var
 * Recoger una variable por get y validarla
 * Mostrar el resultado
 
 */
$correo = $_GET['correo'] ?? '';
$telefono = $_GET['telefono'] ?? '';


function validar($email, $cellphone){
    $result = "";
    if(isset($email)):
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result.= "Su correo es valido : $email";
        } else {
            $result.= 'Su correo no es valido';
        }
    endif;
    $result.= '<hr>';
    if(isset($cellphone)):
        if(is_numeric($cellphone) && strlen($cellphone) == 10){
            $cellphone = intval($cellphone);//con esta funcion convertimos string en numeros
            $result.= "Numero de telefono valido : $cellphone";      
        } else {
            $result.= 'Numero de telefono invalido';
        } 
    endif;
    return $result;
}

echo validar($correo, $telefono);