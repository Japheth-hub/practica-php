<?php

 foreach ($juegos as $juego){
                 echo'<td>';
                for($i=0; $i<count($juego); $i++){
                    echo $juego[$i].'<br>';
                }
                echo '</td>';
             }
        echo '</tr></table>';

