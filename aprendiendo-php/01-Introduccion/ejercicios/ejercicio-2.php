<?php

/* 
 Sacar todos los numero pares del 1 al 100
 */
for($i=1; $i<=100; $i++){
    if(($i%2)==0){
        if($i == 100){
            echo $i;    
        }else{
            echo "$i, ";
        }
    }   
}

