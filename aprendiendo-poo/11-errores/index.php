<?php

//Capturar excepciones, en codigo susceptibles a errores(susceptible es como propenso o vulnerable)
try{
    if(!empty($_GET)){
        var_dump($_GET);
        echo '<h1>Si existen datos por el metodo GET</h1>';
    }else {
        throw new Exception('Errores de logica');
    }
} catch(Exception $e){
    
    echo "Ha habido un error : ".$e->getMessage();
    
}