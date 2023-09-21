<?php

function autoload($class){
    require_once 'clases/'.$class.'.php';
}

spl_autoload_register('autoload');


