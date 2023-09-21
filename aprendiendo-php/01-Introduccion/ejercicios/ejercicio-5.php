<?php

/* 
 Hacer un progrma que muestre todos los numero que hay dentro de dos njumeros
 que nos llegaran por GET
 */

if(isset($_GET['num1']) && isset($_GET['num2'])){
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    if($num1<=$num2){
        echo "<h1>Los numero son</h1>";
        for($i=$num1; $i<=$num2; $i++){
            
            echo " $i ";
        }
    }else{
        echo "<h1>Los numero son</h1>";
        for($i=$num2; $i<=$num1; $i++){
             
            echo " $i ";
        }
    }
}else{
    echo 'Introduce los numero por la URL';
}

